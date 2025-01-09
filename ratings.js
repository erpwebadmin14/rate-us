$(document).ready(function () {
    let chart;

    function generateRandomColors(count) {
        const colors = [];
        for (let i = 0; i < count; i++) {
            const r = Math.floor(Math.random() * 256);
            const g = Math.floor(Math.random() * 256);
            const b = Math.floor(Math.random() * 256);
            colors.push(`rgba(${r}, ${g}, ${b}, 0.5)`); // Semi-transparent fill
        }
        return colors;
    }

    const container = $('#charts');
    container.empty(); // Clear existing charts

    // Function to fetch data and update the chart
    function updateChart(category = '', date = '') {

        container.empty(); // Clear existing charts
        container.append(`<div class="col-xs-12 col-sm-12 col-md-4">
            <h4>Average Ratings</h4>
            <canvas id="chart"></canvas>
        </div>`);

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
                const selectedDate = dateFilter.val();
                dateFilter.empty();
                dateFilter.append('<option value="">All Dates</option>');
                uniqueDates.forEach(date => {
                    if (selectedDate == date)
                        dateFilter.append(`<option value="${date}" selected>${date}</option>`);
                    else
                        dateFilter.append(`<option value="${date}">${date}</option>`);
                });

                // Filter data based on category and date
                const filteredData = data.filter(item => {
                    const matchesCategory = category === '' || item.category === category;
                    const matchesDate = date === '' || item.timestamp.startsWith(date);
                    return matchesCategory && matchesDate;
                });

                // Aggregate data for the chart
                const categories = [...new Set(filteredData.map(item => item.category))];
                const ratings = categories.map(cat => {
                    const categoryData = filteredData.filter(item => item.category === cat);
                    const avgRating = categoryData.reduce((sum, curr) => sum + curr.rating, 0) / categoryData.length;
                    return avgRating.toFixed(2); // Average rating per category
                });

                const barColors = generateRandomColors(categories.length);

                // Update the chart
                if (chart) chart.destroy();
                chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: categories,
                        datasets: [{
                            label: 'Average Rating',
                            data: ratings,
                            backgroundColor: barColors,
                            borderColor: barColors.map(color => color.replace('0.5', '1')),
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
                document.getElementById('chart').style.maxHeight = '200px';
                document.getElementById('chart').style.maxWidth = '300px';

                document.getElementById('chart').style.minHeight = '200px';
                document.getElementById('chart').style.minWidth = '200px';

                // Populate the category filter dropdown
                const categoryFilter = $('#category-filter');
                const selectedCategory = categoryFilter.val();
                categoryFilter.empty();
                categoryFilter.append('<option value="">All Categories</option>');
                categories.forEach(cat => {
                    if (selectedCategory == cat)
                        categoryFilter.append(`<option value="${cat}" selected>${cat}</option>`);
                    else
                        categoryFilter.append(`<option value="${cat}">${cat}</option>`);
                });

                // Generate category-specific charts
                generateCategoryCharts(filteredData, categories);
            },
            error: function (err) {
                console.error('Error fetching data:', err);
            }
        });
    }

    function generateCategoryCharts(data, categories) {

        categories.forEach(category => {
            const categoryData = data.filter(item => item.category === category);

            // Group data by ratings (1-5)
            const ratingCounts = [1, 2, 3, 4, 5].map(rating => {
                return categoryData.filter(item => item.rating === rating).length;
            });

            // Create a new canvas for the category chart
            const canvasId = `chart-${category}`;
            container.append(`<div class="col-xs-12 col-sm-12 col-md-4">
                <h4>${category}</h4>
                <canvas id="${canvasId}"></canvas>
            </div>`);

            // Generate random colors for the bars
            const barColors = generateRandomColors(5);

            // Create the chart
            // set chart size
            new Chart(document.getElementById(canvasId).getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['1 Star', '2 Stars', '3 Stars', '4 Stars', '5 Stars'],
                    datasets: [{
                        label: `Rating Distribution for ${category}`,
                        data: ratingCounts,
                        backgroundColor: barColors,
                        borderColor: barColors.map(color => color.replace('0.5', '1')),
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        datalabels: {
                            anchor: 'end',
                            align: 'start',
                            color: '#000',
                            font: {
                                weight: 'bold'
                            }
                        }
                    }
                }
            });

            // Set the canvas size
            document.getElementById(canvasId).style.maxHeight = '200px';
            document.getElementById(canvasId).style.maxWidth = '300px';

            document.getElementById(canvasId).style.minHeight = '200px';
            document.getElementById(canvasId).style.minWidth = '200px';

        });
    }

    // Event listeners for filters
    $('#category-filter').change(function () {
        const category = $(this).val();
        const date = $('#date-filter').val();
        updateChart(category, date);
    });

    $('#date-filter').change(function () {
        const category = $('#category-filter').val();
        const date = $(this).val();
        updateChart(category, date);
    });

    // Initial chart load
    updateChart();


});
