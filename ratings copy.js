$(document).ready(function () {
    let chart;

    const container = $('#charts');
    container.empty(); // Clear existing charts

    // Function to fetch data and update the chart
    function updateChart(category = '', date = '', office = '', floor = '') {

        const container = $('#charts');
        container.empty(); // Clear existing charts

        container.append(`
            <div class="col-xs-12 col-sm-12 col-md-4">
                <h4>Average Ratings</h4>
                <span id="totalratings"></span>
                <canvas id="chart"></canvas>
            </div>
        `);

        const ctx = document.getElementById('chart').getContext('2d');

        $.ajax({
            url: 'ratings-data.php',
            method: 'GET',
            success: function (response) {
                // Parse the response
                const data = (response);
                // Extract unique dates
                const uniqueDates = [...new Set(data.map(item => item.timestamp.split('T')[0]))].sort();

                // Populate the date filter dropdown
                const dateFilter = $('#date-filter');
                dateFilter.empty().append('<option value="">All Dates</option>');
                uniqueDates.forEach(d => dateFilter.append(`
                    <option value="${d}" ${date === d ? 'selected' : ''}>${d}</option>
                `));

                // Filter data based on category and date
                const filteredData = data.filter(item =>
                    (category === '' || item.category === category) &&
                    (date === '' || item.timestamp.startsWith(date)) &&
                    (office === '' || item.office === office) &&
                    (floor === '' || item.floor === floor)
                );

                $('#totalratings').text(`${filteredData.length} Total Ratings`);

                // Aggregate data for the chart
                const categories = [...new Set(filteredData.map(item => item.category))];
                const ratings = categories.map(cat => {
                    const categoryData = filteredData.filter(item => item.category === cat);
                    const avgRating = categoryData.reduce((sum, curr) => sum + curr.rating, 0) / categoryData.length;
                    return avgRating.toFixed(2); // Average rating per category
                });

                // Update the chart
                if (chart) chart.destroy();
                chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: categories,
                        datasets: [{
                            label: 'Average Rating',
                            data: ratings,
                            backgroundColor: 
                            "rgba(20, 27, 236, 0.5)",
                            borderColor: "#0056b3",
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 5
                            }
                        },
                        plugins: {
                            legend: {
                                display: true // Hide legend for simplicity
                            }
                        }
                    }
                });

                // Set the canvas size
                Object.assign(document.getElementById('chart').style, {
                    maxHeight: '250px', minHeight: '200px', maxWidth: '350px', minWidth: '250px'
                });

                // Populate the category filter dropdown
                const categoryFilter = $('#category-filter');
                categoryFilter.empty().append('<option value="">All Categories</option>');
                categories.forEach(cat => categoryFilter.append(`<option value="${cat}" ${category === cat ? 'selected' : ''}>${cat}</option>`));

                // Generate category-specific charts
                generateCategoryCharts(filteredData, categories, office, floor);
            },
            error: function (err) {
                console.error('Error fetching data:', err);
            }
        });
    }

    function generateCategoryCharts(data, categories, office = '', floor = '') {
        const chartTitle = office && floor ? `${office} - Floor ${floor}` :
                        office ? `${office}` : "WASHROOM";

        categories.forEach(category => {
            const categoryData = data.filter(item => item.category === category);
            const ratingCounts = [1, 2, 3, 4, 5].map(rating => categoryData.filter(item => item.rating === rating).length);
            const canvasId = `chart-${category}`;

            // Create a new canvas for the category chart
            container.append(`
                <div class="col-md-4">
                    <h4>${chartTitle}</h4>
                    <span>${categoryData.length} Total Ratings</span>
                    <canvas id="${canvasId}"></canvas>
                </div>
            `);

            // Create the chart
            // set chart size
            new Chart(document.getElementById(canvasId).getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['1 Star', '2 Stars', '3 Stars', '4 Stars', '5 Stars'],
                    datasets: [{
                        label: `Ratings for ${category}`,
                        data: ratingCounts,backgroundColor: [
                            "rgba(240, 89, 48, 0.5)", 
                            "rgba(245, 146, 75, 0.5)", 
                            "rgba(255, 201, 0, 0.5)", 
                            "rgba(168, 212, 0, 0.5)", 
                            "rgba(90, 191, 0, 0.5)"
                        ],
                        borderColor: ["#f05930", "#f5924b", "#ffc900", "#a8d400", "#5abf00"],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: { y: { beginAtZero: true } },
                    plugins: { legend: { display: false } }
                }
            });

            Object.assign(document.getElementById(canvasId).style, {
                maxHeight: '250px', minHeight: '200px', maxWidth: '350px', minWidth: '250px'
            });
        });
    }

    // Load Office and Floor filters
    function loadOfficeFloorFilters() {
        $.ajax({
            url: 'ratings-data.php',
            method: 'GET',
            success: function (response) {
                const data = response;

                const uniqueOffices = [...new Set(data.map(item => item.office))];
                const officeFilter = $('#office-filter');
                officeFilter.empty().append('<option value="">All Offices</option>');
                uniqueOffices.forEach(office => {
                    officeFilter.append(`<option value="${office}">${office}</option>`);
                });

                officeFilter.change(function () {
                    const selectedOffice = $(this).val();
                    const uniqueFloors = [...new Set(data.filter(item => item.office === selectedOffice).map(item => item.floor))];
                    const floorFilter = $('#floor-filter');
                    floorFilter.empty().append('<option value="">All Floors</option>');
                    uniqueFloors.forEach(floor => {
                        floorFilter.append(`<option value="${floor}">${floor}</option>`);
                    });

                    // Reset chart when office changes
                    updateChart($('#category-filter').val(), $('#date-filter').val(), selectedOffice, '');
                });

                $('#floor-filter').change(function () {
                    updateChart($('#category-filter').val(), $('#date-filter').val(), $('#office-filter').val(), $(this).val());
                });
            },
            error: function (err) {
                console.error('Error fetching office and floor data:', err);
            }
        });
    }

    // Event listeners for filters
    $('#category-filter, #date-filter').change(() => updateChart($('#category-filter').val(), $('#date-filter').val(), $('#office-filter').val(), $('#floor-filter').val()));

    loadOfficeFloorFilters();
    updateChart();


});
