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
        <section class="reg bg-gray">
        <div class="row">
            <div class="col-xs-12">
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
                                <label>Contact No<sup class="required">*</sup></label>
                                <input class="p-10" id="p_social" type="text" name="p_social">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-20">
                            <div class="form-grp">
                                <label>Suggested Company Name<sup class="required">*</sup></label>
                                <input class="p-10" id="p_address" type="text" name="p_address">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-20">
                            <div class="form-grp">
                                <label>Email<sup class="required">*</sup></label>
                                <input class="p-10" id="p_code" type="email" name="p_code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="thm-button inverse mt-30 ml-0">Sign Up</button>
                        </div>

                    </div>
                </form>

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
    $("#businessReg").validate({
        rules: {
            b_name: {
                required: true
            },
            b_number: {
                required: true,
                number: true
            },
            b_email: {
                required: true,
                email: true
            },
            b_password: {
                required: true,
                minlength: 5,
                atLeastOneLowercaseLetter: false,
                atLeastOneUppercaseLetter: false,
                atLeastOneNumber: false
            },
            b_c_password: {
                equalTo: "#b_password"
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