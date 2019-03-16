<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The API side for the PetroBYTES platform">
    <meta name="author" content="BYTES">

    <title>PetroBytes API</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap-italia.min.css" rel="stylesheet">
    <link rel="icon" href="faviconsmall.png" type="image/x-icon" />
    <link rel="shortcut icon" href="faviconsmall.png" type="image/x-icon" />
</head>

<body>
    <div class="it-header-wrapper">
        <div class="it-header-slim-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-header-slim-wrapper-content">
                            <a class="d-none d-lg-block navbar-brand" href="#"><img src="faviconsmall.png">
                                PetroBYTES</a>
                            <div class="nav-mobile">
                                <nav>
                                    <a class="it-opener d-lg-none" data-toggle="collapse" href="#menu-principale"
                                        role="button" aria-expanded="false" aria-controls="menu-principale">
                                        <span>PetroBYTES</span>
                                        <svg class="icon">
                                            <use xlink:href="./svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <div class="link-list-wrapper collapse" id="menu-principale">
                                        <ul class="link-list">
                                            <li><a href="../client">Client</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="header-slim-right-zone">
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <span>Browse</span>
                                        <svg class="icon d-none d-lg-block">
                                            <use xlink:href="./svg/sprite.svg#it-expand"></use>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="link-list-wrapper">
                                                    <ul class="link-list">
                                                        <li><a class="list-item" href="#"><span>A</span></a></li>
                                                        <li><a class="list-item" href="#"><span>B</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="it-access-top-wrapper">
                                    <button class="btn btn-primary btn-sm" href="#" type="button">LOG IN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="it-nav-wrapper">
            <div class="it-header-center-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="it-header-center-content-wrapper">
                                <div class="it-brand-wrapper">
                                    <a href="#">
                                        <img src="favicon.png" alt="">
                                        <div class="it-brand-text">
                                            <h2 class="no_toc">PetroBYTES</h2>
                                            <h3 class="no_toc d-none d-md-block">API Interface</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid my-4" id="content" name="content">
        <?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=id8983458_bytes", "id8983458_root", "ankeshraj");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt select query execution
