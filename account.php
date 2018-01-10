<!DOCTYPE html>
<html>

<!-- Mirrored from demos.pixelatethemes.com/financepro-2/Demo_5/busniess-growth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2017 09:55:14 GMT -->
<head>
    <meta charset="UTF-8">
    <title>CT || Payroll</title>
    <!-- mobile responsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/fncp-icon/style.css">
    <link rel="stylesheet" href="plugins/Stroke-Gap-Icons-Webfont/style.css">
    <link rel="stylesheet" href="plugins/animate.min.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl.carousel-2/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <!-- main stylesheet-->
    <link rel="stylesheet" href="css/stellarnav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/space.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="style-home-page3 header3-inn">
<div class="bg-header3-inn">
    <?php include("Header.php"); ?>
    <section class="inner-banner">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h3>My Account</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bread-cumb">
                        <div class="thm-container">
                            <ul class="list-inline">
                                <li><a href="index.php">Home</a></li>
                                <li><span>My Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section id="main" class="clearfix Account ad-profile-page">
    <div class="container">
        <div class="ad-profile section">
            <div class="user-profile">
                <div class="user-images">
                    <img src="images/user.jpg" alt="User Images" class="img-responsive">
                </div>
                <div class="user">
                    <h2>Hello, <span>Hamza</span></h2>
                    <h5>You last logged in at: 14-01-2016 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
                </div>

                <div class="favorites-user">

                    <div class="favorites">
                        <a href="#">Upload New File <i class="fa fa-upload" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div><!-- user-profile -->

            <ul class="user-menu list-inline">
                <li class="active"><a href="account.php">My Account</a></li>
                <li><a href="uploaded.php">Uploaded</a></li>
                <li><a href="accept.php">Accept</a></li>
                <li><a href="reject.php">Reject </a></li>
                <li><a href="UploadNewFile.php">Upload New File</a></li>
            </ul>
        </div><!-- ad-profile -->

        <div class="profile">
            <div class="row">
                <div class="col-sm-12">
                    <div class="user-pro-section mb-50">
                        <form id="my_account">
                        <!-- profile-details -->
                        <div class="profile-details section pb-0">
                            <h2>My Account Details</h2>
                            <!-- form -->
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="Jhon Doe">
                                </div>
                            </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Jhon Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date Of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name-three">Social Insurance Number</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name-three">Postal Code</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-15 d-inline-block Dependence">Dependence</h3>
                            <div class="row dependence">
                                <div class="col-sm-4 mt-10">
                                    <span class="pull-left number">1-</span>
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input class="form-control" type="text" >
                                </div>
                                </div>
                                <div class="col-sm-4 mt-10">
                                    <div class="form-group">
                                        <label>last name</label>
                                        <input  type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-10">
                                    <div class="form-group">
                                        <label>date of birth</label>
                                        <input class="form-control" type="date">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group ml-10">
                                        <label for="name-three">Email</label>
                                        <input type="Email" class="form-control" >
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="change-password section">
                                <h3 class="Dependence ml-10 mb-10">Change password</h3>
                                <!-- form -->
                                <div class="form-group ml-10">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control"  >
                                </div>

                                <div class="form-group ml-10">
                                    <label>New password</label>
                                    <input type="password" id="a_password" name="a_password" class="form-control" >
                                </div>

                                <div class="form-group ml-10">
                                    <label>Confirm password</label>
                                    <input type="password" name="a_c_password" class="form-control" >
                                </div>
                            </div><!-- change-password -->
                            <button class="btn custom-red-buttom ml-40">Update Profile</button>
                            <button type="reset" class="btn cancle">Cancle</button>
                        </form>
                    </div><!-- profile-details -->
                        <!-- change-password -->


                    </div><!-- user-pro-edit -->
                </div><!-- profile -->

            </div><!-- row -->
        </div>
    </div><!-- container -->
</section><!-- ad-profile-page -->


<?php include("Footer.php") ?>
<!-- helper js-->
<script src="plugins/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<script src="plugins/jquery.mixitup.min.js"></script>
<script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="plugins/waypoints.min.js"></script>
<script src="plugins/jquery.counterup.min.js"></script>
<script src="js/stellarnav.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script>
    $("#my_account").validate({
        rules: {

            a_password: {
                required: true,
                minlength: 5,
                atLeastOneLowercaseLetter: false,
                atLeastOneUppercaseLetter: false,
                atLeastOneNumber: false
            },
            a_c_password: {
                equalTo: "#a_password"
            }

        },
        submitHandler: function (form) {
            form.submit();
        }
    });
</script>
<script src="js/uikit.min.js"></script>
<script src="js/theme.js"></script>
</body>

<!-- Mirrored from demos.pixelatethemes.com/financepro-2/Demo_5/busniess-growth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2017 09:55:18 GMT -->
</html>