<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #301e38">

<!---Header starts here-->

<header>
    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: slategrey;">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button class="btn btn-info btn-lg  btn-responsive navbar-btn" href="#">
                    <span style="color: black">বিসিএস প্রস্তুতি</span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar"
            ">
            <ul class="nav navbar-nav navbar-right ">
                <li  style="margin-right:5px;">
                    <button class="btn btn-success btn-lg btn-responsive navbar-btn btn-block" href="#">Online Test</button>
                </li>
                <li class="dropdown"  style="margin-right:5px;">
                    <button class="dropdown-toggle btn btn-danger navbar-btn btn-lg btn-responsive btn-block"
                            data-toggle="dropdown" href="#">
                        Subjects <span
                                class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Bangla</a></li>
                        <li><a href="#">English</a></li>
                        <li><a href="#">Bangladesh</a></li>
                    </ul>
                </li>
                <li  style="margin-right:5px;">
                    <button class="btn btn-warning navbar-btn btn-lg btn-responsive btn-block" href="#">Cicular
                    </button>
                </li>
                <li  style="margin-right:5px;">
                    <button class="btn btn-warning navbar-btn btn-lg btn-responsive btn-block"  href="#">
                        Notice
                    </button>
                </li>
                <li  style="margin-right:5px;">
                    <button class="btn btn-warning navbar-btn btn-lg btn-responsive btn-block" href="#">
                        Suggestion
                    </button>
                </li>

                <li  style="margin-right:5px;">
                    <button class="btn btn-primary navbar-btn btn-lg btn-responsive btn-block" href="#"><span
                                class="glyphicon glyphicon-log-in"></span>
                        Login
                    </button>
                </li>

            </ul>
    </div>


    </nav>
    </div>
</header>


<!---Header ends here-->

<!--Here slider starts-->

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="new.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                </div>
            </div>

            <div class="item">
                <img src="new.jpg" alt="Chicago">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>

            <div class="item">
                <img src="new.jpg" alt="New York">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!--Here slider ends--->

<!---Here the content starts-->

<div class="container" style="margin-top: 10%">

    <div class="row" style="margin-bottom: 5%">

        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
    </div>

    <div class="row">

        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
        <div class="col-sm-3">
            <img src="new.jpg" class="img-rounded img-responsive" width="100%">
        </div>
    </div>


</div>

<!---here the content ends-->


<!--here footer starts-->

<footer>
    <div class="container" style="margin-top: 5%;">
        <div class="panel panel-default">
            <div class="panel-header">

                &copy; 2017 Md Abdur Rouf (University Of Dhaka)

            </div>
            <div class="panel-body">
                <button class="btn btn-info navbar-btn btn-lg btn-responsive" href="#">
                    <span style="color: black">বিসিএস প্রস্তুতি</span>
                </button>
            </div>
        </div>
    </div>
</footer>

<!---here footer ends-->

</body>
</html>
