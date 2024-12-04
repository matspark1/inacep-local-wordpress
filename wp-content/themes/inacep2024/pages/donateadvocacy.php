<?php
/*
 * Template Name: Donate Page Advocacy
*/
?>

<?php
$page_title = 'Donate Advocacy';
get_header();
?>

<div class="app">
    <div class="donate-header">
        <p>Support the Advocacy Fund</p>
    </div>


    <!-- form - holds all inputs -->
    <form method="post" action="#">
        <div class="donate-form">
            <!-- form inputs -->
            <div class="donate-inputs">
                <!-- first name -->
                <label for="afName">First Name</label>
                <input type="text" name="afName" required id="afName">

                <!-- last name -->
                <label for="alName">Last Name</label>
                <input type="text" name="alName" required id="alName">

                <!-- street address -->
                <label for="asAddress">Street Address</label>
                <input type="text" name="asAddress" required id="asAddress">

                <!-- city -->
                <label for="aCity">City</label>
                <input type="text" name="aCity" required id="aCity">

                <!-- state -->
                <label for="aState">State</label>
                <input type="text" name="aState" required id="aState">

                <!-- zip -->
                <label for="aZip">Zip Code</label>
                <input type="number" name="aZip" required id="aZip">
            </div>

            <!-- form inputs -->
            <div class="donate-inputs">
                <!-- donation amount -->
                <label for="adAmount">Donation Amount</label>
                <input type="number" name="adAmount" required id="adAmount">

                <!-- card number -->
                <label for="acNumber">Card Number</label>
                <input type="number" name="acNumber" required id="acNumber">

                <!-- security code -->
                <label for="asCode">CVC / Security Code</label>
                <input type="number" name="asCode" required id="asCode">

                <!-- expiration month -->
                <label for="aeMonth">Expiration Month</label>
                <input type="text" name="aeMonth" required id="aeMonth">

                <!-- expiration year -->
                <label for="aeYear">Expiration Year</label>
                <input type="text" name="aeYear" required id="aeYear">

                <!-- email -->
                <label for="aeAddress">Email Address</label>
                <input type="email" name="aeAddress" required id="aeAddress">
            </div>
        </div>

        <!-- submit donation -->
        <div class="donate-submit-btn" >
            <button type="submit" id="adBtn">Submit Donation</button>
        </div>
    </form>
</div>

<?php get_footer();?>
