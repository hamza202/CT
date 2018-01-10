<!DOCTYPE html>
<html>

<!-- Mirrored from demos.pixelatethemes.com/financepro-2/Demo_5/busniess-growth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2017 09:55:14 GMT -->
<head>
    <meta charset="UTF-8">
    <title>CT || Upload New File</title>
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
    <link rel="stylesheet" href="css/fileinput.css">
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
                        <h3>Upload New File</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bread-cumb">
                        <div class="thm-container">
                            <ul class="list-inline">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Upload New File</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section id="main" class="clearfix  ad-profile-page">
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
                <li><a href="account.php">My Account</a></li>
                <li ><a href="uploaded.php">Uploaded</a></li>
                <li ><a href="accept.php">Accept</a></li>
                <li ><a href="reject.php">Reject </a></li>
                <li class="active"><a href="UploadNewFile.php">Upload New File</a></li>
            </ul>
        </div><!-- ad-profile -->

        <div class="profile">
            <div class="row">
                <div class="col-sm-12">
                    <div class="user-pro-section mb-50">
                        <form>
                        <div class="row">
                            <div class="col-md-7 col-xs-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-7 col-xs-12">
                                <label for="b2b" class="required m_bottom_5 d_inline_b">Upload File <small>(pdf , jpg , png , jpeg)</small></label>
                                <input id="b2b" name="b2b" type="file" class="file">
                            </div>
                            <div class="col-md-7 col-xs-12 mt-15">
                                <div class="form-grp">
                                    <label class="text-capitalize">Checklist</label>
                                    <select class="form-control">
                                        <option value="#">Personal income tax</option>
                                        <option value="#">Bussiness income tax</option>
                                        <option value="#">Rental Income</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button class="btn custom-red-buttom mt-20">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div><!-- profile-details -->
                </div><!-- user-pro-edit -->
            </div><!-- profile -->

        </div><!-- row -->
    </div>
    </div><!-- container -->
</section><!-- ad-profile-page -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Message Title</h4>
            </div>
            <div class="modal-body">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus doloribus est eum id
                    impedit ipsa iste itaque labore laboriosam, maxime nihil perferendis quidem quisquam quo ratione
                    soluta voluptas voluptatem?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

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
<script src="js/fileinput.min.js"></script>
<script>
    $(document).on('ready', function() {
        $("#b2b").fileinput();
    });
</script>
<script src="js/uikit.min.js"></script>
<script src="js/theme.js"></script>
</body>

<!-- Mirrored from demos.pixelatethemes.com/financepro-2/Demo_5/busniess-growth.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2017 09:55:18 GMT -->
</html>