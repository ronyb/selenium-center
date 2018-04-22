<form action="contactUs.php" method="post" id="contactUsForm">
    
    <div class="form-group">
        <label for="company">Company Name:</label>
        <input type="text" name="company" id="company" placeholder="Company" class="form-control" />
    </div>

    <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" name="fullName" id="fullName" placeholder="Full Name" class="form-control" />
    </div>

    <div class="form-group">
        <label for="role">Role / Title:</label>
        <input type="text" name="role" id="role" placeholder="Role / Title" class="form-control" />
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email" class="form-control" />
    </div>

    <div class="form-group">
        <label for="phone">Phone number:</label>
        <input type="text" name="phone" id="phone" placeholder="Phone number" class="form-control" />
    </div>

    <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Message" class="form-control" /></textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary btn-block">
    </div>
</form>