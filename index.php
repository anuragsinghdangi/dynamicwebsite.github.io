<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="img/ms-icon-150x150.png" type="image" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <script>
        window.onload = function() {
            document.getElementById('loader').style.display = "none";
            
            document.getElementById('content').style.display = "block";


        }
    </script>
<script>
        $(window).load(function() { 
            $('#loader').fadeOut(); 
            $('.preloader_img').delay(1000).fadeOut('slow');     
});
    </script>
    <style>
        #content {
            display: none;

        }

        #loader {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 300px;
            height: 300px;

        }

        #loader img {
            width: 300px;
        }
    </style>
</head>

<body>
    <div id="loader" class="aler">
        <img src="img/loader1.gif" class="preloader_img" alt="">

    </div>
    <div id="content">
        <div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-danger' id='bar' role='progressbar' style='width: 0%;'></div>
        </div>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="img/download.png" alt="logo" height="30px" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contect.php">Contect</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <?php

        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<h4 class="bg-danger text-white alert w-100">' . $_SESSION['status'] . '</h4>';
            unset($_SESSION['status']);
        }

        ?>


        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img1.jpg" class="d-block w-100" alt="..." style="height:90%;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label-1</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/img2.jpg" class="d-block w-100"  alt="..."style="height:90%;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label-2</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/img4.jpg" class="d-block w-100"  alt="..." style="height:90%;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label-3</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="img/img3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label-4</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div> -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="img/img5.jfif" alt="" class="img-fluid aboutimg">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-4">I am anurag singh</h2>
                        <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi nesciunt maxime illo molestias vitae aspernatur id ratione a unde sed, fugit et dolore, ipsam sunt, placeat dolorum omnis voluptates recusandae.</p>
                        <a href="about.php" class="btn btn-danger">Check more...</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Our services</h2>
                <p class="text-center font">-----------</p>

            </div>
            <div class="container-fluid">
                <div class="card-deck">
                    <div class="card">
                        <img src="img/img6.jpg" class="card-img-top" alt="..." id="img1">
                        <div class="card-body">
                            <h5 class="card-title">Beautiful Flower</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="services.php" class="btn btn-info"> See Profile</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/img7.jpg" class="card-img-top" alt="..." id="img2">
                        <div class="card-body">
                            <h5 class="card-title">Beautiful Flower</h5>
                            <p class="card-text">This flower has supporting text below as a natural lead-in to additional content.</p>
                            <a href="services.php" class="btn btn-info"> See Profile</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/img8.jpg" class="card-img-top" alt="..." id="img3">
                        <div class="card-body">
                            <h5 class="card-title">Beautiful Flower</h5>
                            <p class="card-text">This is a wider flower with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a href="services.php" class="btn btn-info"> See Profile</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid my-3">
                <div class="card-deck">
                    <div class="card">
                        <img src="img/img9.jpg" class="card-img-top" alt="..." id="img1">
                        <div class="card-body">
                            <h5 class="card-title">Beautiful Flower</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="services.php" class="btn btn-info"> See Profile</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/img10.jpg" class="card-img-top" alt="..." id="img2">
                        <div class="card-body">
                            <h5 class="card-title">Beautiful Flower</h5>
                            <p class="card-text">This flower has supporting text below as a natural lead-in to additional content.</p>
                            <a href="services.php" class="btn btn-info"> See Profile</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/img8.jpg" class="card-img-top" alt="..." id="img3">
                        <div class="card-body">
                            <h5 class="card-title">Beautiful Flower</h5>
                            <p class="card-text">This is a wider flower with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a href="services.php" class="btn btn-info"> See Profile</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center"> Our Gellery</h2>
                <p class="text-center font">.........</p>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-3">
                        <div class="card">
                            <img src="img/img6.jpg" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
        </section>
        <section class="my-5">
            <div class="py-1">
                <h2 class="text-center">Contect </h2>
                <p class="text-center font">.........</p>
            </div>

            <div class="container w-50 m-auto">
                <form action="database/form.php" method="POST">
                    <div class="form-group">
                        <label>Name..</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email Id</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" class="form-control" placeholder="Enter mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea type="comment" name="comm" cols="10" rows="5" class="form-control"></textarea>
                    </div>

                    <button type="submit" name="save_btn" class="btn btn-primary ml-1">Submit</button>
                </form>
            </div>
        </section>




        <footer class="new_footer_area bg_color bg-info" id="footer">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                                <p>Don’t miss any updates of our new templates and extensions.!</p>
                                <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Company</a></li>

                                    <li><a href="#">Desktop</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">My tasks</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">FAQ</a></li>

                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Support Policy</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© cakecounter Inc.. 2019 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="#">CakeCounter</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fa fa-chevron-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // show the alert

            setTimeout(function() {

                $(".alert").alert('close');
            }, 3000);
        });
    </script>
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });






        var progress = setInterval(function() {
            var $bar = $("#bar");

            if ($bar.width() >= 600) {
                clearInterval(progress);
            } else {
                $bar.width($bar.width() + 60);
            }
            $bar.text($bar.width() / 6 + "%");
            if ($bar.width() / 6 == 100) {
                $bar.text("Almost there ... " + $bar.width() / 6 + "%");
            }
        }, 800);

        $(window).load(function() {
            $("#bar").width(600);
            $(".loader").fadeOut(3000);
        });
    </script>
</body>

</html>