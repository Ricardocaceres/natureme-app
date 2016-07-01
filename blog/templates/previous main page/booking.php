<?php include 'header.html';?>

    <!-- Page Content -->

    <!-- Header -->
    <header class="progress-bar-circles">
        <!-- Progress bar -->
        <div class="container-full">
            <ul class="progress-indicator">
                <li class="complete">
                    <a class="links-progress-bar" href="booking.php">
                        <span class="bubble bubble-active"></span>
                        <p class="active-txt">Booking</p>
                    </a>
                </li>
                <li class="active">
                    <a class="links-progress-bar" href="personal-details.php">
                        <span class="bubble bubble-next"></span>
                        <p class="next-txt">Personal Details</p>
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
        <form method="post" action="plans.php" id="plans-form">

            <div class="row">
                <div class="col-lg-12 postcode">
                    <h3 class="titles text-center">What is your postcode?</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <input class="col-lg-12 input-postcode" name="postcode" type="text" placeholder="0000" required>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="titles text-center">How regulary would you like your eco-clean?</h3>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail plans">
                        <div class="plan-name">
                            <h4 class="tit-plan-name plan-weekly name-plan-weekly">Weekly</h4>
                        </div>
                        <div class="caption price-weekly">
                            <h3 class="price">$<span class="price-emph">31</span>/h</h3>
                        </div>
                        <div class="caption">
                            <p class="descrp-plans">Same cleaner each time</p>
                            <p class="descrp-plans">No contracts</p>
                            <p class="descrp-plans">Eco friendly products</p>
                            <p class="descrp-plans">Aromatherapy</p>
                            <p class="descrp-plans">Fee of $31/h</p>
                            <p class="ck-button btn-plans-weekly">
                                <label>
                                    <input type="checkbox" value="1"><span>Book Now!</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail plans">
                        <div class="plan-name">
                            <h4 class="tit-plan-name plan-fort name-plan-fort">Fortnightly</h4>
                        </div>
                        <div class="caption price-fort">
                            <h3 class="price">$<span class="price-emph">31</span>/h</h3>
                        </div>
                        <div class="caption">
                            <p class="descrp-plans">Same cleaner each time</p>
                            <p class="descrp-plans">No contracts</p>
                            <p class="descrp-plans">Eco friendly products</p>
                            <p class="descrp-plans">Aromatherapy</p>
                            <p class="descrp-plans">Fee of $31/h</p>
                            <p class="ck-button btn-plans-fort">
                                <label>
                                    <input type="checkbox" value="1"><span>Book Now!</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail plans">
                        <div class="plan-name">
                            <h4 class="tit-plan-name plan-once name-plan-once">Only Once</h4>
                        </div>
                        <div class="caption price-once">
                            <h3 class="price">$<span class="price-emph">39</span>/h</h3>
                        </div>
                        <div class="caption">
                            <p class="descrp-plans-once">No contracts</p>
                            <p class="descrp-plans-once">Eco friendly products</p>
                            <p class="descrp-plans-once">Aromatherapy</p>
                            <p class="descrp-plans-once">Fee of $31/h</p>
                            <p class="ck-button btn-plans-once">
                                <label>
                                    <input type="checkbox" value="1"><span>Book Now!</span>
                                </label>
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-3 col-sm-6">
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
            </div>

            <div class="col-md-12 col-sm-12 details-form">
                
                <div class="row">
                    <div class="col-md-4 col-sm-12 itens-details-form">
                        <h4 class="ask-plans">How long do you need your eco-cleaner to stay?</h4>
                        <select id="hours" class="inputs-plans">
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    
                    <div class="col-md-8 col-sm-12 itens-details-form">
                        <h4 class="ask-plans">When would you like the first clean to take place?</h4>
                    </div>
                    <div class="col-md-4 col-sm-12 itens-details-form">
                        <input class="col-md-12 col-sm-12 inputs-plans" name="" type="time" required"">
                    </div>

                    <div class="col-md-4 col-sm-12 itens-details-form">
                        <input class="col-md-12 col-sm-12 inputs-plans" name="" type="date" required"">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a onclick="submitPlansForm()" href="personal-details.php" class="btn btn-general btn-next">Next</a>
                </div>
            </div>

        </form>
    
    </div>

<?php include 'footer.html';?>
