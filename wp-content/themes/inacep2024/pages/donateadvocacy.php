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
    <form class="donate-form">

        <!-- form inputs -->
        <div class="donate-inputs">
            <!-- first name -->
            <label for="fName">First Name</label>
            <input type="text" required>

            <!-- last name -->
            <label for="lName">Last Name</label>
            <input type="text" required>

            <!-- street address -->
            <label for="sAddress">Street Address</label>
            <input type="text" required>

            <!-- city -->
            <label for="city">City</label>
            <input type="text" required>

            <!-- state -->
            <label for="sAddress">State</label>
            <input type="text" required>

            <!-- zip -->
            <label for="sAddress">Zip Code</label>
            <input type="number" required>
        </div>

        <!-- form inputs -->
        <div class="donate-inputs">
            <!-- donation amount -->
            <label for="dAmount">Donation Amount</label>
            <input type="number" required>

            <!-- card number -->
            <label for="cNumber">Card Number</label>
            <input type="number" required>

            <!-- security code -->
            <label for="sCode">CVC /Security Code</label>
            <input type="number" required>

            <!-- city -->
            <label for="eMonth">Expiration Month</label>
            <input type="text" required>

            <!-- state -->
            <label for="eYear">Expiration Year</label>
            <input type="text" required>

            <!-- zip -->
            <label for="eAddress">Email Address</label>
            <input type="email" required>
        </div>
    </form>
    <!-- submit donation -->
    <div class="donate-submit-btn" >
        <button id="iempacBtn">Submit Donation</button>
    </div>
</div>

<?php get_footer();?>
