<!DOCTYPE html>

<!-- VIEW PERSONAL INFO  -->

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<?php
session_start();

if(($_SESSION['role'] !="a"))
{
  echo "You are trying to access a BAD Page. <a href='index.php' >Login Again</a> ";
  session_destroy();
  header('location: index.php');
}
else
{
  ?>

    <html lang="en">
    <head>

    <?php include ("ems_connection.php"); ?>

    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <title>Education Management System</title>

    <!-- Mobile Specific Metas
        ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    </head>

    <body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="images/preloader.gif" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- header -->
    <header class="fixed-top header">
            <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item @@home">
                <a class="nav-link" href="index.php">Home</a> 
                </li>
                <li class="nav-item @@about">
                <a class="nav-link" href="student.php">Student</a>
                </li>
                <li class="nav-item @@courses">
                <a class="nav-link" href="faculty.html">Faculty</a>
                </li>
                <li class="nav-item @@events">
                <a class="nav-link" href="admin.php">Admin</a>
                </li>
        
            </ul>
            </div>
        </nav>
        </div>
    </div>
    </header>
    <!-- /header -->
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
        <div class="col-md-8">
            <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="admin.php">Admin</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Students</li>
            </ul>
            <p class="text-lighten mb-0">Here is where you can add a student.</p>
        </div>
        </div>
    </div>
    </section>
    <!-- /page title -->

    <!-- event single -->
    <section class="section-sm">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <h2 class="section-title">Add a Student</h2>
        </div>
        </div>
    
        <!-- border -->
        <div class="col-12 mt-4 order-4">
            <div class="border-bottom border-primary"></div>
        </div>
        </div>
        <!-- event details -->
        <div class="row">
        <div class="col-12 mb-50">
            <p>

            <div class="form" id="createAccount">
                <form method="post" action="run-add-student.php">
            
                <label for="stu_id">Student ID:</label>
                <input type="text" id="stu_id" name="stu_id">
                <br><br>
                
                <label for="stu_name">Student Name:</label>
                <input type="text" id="stu_name" name="stu_name">
                <br><br>
                
                <label for="year_of_enrollemt">Year of Enrollment:</label>
                <input type="text" id="year_of_enrollment" name="year_of_enrollment">
                <br><br>
                
                <label for="stu_major">Major:</label>
                <input type="text" id="stu_major" name="stu_major">
                <br><br>
                
                <label for="CGPA">CGPA:</label>
                <input type="text" id="CGPA" name="CGPA">
                <br><br>

                <label for="year_of_graduation">Year of Graduation:</label>
                <input type="text" id="year_of_graduation" name="year_of_graduation">
                <br><br>
                
                <input type="submit" name="submit" id="submit" value="Submit">

                </form>
            </div>
            </p>
        </div>
        </div>
        
        <!-- border -->
        <div class="col-12 mt-4 order-4">
            <div class="border-bottom border-primary"></div>
        </div>
        </div>
    </div>
    </section>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
        <div class="container">
        <div class="row">
            <div class="col-sm-7 text-sm-left text-center">
            <p class="mb-0">Copyright &copy;
                <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
                </script> 
                , designed & developed by <a href="https://themefisher.com/" class="text-muted">Themefisher</a>
            </p>
            </div>
            <div class="col-sm-5 text-sm-right text-center">
            <ul class="list-inline">
                <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/themefisher/"><i class="ti-facebook text-primary"></i></a></li>
                <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
                <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/themefisher"><i class="ti-github text-primary"></i></a></li>
                <li class="list-inline-item"><a class="d-inline-block p-2" href="https://instagram.com/themefisher/"><i class="ti-instagram text-primary"></i></a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- aos -->
    <script src="plugins/aos/aos.js"></script>
    <!-- venobox popup -->
    <script src="plugins/venobox/venobox.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>

    </body>
    </html>
}
