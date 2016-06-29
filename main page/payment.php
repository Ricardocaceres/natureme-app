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
                        <span class="bubble bubble-finished"></span>
                        <p class="finished-txt">Personal Details</p>
                    </a>
                </li>
                <li class="">
                    <a class="links-progress-bar" href="payment.php">
                        <span class="bubble bubble-active"></span>
                        <p class="active-txt">Payment</p>
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
                <h3 class="titles title-details">Payment Details</h3>
            </div>
        </div>

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
                
                <form method="post" action="payment.php" id="payment">

                    <div class="row">
                        <div class="col-md-12 col sm-12 itens-details-form">
                            <label for="cc-number">Credit card number:</label>
                            <input type="number" class="inputs-personal-details" id="cc-number" placeholder="1234 5678 1234 5678">
                        </div>
                        <div class="col-md-12 col sm-12 itens-details-form">
                            <label for="cc-holder">Card holder:</label>
                            <input type="text" class="inputs-personal-details" id="cc-holder" placeholder="Card holder">
                        </div>
                        <div class="col-md-6 col sm-12 itens-details-form">
                            <label for="expiredate">Expire date:</label>
                            <input type="number" class="inputs-personal-details" id="cc-date" placeholder="mm/yy">
                        </div>
                        <div class="col-md-6 col sm-12 itens-details-form">
                            <label for="cvv">CVV:</label>
                            <input type="text" class="inputs-personal-details" id="cvv" placeholder="123">
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-md-12 col-sm-12">
                <p>You will be charged after your booking has taken place.</p>
            </div> 

        </div>

        <div class="row">
            <div class="col-md-12">
                <a onclick="submitForms()" href="payment.php" class="btn btn-general btn-next">Proceed payment</a>
            </div>
        </div>
    </div>


<?php include 'footer.html';?>
