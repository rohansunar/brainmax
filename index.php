<?php include('./header.php') ?>

<!-- Navbar & Hero Start -->
<?php include('./navbar.php') ?>
<!-- Navbar & Hero End -->

<div class="container-xxl bg-primary hero-header">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Small Business, Big Impact: Transform Your Digital Presence.</h1>
                <h5 class="text-white mb-4 animated slideInDown">Tired of feeling invisible online?</h5>
                <p class="text-white pb-3 animated slideInDown">You're juggling a million things. You need a website that works as hard as you do, and software that simplifies your life not complicates it.
                    Brain Max helps small businesses like yours <strong>dominate the digital world</strong> with high-performing websites that convert, custom software to streamline your operations and unparalleled services tailored to your unique business needs.
                    .</p>
                <p class="text-white pb-3 animated slideInDown">Don't settle for less.</p>
                <a href="contact.php" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book an Appointment</a>
                <a href="contact.php" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <?php include('form-appointment.php'); ?>
                <!-- <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe4_kZW-goFGPhAqwGUC1GhuvmmWHyIQjpk5gpJgkFKVNxlww/viewform?embedded=true" width="640" height="1071" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
            </div>
        </div>
    </div>
</div>
</div>

<!-- Feature Start -->
<?php include('features.php') ?>
<!-- Feature End -->


<!-- About Start -->
<?php include('about.php') ?>
<!-- About End -->


<!-- Facts Start -->
<?php include('facts.php') ?>
<!-- Facts End -->


<!-- Newsletter Start -->
<?php include('./newsletter.php') ?>
<!-- Newsletter End -->


<!-- Testimonial Start -->
<?php include('testimonials.php') ?>
<!-- Testimonial End -->


<!-- Team Start -->
<?php include('teams.php') ?>
<!-- Team End -->


<!-- Footer Start -->
<?php include('footer.php') ?>
<!-- Footer End -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Appointment Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php include('form-appointment.php'); ?>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> -->
        </div>
    </div>
</div>