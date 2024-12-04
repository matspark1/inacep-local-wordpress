<?php
/*
 * Template Name: Donate Page IEMPAC
*/
?>

<?php
$page_title = 'Donate IEMPAC';
get_header();
?>

<div class="app">
    <div class="donate-header">
        <p>Contribute To IEMPAC</p>
    </div>

    <!-- form - holds all inputs -->
    <form method="post" action="#">
        <div class="donate-form">
            <!-- form inputs -->
            <div class="donate-inputs">
                <!-- first name -->
                <label for="fName">First Name</label>
                <input type="text" name="fName" required id="fName">

                <!-- last name -->
                <label for="lName">Last Name</label>
                <input type="text" name="lName" required id="lName">

                <!-- street address -->
                <label for="sAddress">Street Address</label>
                <input type="text" name="sAddress" required id="sAddress">

                <!-- city -->
                <label for="city">City</label>
                <input type="text" name="city" required id="city">

                <!-- state -->
                <label for="state">State</label>
                <input type="text" name="state" required id="state">

                <!-- zip -->
                <label for="zip">Zip Code</label>
                <input type="number" name="zip" required id="zip">
            </div>

            <!-- form inputs -->
            <div class="donate-inputs">
                <!-- donation amount -->
                <label for="dAmount">Donation Amount</label>
                <input type="number" name="dAmount" required id="dAmount">

                <!-- card number -->
                <label for="cNumber">Card Number</label>
                <input type="number" name="cNumber" required id="cNumber">

                <!-- security code -->
                <label for="sCode">CVC / Security Code</label>
                <input type="number" name="sCode" required id="sCode">

                <!-- expiration month -->
                <label for="eMonth">Expiration Month</label>
                <input type="text" name="eMonth" required id="eMonth">

                <!-- expiration year -->
                <label for="eYear">Expiration Year</label>
                <input type="text" name="eYear" required id="eYear">

                <!-- email -->
                <label for="eAddress">Email Address</label>
                <input type="email" name="eAddress" required id="eAddress">
            </div>
        </div>

        <!-- submit donation -->
        <div class="donate-submit-btn" >
            <button type="submit" id="iempacBtn">Submit Donation</button>
        </div>
    </form>
</div>

<?php get_footer();?>
