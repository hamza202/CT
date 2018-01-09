<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CT || Registration</title>
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

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/space.css">
</head>
<body class="style-home-page3 header3-inn">
<div class="bg-header3-inn">
    <?php include("Header.php"); ?>
    <section class="inner-banner">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h3>Registration</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bread-cumb">
                        <div class="thm-container">
                            <ul class="list-inline">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Registration</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="page with-sidebar left blog-page sec-pad service-single-page">
    <div class="thm-container">
        <section class="reg">
        <div class="row">
            <div class="col-xs-12">
                <div class="product-tab-box mb0">
                    <div class="tab-title-box">
                        <ul role="tablist" class="clearfix">
                            <li data-tab-name="software" class="active"><a href="#des" aria-controls="des" role="tab" data-toggle="tab" aria-expanded="false">Personal</a></li>
                            <li data-tab-name="software"><a href="#speci" aria-controls="speci" role="tab" data-toggle="tab" aria-expanded="false">Business</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="des" class="single-tab-content tab-pane fade active in">
                            <div class="personal text-capitalize">
                            <form id="personalReg">
                                <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-grp">
                                        <label>First Name<sup class="required">*</sup></label>
                                        <input id="p_f_name" type="text" name="p_f_name" >
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="form-grp">
                                            <label>Last Name<sup class="required">*</sup></label>
                                            <input id="p_l_name" type="text" name="p_l_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-20">
                                        <div class="form-grp">
                                            <label>Date of birth<sup class="required">*</sup></label>
                                            <input class="p-10" id="p_date" type="date" name="p_date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-20">
                                        <div class="form-grp">
                                            <label>social insurance number<sup class="required">*</sup></label>
                                            <input class="p-10" id="p_social" type="text" name="p_social">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-20">
                                        <div class="form-grp">
                                            <label>Address<sup class="required">*</sup></label>
                                            <input class="p-10" id="p_address" type="text" name="p_address">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-20">
                                        <div class="form-grp">
                                            <label>Postal Code<sup class="required">*</sup></label>
                                            <input class="p-10" id="p_code" type="text" name="p_code">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="container" style="width: 100%">
                                        <h3 class="mt-30 d-inline-block">Dependence</h3>
                                    <div class="row">
                                        <div class="col-sm-4 mt-10">
                                            <span class="pull-left number">1-</span>
                                            <div class="form-grp">
                                                <label class="m-l-12">First name<sup class="required">*</sup></label>
                                                <input class="p-10" id="d_first_name_1" type="text" name="d_first_name_1">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mt-10">
                                            <div class="form-grp">
                                                <label>last name<sup class="required">*</sup></label>
                                                <input class="p-10" id="d_last_name_1" type="text" name="d_last_name_1">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 mt-10">
                                            <div class="form-grp">
                                                <label>date of birth<sup class="required">*</sup></label>
                                                <input class="p-10" id="d_date_1" type="text" name="d_date_1">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-sm-4 mt-10">
                                                <span class="pull-left number">2-</span>
                                                <div class="form-grp">
                                                    <label class="m-l-12">First name</label>
                                                    <input class="p-10" id="d_first_name_2" type="text" name="d_first_name_2">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-10">
                                                <div class="form-grp">
                                                    <label>last name</label>
                                                    <input class="p-10" id="d_last_name_2" type="text" name="d_last_name_2">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-10">
                                                <div class="form-grp">
                                                    <label>date of birth</label>
                                                    <input class="p-10" id="d_date_2" type="text" name="d_date_2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mt-10">
                                                <span class="pull-left number">3-</span>
                                                <div class="form-grp">
                                                    <label class="m-l-12">First name</label>
                                                    <input class="p-10" id="d_first_name_3" type="text" name="d_first_name_3">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-10">
                                                <div class="form-grp">
                                                    <label>last name</label>
                                                    <input class="p-10" id="d_last_name_3" type="text" name="d_last_name_3">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-10">
                                                <div class="form-grp">
                                                    <label>date of birth</label>
                                                    <input class="p-10" id="d_date_3" type="text" name="d_date_3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mt-10">
                                                <span class="pull-left number">4-</span>
                                                <div class="form-grp">
                                                    <label class="m-l-12">First name</label>
                                                    <input class="p-10" id="d_first_name_4" type="text" name="d_first_name_4">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-10">
                                                <div class="form-grp">
                                                    <label>last name</label>
                                                    <input class="p-10" id="d_last_name_4" type="text" name="d_last_name_4">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mt-10">
                                                <div class="form-grp">
                                                    <label>date of birth</label>
                                                    <input class="p-10" id="d_date_4" type="text" name="d_date_4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-12 mt-20">
                                            <div class="form-grp">
                                                <label>Email<sup class="required">*</sup></label>
                                                <input id="p_email" type="email" name="p_email">
                                            </div>
                                        </div>
                                            <div class="col-sm-6 mt-20">
                                                <div class="form-grp">
                                                    <label>Password<sup class="required">*</sup></label>
                                                    <input id="p_password" type="password" name="p_password">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-20">
                                                <div class="form-grp">
                                                    <label>Confirm Password<sup class="required">*</sup></label>
                                                    <input id="p_c_password" type="password" name="p_c_password">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="thm-button inverse mt-30 ml-0">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div id="speci" class="single-tab-content tab-pane fade">
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</section>
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
    $("#personalReg").validate({
        rules: {
            p_f_name: {
                required: true
            },
            p_l_name: {
                required: true
            },
            p_date: {
                required: true
            },
            p_social: {
                required: true
            },
            p_address: {
                required: true
            },
            p_code: {
                required: true
            },
            d_first_name_1: {
                required: true
            },
            d_last_name_1: {
                required: true
            },
            d_date_1: {
                required: true
            },
            p_email: {
                required: true,
                email: true
            },
            p_password: {
                required: true,
                minlength: 5,
                atLeastOneLowercaseLetter: false,
                atLeastOneUppercaseLetter: false,
                atLeastOneNumber: false
            },
            p_c_password: {
                equalTo: "#p_password"
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

</html>