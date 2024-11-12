<form method="POST" action="contact.php" class="form-appointment">
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="">
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="date" class="form-control" name="date" id="date" required="">
                <label for="email">Select Date</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="time" class="form-control" name="time" id="time" required="">
                <label for="email">Select Time</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px" required=""></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
        </div>
    </div>
</form>