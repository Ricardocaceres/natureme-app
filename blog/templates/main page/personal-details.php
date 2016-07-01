<?php include 'header.html';?>

    <!-- Header -->
    <header class="progress-bar-circles">
        <!-- Progress bar -->
        <div class="container-full">
            <ul class="progress-indicator">
                <li class="complete">
                    <a class="links-progress-bar" href="booking.php">
                        <span class="bubble bubble-finished"></span>
                        <p class="finished-txt">Booking</p>
                    </a>
                </li>
                <li class="active">
                    <a class="links-progress-bar" href="personal-details.php">
                        <span class="bubble bubble-active"></span>
                        <p class="active-txt">Personal Details</p>
                    </a>
                </li>
                <li class="">
                    <a class="links-progress-bar" href="payment.php">
                        <span class="bubble bubble-next"></span>
                        <p class="next-txt">Payment</p>
                    </a>
                </li>
                <li class="">
                    <a class="links-progress-bar" href="check-out.php">
                        <span class="bubble bubble-next"></span>
                        <p class="next-txt">Check-out</p>
                    </a>
                </li>
            </ul>
        </div>
    </header>
        
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h3 class="titles title-details">Personal Details</h3>
            </div>
        </div>

        <div class="container">
            
            <div class="row">    
                <div class="col-md-3 col-sm-12 text-center box-summary">
                    <div class="thumbnail summary">
                        <div class="plan-name">
                            <h4 class="tit-plan-name plan-summary">Summary</h4>
                        </div>
                        <div class="caption">
                            <p class="descrp-plans">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="caption">
                            <img class="img-summary" src="images/credit-cards.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 details-form">
                    <h3 class="titles-pd">Your details:</h3>
                    
                    <form method="post" action="personal-details.php" id="personal-details">

                        <div class="row">
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="first-name">First name:</label>
                                <input type="text" class="inputs-personal-details" id="first-name" placeholder="First name">
                            </div>
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="last-name">Last name:</label>
                                <input type="text" class="inputs-personal-details" id="last-name" placeholder="Last name">
                            </div>
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="email">Email:</label>
                                <input type="text" class="inputs-personal-details" id="email" placeholder="Email">
                            </div>
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="mobile-phone">Mobile phone:</label>
                                <input type="text" class="inputs-personal-details" id="mobile-phone" placeholder="Mobile phone">
                            </div>
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="password">Password:</label>
                                <input type="text" class="inputs-personal-details" id="password" placeholder="Password">
                            </div>
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="confirm-password">Confirm password:</label>
                                <input type="text" class="inputs-personal-details" id="confirm-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <p class="col-md-12 col-sm-12 itens-forms terms"> 
                            <input id="details-accepted" class="terms" type="checkbox"> I accept the terms and conditions (<a href="#">view terms</a>).
                        </p>
                    </form>
                </div>

            </div>

            <div class="row">    
                <div class="col-md-9 col-sm-12 details-form">
                    <h3 class="titles-pd">Address of the property to be cleaned:</h3>
                    
                    <form method="post" action="address-details.php" id="address-details">

                        <div class="row">
                            <div class="col-md-12 col sm-12 itens-details-form">
                                <label for="address">Address:</label>
                                <input type="text" class="inputs-personal-details" id="adress" placeholder="Address">
                            </div>
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="suburb">Suburb:</label>
                                <input type="text" class="inputs-personal-details" id="suburb" placeholder="Suburb">
                            </div>
                            <div class="col-md-6 col sm-12 itens-details-form">
                                <label for="post-code">Postcode:</label>
                                <input type="text" class="inputs-personal-details" id="post-code" placeholder="Postcode">
                            </div>
                        </div>

                        <p class="col-md-12 col-sm-12 itens-forms terms"> 
                            <input id="address-accepted" class="terms" type="checkbox"> The billing address is the same. <a href="#" id="dif-billing-address">Different billing address?</a>
                        </p>
                    </form>
                </div>

                <div id="billing-address-form" class="col-md-9 col-sm-12 details-form">
                    <h3 class="titles-pd">Billing address:</h3>
                    
                    <form method="post" action="billing-address-details.php" id="bill-form">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 itens-details-form">
                                <label for="address">Address:</label>
                                <input type="text" class="inputs-personal-details" id="billing-adress" placeholder="Address">
                            </div>
                            <div class="col-md-6 col-sm-12 itens-details-form">
                                <label for="suburb">Suburb:</label>
                                <input type="text" class="inputs-personal-details" id="billing-suburb" placeholder="Suburb">
                            </div>
                            <div class="col-md-6 col-sm-12 itens-details-form">
                                <label for="post-code">Postcode:</label>
                                <input type="text" class="inputs-personal-details" id="billing-post-code" placeholder="Postcode">
                            </div>
                            <a href="#" id="reset-billing-form" class="btn btn-general btn-cancel">Cancel</a>
                        </div>
                    </form>
                </div>

                <div id="extra-info" class="col-md-9 col-sm-12 details-form">
                    <h3 class="titles-pd">Extra information:</h3>
                    
                    <form method="post" action="extra-infos.php" id="extra-infos">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 itens-details-form">
                                <label for="extra">Any extra information:</label>
                                <input type="textarea" class="inputs-personal-details" id="extra-information" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <a onclick="submitForms()" href="payment.php" class="btn btn-general btn-next">Proceed payment</a>
            </div>
        </div>
    </div>

<?php include 'footer.html';?>
