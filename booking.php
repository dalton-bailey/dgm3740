<?php $ptitle='Booking'; include '_header.php'; ?>
<!-- MAIN STARTS HERE -->
<main class="clearfix">
    <h1 class="cruiseTitle">Book a Cruise</h1>
    <form>
        <label for="fullName">Full Name *</label>
        <input type="text" id="fullName" required="true">

        <label for="address">Address</label>
        <input type="text" id="address">

        <label for="city">City</label>
        <input type="text" id="city">

        <label for="states">State</label>
        <select id="states" name="states">
            <option value="Please Select">Please Select</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
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

        <label for="zipcode">Zipcode</label>
        <input type="text" id="zipcode">

        <label for="phoneNumber">Phone Number</label>
        <input type="text" id="phoneNumber">

        <label for="emailAddress">Email Address *</label>
        <input type="text" id="emailAddress" required="true">

        <label for="cruises">Cruise Selection</label>
        <select id="cruises" name="cruises">
            <option value="Please Select">Please Select</option>
            <option value="1">1 - Western Caribbean</option>
            <option value="2">2 - Mexico</option>
            <option value="3">3 - Catalina Island</option>
            <option value="4">4 - The Bahamas</option>
        </select>

        <input id="submit" type="submit" value="Book My Cruise">
        </form>

</main>
<?php include '_footer.php'; ?>