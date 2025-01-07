<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChartJS Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Category Ratings Bar Chart</h1>
    <label for="category-filter">Filter by Category:</label>
    <select id="category-filter">
        <option value="">All Categories</option>
    </select>
    <label for="date-filter">Filter by Date:</label>
    <input type="date" id="date-filter">

    <canvas id="chart" width="400" height="200"></canvas>

    <script src="ratings.js"></script>
</body>

</html>