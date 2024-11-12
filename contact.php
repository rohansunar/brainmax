<?php
// Define the file where the data will be saved
$dataFile = 'contacts.txt';
// Initialize variables to hold form data
$reponseMessage = "";
$name = "";
$email = "";
$subject = "";
$appointDate = "";
$appointTime = "";
$message = "";
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the form data
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
$subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
$appointDate = isset($_POST['appointDate']) ? htmlspecialchars(trim($_POST['appointDate'])) : '';
$appointTime = isset($_POST['appointTime']) ? htmlspecialchars(trim($_POST['appointTime'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : ''; 

// Prepare the data to be saved
$dataToSave = "Name: $name\nEmail: $email\nSubject: $subject\nAppointDate:$appointDate\nAppointTime:$appointTime\nMessage: $message\n\n";

// Save the data to the text file
file_put_contents($dataFile, $dataToSave, FILE_APPEND | LOCK_EX);

// Optionally, you can redirect or display a success message
// echo "<p>Thank you for your message, $name!</p>";
$reponseMessage = "Thank you for your message, $name!";
}
?>
<?php include('./header.php') ?>
<?php include('./navbar.php')?>
<div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
        <h1 class="text-center text-white animated slideInDown">Contact Us</h1>
            <!-- <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Contact</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
            <h1 class="text-center mb-5">Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center" id="contactForm">
            <div class="col-lg-7">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <p class="text-center mb-4"><?=$reponseMessage?></a>.</p>
                    <form method="POST" action="contact.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<?php include('footer.php') ?>
<!-- Footer End -->