<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <ul class="list-inline">
                    <li><a href="#"data-toggle="modal" data-target="#LogIn">Log in</a></li>
                    <li><a href="#"data-toggle="modal" data-target="#Register">Register</a></li>
                    <li><a href="#"><a href="#">Account</a></a></li>
                </ul>
            </div>
            <div class="col-sm-6"></div>
        </div>
    </div>
</div>
<header class="min-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 top-logo">
                <a href="index.php"><img src="images/logo.png" alt="Awesome Image"></a>
            </div>
            <div id="main-nav" class="stellarnav col-md-9 col-xs-12 ">
                <ul>
                    <li><a href="about.php">about us</a>
                        <ul>
                            <li><a href="whyShoseUs.php">Why choose us</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href="Bookkeeping.php">Bookkeeping</a></li>
                            <li><a href="IncomeTax.php">Income Tax</a>
                                <ul>
                                    <li><a href="PersonalTax.php">personal</a>
                                        <ul>
                                            <li><a href="#">One</a></li>
                                            <li><a href="#">Tow</a></li>
                                            <li><a href="#">Three</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="corparateTax.php">corparate</a></li>
                                </ul>
                            </li>
                            <li><a href="Payroll.php">Payroll</a></li>
                            <li><a href="NewBusinessSetup.php">New Business setup</a></li>
                        </ul>
                    </li>
                    <li><a href="">Checklist</a>
                        <ul>
                            <li><a href="PersonalIncomeTax.php">Personal income tax</a></li>
                            <li><a href="BussinessIncomeTax.php">Bussiness income tax</a></li>
                            <li><a href="RentalIncome.php">Rental Income</a></li>
                        </ul>
                    </li>
                    <li><a target="_blank"
                           href="https://www.canada.ca/en/revenue-agency/news/newsroom/tax-tips/tax-tips-2017.html">Tax
                            Tips</a></li>
                    <li><a href="contact.php">contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Contact-->
    <div class="contact-form">
        <div id="contact-wrapper">
            <div class="contact-content">
                <div id="formmessage">Success/Error Message Goes Here</div>
                <form class="form-horizontal" id="contactform" method="post" action="#">
                    <div class="contact-form">
                        <h4>Contact Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                        <input id="c-name" type="text" placeholder="Name*" name="name" required>
                        <input type="email" placeholder="Email*" name="email" required>
                        <input type="text" placeholder="Phone*" name="phone" required>
                        <textarea class="input-message" placeholder="Comment*" rows="7" name="message" required></textarea>
                        <input type="hidden" name="action" value="sendEmail"/>
                        <input id="submit" name="submit" type="submit" value="Send" class="button-small">
                    </div>
                </form>
                <div id="ajaxloader" style="display:none"><img class="center-block"
                                                               src="images/ajax-loader-white.gif" alt=""></div>
            </div>
            <a href="#" class="contact-toggle"><span class="ti-comments"><i class="fa fa-comments-o" aria-hidden="true"></i></span></a>
        </div>
    </div>
</header>