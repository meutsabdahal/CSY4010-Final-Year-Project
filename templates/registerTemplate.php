<h1 class="text-center mt-4 font-italic">Register your Account</h1>
<center>
<!-- creating a customer regsiter form in box container -->
<div class="login-container shadow bg-white mt-1">
    <form action="{{ url('') }}" method="post">
        <label class="font-italic login-register-label">First Name</label><br>
        <input type="text" name="firstName"  class="input-type"><br>

        <label class="font-italic mt-4 login-register-label">Last Name</label><br>
        <input type="text" name="lastName"  class="input-type"><br>
            
        <label class="font-italic mt-4 login-register-label">Email Address</label><br>
        <input type="email" name="email"  class="input-type"><br>

        <label class="font-italic mt-4 login-register-label">Password</label><br>
        <input type="password" name="password"  class="input-type"><br>

        <label class="font-italic mt-4 login-register-label">Phone Number</label><br>
        <input type="number" name="phoneNumber"  class="input-type"><br>

        <label class="font-italic mt-4 login-register-label">Province</label><br>
        <select name="province" class="input-type">
            <option value="province1">Province 1</option>
            <option value="province2">Province 2</option>
            <option value="bagmatiProvince">Bagmati Province</option>
            <option value="gandakiProvince">Gandaki Province</option>
            <option value="lumbiniProvince">Lumbini Province</option>
            <option value="karnaliProvince">Karnali Province</option>
            <option value="sudurpaschimProvince">Sudurpaschim Province</option>
        </select><br>

        <label class="font-italic mt-4 login-register-label">City</label><br>
        <input type="text" name="lastName"  class="input-type"><br>

        <label class="font-italic mt-4 login-register-label">Street</label><br>
        <input type="text" name="lastName"  class="input-type"><br>

        <input type="submit" value="Register" class="default-button mt-4">
        
    </form>
</div>

    </center>
