<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <title>CT || Contact Us</title>
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
  <?php
  include('Header.php');
  ?>
    <div class="bg-header3-inn">
        <section class="inner-banner">
        <div class="thm-container">
          <div class="row">
            <div class="col-md-6">
              <div class="page-title">
                <h3>Contact Us</h3>
              </div>
            </div>
            <div class="col-md-6">
              <div class="bread-cumb">
                <div class="thm-container">
                  <ul class="list-inline">
                    <li class="head"><a href="index.php">Home</a></li>
                    <li><span>Contact Us</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="sec-pad contact-page contact-section">
      <div class="thm-container">
        <div class="row">
            <div class="col-md-8">
                <div class="sec-title">
                    <h2>Drop a message</h2>
                    <div class="decor-line"></div>
                </div>
                <form id="contact_page" action="#" method="POST" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label>Your Name</label>
                                <input id="contact_name" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <label>Your Email</label>
                                <input id="contact_email" type="text" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-grp">
                                <label>Subject</label>
                                <input id="subject" type="text" name="subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-grp">
                                <label class="text-capitalize">Interested In the following services:</label>
                                <select class="form-control">
                                    <option value="#">Accounting</option>
                                    <option value="#">Bookkeeping</option>
                                    <option value="#">Tax (Personal)</option>
                                    <option value="#">Tax (Corporate)</option>
                                    <option value="#">Business Advisory</option>
                                    <option value="#">Business Incorporation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-grp">
                                <label>Message</label>
                                <textarea id="message" name="message" required></textarea>
                                <button type="submit" class="thm-button inverse">submit now</button>
                            </div>
                            <div id="success"></div>
                        </div>
                    </div>
                </form>
            </div>
          <div class="col-md-4">
            <div class="sec-title">
              <h2>contact info</h2>
              <div class="decor-line"></div>
            </div>
            <ul class="contact-info-box">
              <li>
                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                <div class="text-box">
                  <p>202- 1489 Merivale Road <br>Ottawa, ON, K2E 5P3</p>
                </div>
              </li>
              <li>
                <div class="icon-box"><i class="fa fa-envelope-o"></i></div>
                <div class="text-box">
                  <p>info@cantaxprof.com</p>
                </div>
              </li>
              <li>
                <div class="icon-box"><i class="fa fa-phone"></i></div>
                <div class="text-box">
                  <p>613-421-7065 <br>613-800-3225</p>
                </div>
              </li>
            </ul>
              <div class="map mt-20 sm-mb-20">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1041.8578121009457!2d-117.14252547566194!3d58.51614577038031!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1514973586198" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>              </div>
          </div>

        </div>
      </div>
    </section>

  <!--Start footer -->
  <?php include('Footer.php') ?>
  <!--End footer  -->
    <!-- helper js-->
  <script src="plugins/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
  <script src="plugins/jquery.mixitup.min.js"></script>
  <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="plugins/Chart.min.js"></script>
  <script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="plugins/waypoints.min.js"></script>
  <script src="plugins/jquery.counterup.min.js"></script>
  <script src="js/stellarnav.js"></script>
  <script type="text/javascript" src="js/modernizr.min.js"></script>
<!--  <script>-->
<!--      "use strict";-->
<!--      $("#contact_page").validate({-->
<!--          contact_name: {-->
<!--              required: true,-->
<!--              minlength: 2-->
<!--          },-->
<!--              contact_email: {-->
<!--                  required: true,-->
<!--                  minlength: 2-->
<!--              },-->
<!--              subject:{-->
<!--                  required: true,-->
<!--                  minlength: 2-->
<!--              },-->
<!--              message:{-->
<!--                  required: true,-->
<!--                  minlength: 2,-->
<!--                  number: true-->
<!--              },-->
<!--              agree: "required";-->
<!--      });-->
<!--  </script>-->
  <script src="js/theme.js"></script>
  </body>

</html>