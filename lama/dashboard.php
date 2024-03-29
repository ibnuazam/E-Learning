<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>FILLO LEARNING</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>FILLO LEARNING</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Administrator</p>
                <li class="active">
                    <a href="dashboard.php?page=course">Course</a>
                </li>
                <li>
                    <a href="dashboard.php?page=quiz">Quiz</a>
                </li>
                <li>
                    <a href="dashboard.php?page=assign">Assignment</a>
                </li>
                <li>
                    <a href="dashboard.php?page=raport">Raport Book</a>
                </li>
                <!-- <li>
                    <a href="#">Log Out</a>
                </li> -->
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Course</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.html">Quiz</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index3.html">Assignment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index4.html">Raport Book</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div>
                <?php
                if (isset($_GET['halaman'])){
                    $halaman = $_GET['halaman'];
                }else{
                    $halaman = 'index';
                    echo '<h1>Materi disini</h1>';
                    echo '<p>Ini adalah materi yang ditawarkan oleh FILLO LEARNING</p>';
                }
                require_once($halaman . ".php");
                ?>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>