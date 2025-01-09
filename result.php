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
            <img src="meg35.png" alt="" style="width: 150px">
            <br>
            <h5 class="question">Results</h5>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <label for="category-filter">Filter by Category:</label>
                    <select id="category-filter" class="form-control input-xs">
                        <option value="">All Categories</option>
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <label for="date-filter">Filter by Date:</label>
                    <select id="date-filter" class="form-control">
                        <option value="">All Dates</option>
                    </select>
                </div>
                <div class="col-12">
                    <div id="charts" class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <canvas id="chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:window.history.go(-1);">Back</a>
            <img src="3logo.png" alt="" style="width: 300px">
        </div>
    </div>


    <script src="ratings.js"></script>
</body>

</html>