<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Satisfaction Meter Result</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="width: 100% !important;">
        <div class="feedback" style="max-width: 100% !important;">
            <img src="meg.png" alt="" style="width: 150px">
            <br>
            <h5 class="question">QR Feedback Results</h5>
            <div class="row mb-2">
                <div class="col-sm-2">
                    <select id="office-filter" class="form-control">
                        <option value="">All Offices</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="floor-filter" class="form-control">
                        <option value="">All Floors</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="restroom_type-filter" class="form-control">
                        <option value="">Restroom type</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select id="restroom_category-filter" class="form-control">
                        <option value="">Restroom category</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex">
                        <input type="text" id="date-start" class="form-control me-2" placeholder="Start Date"
                            onfocus="(this.type='date')" onblur="(this.type='text')" />
                        <input type="text" id="date-end" class="form-control" placeholder="End Date"
                            onfocus="(this.type='date')" onblur="(this.type='text')" />
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="left">
                    <div class="col-4 d-flex mb-2">
                        <div class="card text-center mx-2"
                            style="width: 180px; border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                            <div class="card-body">
                                <h6 class="text-muted">Record Count</h6>
                                <h3 id="record-count">0</h3>
                            </div>
                        </div>
                        <div class="card text-center mx-2"
                            style="width: 180px; border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                            <div class="card-body">
                                <h6 class="text-muted">Average Rating</h6>
                                <h3 id="average-rating">0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex mb-2">
                        <div class="card text-center mx-2"
                            style="width: 180px; border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                            <div class="card-body">
                                <h6 class="text-muted">% of Negative Ratings</h6>
                                <h3 id="negative-rating">0</h3>
                            </div>
                        </div>
                        <div class="card text-center mx-2"
                            style="width: 180px; border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                            <div class="card-body">
                                <h6 class="text-muted">% of Positive Ratings</h6>
                                <h3 id="positive-rating">0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <!-- Table Chart with Heatmap -->
                    <div class="card text-center mx-2"
                        style="border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); width: 90%; max-width: 1000px;">
                        <div class="card-body">
                            <h6 class="text-muted">Rating Table</h6>
                            <table id="rating-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Average Rating</th>
                                        <th>% Positive Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="rating-cell" data-value="3.2">3.2</td>
                                        <td class="rating-cell" data-value="70">70%</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-cell" data-value="4.1">4.1</td>
                                        <td class="rating-cell" data-value="80">80%</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-cell" data-value="2.9">2.9</td>
                                        <td class="rating-cell" data-value="60">60%</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-cell" data-value="3.5">3.5</td>
                                        <td class="rating-cell" data-value="75">75%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex mb-4">
                <div class="card text-center mx-2"
                    style="width: 325px; height: 350px; border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                    <div class="card-body">
                        <h6 class="text-muted">Rating Distribution</h6>
                        <canvas id="rating-pie-chart" width="180" height="180"></canvas>
                    </div>
                </div>
            </div>

            <!-- Table Chart with Heatmap Section -->
            <div class="col-12 d-flex justify-content-center mb-4">
                <div class="card text-center mx-2"
                    style="border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); width: 90%; max-width: 1000px;">
                    <div class="card-body">
                        <h6 class="text-muted">Rating Table</h6>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Average Rating</th>
                                    <th>% Positive Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="avg-rating-value">0</td>
                                    <td id="positive-rating-value">0%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="ratings.js"></script>
    <script>
        function formatDateToMMDDYYYY(dateString) {
            if (!dateString) return "";
            let date = new Date(dateString);
            let mm = String(date.getMonth() + 1).padStart(2, '0'); // Get month (0-based index)
            let dd = String(date.getDate()).padStart(2, '0');
            let yyyy = date.getFullYear();
            return `${mm}/${dd}/${yyyy}`;
        }

        document.addEventListener("DOMContentLoaded", function () {
            let startDateInput = document.getElementById("date-start");
            let endDateInput = document.getElementById("date-end");

            function handleDateInput(input) {
                input.addEventListener("change", function () {
                    this.value = formatDateToMMDDYYYY(this.value);
                });

                input.addEventListener("blur", function () {
                    this.value = formatDateToMMDDYYYY(this.value);
                });
            }

            handleDateInput(startDateInput);
            handleDateInput(endDateInput);

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('rating-pie-chart').getContext('2d');
            const data = {
                labels: ['Positive', 'Negative'],
                datasets: [{
                    data: [70, 30], // Example data, update with your actual data
                    backgroundColor: ['#4caf50', '#f44336'],
                    borderColor: ['#ffffff', '#ffffff'],
                    borderWidth: 1
                }]
            };
            const options = {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return context.label + ': ' + context.raw + '%';
                            }
                        }
                    }
                }
            };
            new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });

            function applyHeatmap() {
                const cells = document.querySelectorAll('.rating-cell');

                cells.forEach(cell => {
                    const value = parseFloat(cell.getAttribute('data-value'));
                    let color;

                    // Apply heatmap colors based on the value (e.g., 0 to 100 scale)
                    if (value <= 50) {
                        color = `rgb(255, ${Math.round(255 * (value / 50))}, 0)`;  // from red to yellow
                    } else {
                        color = `rgb(${Math.round(255 * (2 - (value / 50)))}, 255, 0)`;  // from yellow to green
                    }

                    cell.style.backgroundColor = color;
                    cell.style.color = value > 50 ? 'black' : 'white'; // Ensure readability
                });
            }

            // Apply heatmap styles after DOM content is loaded
            applyHeatmap();

            // Optionally, you can add DataTables to enhance the table functionality (pagination, sorting)
            $('#rating-table').DataTable();
        });
    </script>

</body>

</html>