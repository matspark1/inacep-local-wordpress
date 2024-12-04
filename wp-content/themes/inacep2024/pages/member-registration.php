<?php
/*
 * Template Name: Member Registration
*/
?>

<?php
$page_title = 'Member Registration';
get_header();
?>

<div class="app">
    <div class="register-header">
        <h1>Register Online</h1>
    </div>
    <div class="register-form-view-box">
        <form action="POST" id="payment-form">
            <input
                type="hidden"
                name="registration_form"
                value="registration_form"
            />
            <h1>Register as an ACEP Member Physician, NP, or PA</h1>
            <div class="options-container">
                <div class="option-selector">
                    <label for="sponsorship_product_385" class="session-option">
                        <input
                            type="radio"
                            name="sponsorship_product_id[]"
                            value=""
                            id=""
                            data-fee="200"
                        />
                        <div class="option-info">
                            <div class="session-title">ACEP Member Physician/NP/PA</div>
                            <div class="session-bottom">
                                <div class="session-price">$200.00</div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="option-selector">
                    <label for="sponsorship_product_385" class="session-option">
                        <input
                            type="radio"
                            name="sponsorship_product_id[]"
                            value=""
                            id=""
                            data-fee="230"
                        />
                        <div class="option-info">
                            <div class="session-title">Non-ACEP Member Physician</div>
                            <div class="session-bottom">
                                <div class="session-price">$230.00</div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="option-selector">
                    <label for="sponsorship_product_385" class="session-option">
                        <input
                            type="radio"
                            name="sponsorship_product_id[]"
                            value=""
                            id=""
                            data-fee="140"
                        />
                        <div class="option-info">
                            <div class="session-title">PA/RN/LPN/NP/Paramedic</div>
                            <div class="session-bottom">
                                <div class="session-price">$140.00</div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="option-selector">
                    <label for="sponsorship_product_385" class="session-option">
                        <input
                            type="radio"
                            name="sponsorship_product_id[]"
                            value=""
                            id=""
                            data-fee="10"
                        />
                        <div class="option-info">
                            <div class="session-title">Medical Student</div>
                            <div class="session-bottom">
                                <div class="session-price">$10.00</div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="option-selector">
                    <label for="sponsorship_product_385" class="session-option">
                        <input
                            type="radio"
                            name="sponsorship_product_id[]"
                            value=""
                            id=""
                            data-fee="10"
                        />
                        <div class="option-info">
                            <div class="session-title">Resident/Intern</div>
                            <div class="session-bottom">
                                <div class="session-price">$10.00</div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <p class="warning2">
                A late fee of $0.00 will apply if registering after 01/01/9999.
            </p>
            <div class="total-fee">
                <p>
                    Your total registration fee is <span>$</span
                    ><span id="price">0.00</span>
                </p>
            </div>

            <div class="payment-details">
                <div class="info">
                    <h3>Your Information</h3>
                    <div class="info-inputs">
                        <label for="">First Name</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">Last Name</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">Address</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">City</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">State</label>
                        <select name="state" id="state" required="">
                            <option value="" selected="selected">Select State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div class="info-inputs">
                        <label for="">Zip Code</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">Phone</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">Email Address</label>
                        <input type="email" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">Attendee Type</label>
                        <select name="attendee_type" id="attendee_type" required="">
                            <option value="">Select Attendee Type</option>
                            <option value="ACEP Member Physician" selected="selected">
                                ACEP Member Physician
                            </option>
                            <option value="Non-ACEP Member Physician">
                                Non-ACEP Member Physician
                            </option>
                            <option value="RN">RN</option>
                            <option value="PA">PA</option>
                            <option value="LPN">LPN</option>
                            <option value="NP">NP</option>
                            <option value="Paramedic">Paramedic</option>
                            <option value="Resident">Resident</option>
                            <option value="Intern">Intern</option>
                            <option value="Med Student">Med Student</option>
                        </select>
                    </div>
                    <div class="info-inputs">
                        <label for="">ACEP # (if a member)</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">Hospital Affiliation</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label class="syll" for=""
                        >To download syllabus, please create password here (Your
                            username will be the email address your provided above)</label
                        >
                        <input type="password" required />
                    </div>
                </div>
                <div class="payment-info">
                    <h3>Payment Details</h3>
                    <div class="info-inputs">
                        <label for="">Card Number</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">CVC / Security Code</label>
                        <input type="text" required />
                    </div>
                    <div class="info-inputs">
                        <label for="">Expiration Month</label>
                        <select data-stripe="exp-month">
                            <option value="">Select Month</option>
                            <option value="1">01 - January</option>
                            <option value="2">02 - February</option>
                            <option value="3">03 - March</option>
                            <option value="4">04 - April</option>
                            <option value="5">05 - May</option>
                            <option value="6">06 - June</option>
                            <option value="7">07 - July</option>
                            <option value="8">08 - August</option>
                            <option value="9">09 - September</option>
                            <option value="10">10 - October</option>
                            <option value="11">11 - November</option>
                            <option value="12">12 - December</option>
                        </select>
                    </div>
                    <div class="info-inputs">
                        <label for="">Expiration Year</label>
                        <input type="text" required />
                    </div>
                </div>
            </div>

            <div class="total-fee" style="margin-top: 40px">
                <p>
                    Your total registration fee is <span>$</span
                    ><span id="price">0.00</span>
                </p>
            </div>
            <span class="payment-errors"></span>
            <div class="spacer"></div>
            <input type="submit" value="Submit Registration" class="submitbtn" />
        </form>
    </div>
</div>


<?php get_footer();?>