try{
    $sql = "SELECT * FROM petrolpump";  
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        while($row = $result->fetch()){
            ?>
        <div class="row">
            <div class="col-12 col-lg-2">
                <!--start card-->
                <div class="card-wrapper card-space">
                    <div class="card card-bg card-big border-bottom-card">
                        <div class="card-body">
                            <img src="./gas.png"><br><br><br>
                            <p class="card-text">The Statistical Analysis of the data from
                                <strong><?php echo $row['address'];?></strong>
                            </p>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <div class="col-12 col-lg-6">
                <!--start card-->
                <div class="card-wrapper card-space">
                    <div class="card card-bg card-big border-bottom-card">
                        <div class="card-body">
                            <div class="categoryicon-top">
                                <strong>Average Density Error for the Day</strong>
                                <svg class="icon">
                                    <img src="./fuel.png" alt="">
                                </svg>
                                <span class="text"><?php echo $row['error_density'] ; ?></span>
                            </div>
                            <div class="categoryicon-top">
                                <strong>Average Volume Error for the Day</strong>
                                <svg class="icon">
                                    <img src="./discharge.png" alt="">
                                </svg>
                                <span class="text"><?php echo $row['error_volume'] ; ?></span>
                            </div>
                            <div class="categoryicon-top">
                                <strong>Status Code : <?php echo $row['status']; ?></strong>
                                <span class="text"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <div class="col-12 col-lg-4">
                <!--start card-->
                <div class="card-wrapper card-space">
                    <div class="card card-bg card-big border-bottom-card">
                        <div class="card-body">
                            <div id="chartContainer<?php echo $row['id']; ?>" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
        </div>
        <?php }
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?></div>

    <footer class="it-footer">
        <div class="it-footer-main">
            <div class="container">
                <section>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="it-brand-wrapper">
                                <a href="#">
                                    <svg class="icon">
                                        <use xlink:href="./svg/sprite.svg#it-code-circle"></use>
                                    </svg>
                                    <div class="it-brand-text">
                                        <h2 class="no_toc">PetroBYTES</h2>
                                        <h3 class="no_toc d-none d-md-block">API Interface</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section>

                </section>
                <section class="py-4 border-white border-top">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 pb-2">
                            <h4><a href="#" title="Vai alla pagina: Contatti">Contact</a></h4>
                            <p>
                                <strong>IIT ISM DHANBAD</strong><br> DHANBAD-826004 JHARKHAND
                            </p>
                            <div class="link-list-wrapper">
                                <ul class="footer-list link-list clearfix">
                                    <li><a class="list-item" href="#"
                                            title="Vai alla pagina: Posta Elettronica Certificata">Github Code</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-2">
                            <h4><a href="#" title="Vai alla pagina: Lorem Ipsum">About</a></h4>
                        </div>
                        <div class="col-lg-4 col-md-4 pb-2">
                            <div class="row">


                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="it-footer-small-prints clearfix">
            <div class="container">
                <h3 class="sr-only">Links</h3>
                <ul class="it-footer-small-prints-list list-inline mb-0 d-flex flex-column flex-md-row">
                    <li class="list-inline-item"><a href="#" title="Note Legali">Media policy</a></li>
                    <li class="list-inline-item"><a href="#" title="Note Legali">Legal Notices</a></li>
                    <li class="list-inline-item"><a href="#" title="Privacy-Cookies">Privacy policy</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="./js/bootstrap-italia.bundle.min.js"></script>

    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">
    var i;
    for (i = 1; i <= 5; i++) {
        var dataPoints = [];
        var file = "";

        function getDataPointsFromCSV(csv) {
            var dataPoints = csvLines = points = [];
            csvLines = csv.split(/[\r?\n|\r|\n]+/);

            for (var i = 0; i < csvLines.length; i++)
                if (csvLines[i].length > 0) {
                    points = csvLines[i].split(",");
                    dataPoints.push({
                        x: parseFloat(points[0]),
                        y: parseFloat(points[1])
                    });
                }
            return dataPoints;
        }

        switch (i) {
            case 1:
                file = "./ppa.csv";
                $.get(file, function(data) {
                    var chart = new CanvasJS.Chart("chartContainer1", {
                        title: {
                            text: "Transaction Density vs Fit Density",
                        },
                        data: [{
                            type: "line",
                            dataPoints: getDataPointsFromCSV(data)
                        }]
                    });

                    chart.render();

                });

                break;
            case 2:
                file = "./ppb.csv";
                $.get(file, function(data) {
                    var chart = new CanvasJS.Chart("chartContainer2", {
                        title: {
                            text: "Transaction Density vs Fit Density",
                        },
                        data: [{
                            type: "line",
                            dataPoints: getDataPointsFromCSV(data)
                        }]
                    });

                    chart.render();

                });

                break;
            case 3:
                file = "./ppc.csv";
                $.get(file, function(data) {
                    var chart = new CanvasJS.Chart("chartContainer3", {
                        title: {
                            text: "Transaction Density vs Fit Density",
                        },
                        data: [{
                            type: "line",
                            dataPoints: getDataPointsFromCSV(data)
                        }]
                    });

                    chart.render();

                });

                break;
            case 4:
                file = "./ppd.csv";
                $.get(file, function(data) {
                    var chart = new CanvasJS.Chart("chartContainer4", {
                        title: {
                            text: "Transaction Density vs Fit Density",
                        },
                        data: [{
                            type: "line",
                            dataPoints: getDataPointsFromCSV(data)
                        }]
                    });

                    chart.render();

                });

                break;
            case 5:
                file = "./ppe.csv";
                $.get(file, function(data) {
                    var chart = new CanvasJS.Chart("chartContainer5", {
                        title: {
                            text: "Transaction Density vs Fit Density",
                        },
                        data: [{
                            type: "line",
                            dataPoints: getDataPointsFromCSV(data)
                        }]
                    });

                    chart.render();

                });

                break;
        }


    }
    </script>