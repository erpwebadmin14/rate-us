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
            <h5 class="question">Results</h5>
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
            <div class="col-12">
                <div id="charts" class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="ratings.js"></script>

</body>

</html>