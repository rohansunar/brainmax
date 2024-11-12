 <!-- Footer Start -->
 <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
     <div class="container py-5 px-lg-5">
         <div class="row g-5">
             <div class="col-md-6 col-lg-4">
                 <p class="section-title text-white h5 mb-4">Address<span></span></p>
                 <p><i class="fa fa-map-marker-alt me-3"></i> Dorothy Layout, 302, Whitefield, Bangalore, India - 560066</p>
                 <p><i class="fa fa-phone-alt me-3"></i>+91-97491-55545</p>
                 <p><i class="fa fa-envelope me-3"></i>info@brainmax.co.in</p>
                 <div class="d-flex pt-2">
                     <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                     <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/brainmax-india/"><i class="fab fa-linkedin-in"></i></a>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4">
                 <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                 <a class="btn btn-link" href="">About Us</a>
                 <a class="btn btn-link" href="contact.php">Contact Us</a>
                 <a class="btn btn-link" href="">Privacy Policy</a>
                 <a class="btn btn-link" href="">Terms & Condition</a>
                 <a class="btn btn-link" href="">Career</a>
             </div>
             <div class="col-md-6 col-lg-4">
                 <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                 <p>Stay connected for updates and support. Our team is here to assist you whenever you need it. Join us on this journey!</p>
                 <div class="position-relative w-100 mt-3">
                     <p id="responseMessage"></p>
                     <form id="newsletterForm">
                         <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" name="email" type="text" placeholder="Your Email" style="height: 48px;">
                         <button type="sumbit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <div class="container px-lg-5">
         <div class="copyright">
             <div class="row">
                 <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     Designed By <a class="border-bottom" href="#">BrainMax</a>
                 </div>
                 <div class="col-md-6 text-center text-md-end">
                     <div class="footer-menu">
                         <a href="index.php">Home</a>
                         <a href="">Cookies</a>
                         <a href="">Help</a>
                         <a href="">FAQs</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Footer End -->

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>



 <!-- Get a quote -->
 <div class="modal fade" id="getAQuote" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="getAQuote" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="getAQuote">Get a free quote</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <?php include('form-free-quote.php'); ?>
             </div>
             <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div> -->
         </div>
     </div>
 </div>


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="lib/wow/wow.min.js"></script>
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/waypoints/waypoints.min.js"></script>
 <script src="lib/counterup/counterup.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="lib/isotope/isotope.pkgd.min.js"></script>
 <script src="lib/lightbox/js/lightbox.min.js"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>
 <script>
     $(document).ready(function() {
         $('#newsletterForm1').on('submit', function(event) {
             event.preventDefault(); // Prevent the default form submission
             // Serialize the form data
             var formData = $(this).serialize();

             // Submit the form data using jQuery AJAX
             $.ajax({
                 type: 'POST',
                 url: 'contact.php', // The URL to which the request is sent
                 data: formData,
                 success: function(response) {
                     // Display the response message
                     $('#responseMessage1').html("Thank you for subscribing to our newsletter!");
                     // Optionally reset the form
                     $('#newsletterForm1')[0].reset();
                 },
                 error: function(xhr, status, error) {
                     $('#responseMessage').html('<p class="text-danger">There was an error submitting the form. Please try again.</p>');
                 }
             });
         });
     });
     $(document).ready(function() {
         $('#newsletterForm').on('submit', function(event) {
             event.preventDefault(); // Prevent the default form submission
             // Serialize the form data
             var formData = $(this).serialize();

             // Submit the form data using jQuery AJAX
             $.ajax({
                 type: 'POST',
                 url: 'contact.php', // The URL to which the request is sent
                 data: formData,
                 success: function(response) {
                     // Display the response message
                     $('#responseMessage').html("Thank you for subscribing to our newsletter!");
                     // Optionally reset the form
                     $('#newsletterForm')[0].reset();
                 },
                 error: function(xhr, status, error) {
                     $('#responseMessage').html('<p class="text-danger">There was an error submitting the form. Please try again.</p>');
                 }
             });
         });
     });

     $(document).ready(function() {
        var date = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate()
      
        var forms = $('.form-appointment');
            forms.foreach((form, index)=>{
              form.find("input[name='appointDate']").attr('min', date);
              $(form).on('submit', function(event) {
             event.preventDefault(); // Prevent the default form submission
             // Serialize the form data
             var formData = $(this).serialize();
             formData += "&subject=Appointment Booking";
             // Submit the form data using jQuery AJAX
                    $.ajax({
                        type: 'POST',
                        url: 'contact.php', // The URL to which the request is sent
                        data: formData,
                        success: function(response) {
                            // Display the response message
                            $('#responseAppointMessage').html('<p class="text-success">Your appointment has been successfully scheduled.</p>');
                            // Optionally reset the form
                            $('#appointmentForm')[0].reset();
                        },
                        error: function(xhr, status, error) {
                            $('#responseAppointMessage').html('<p class="text-danger">There was an error submitting the form. Please try again.</p>');
                            $('#appointmentForm')[0].reset();
                        }
                    });
                }); 
            })
       
        
     });

     $(document).ready(function() {
         $('#quoteForm').on('submit', function(event) {
             event.preventDefault(); // Prevent the default form submission
             // Serialize the form data
             var formData = $(this).serialize();
             formData += "&subject=Free Quote";
             // Submit the form data using jQuery AJAX
             $.ajax({
                 type: 'POST',
                 url: 'contact.php', // The URL to which the request is sent
                 data: formData,
                 success: function(response) {
                     // Display the response message
                     $('#responseQuoteMessage').html('<p class="text-success">Your Request for a Free Quote Has Been Submitted!</p>');
                     // Optionally reset the form
                     $('#quoteForm')[0].reset();
                     setTimeout(() => {
                        $('#responseQuoteMessage').html("");
                     }, 8000);
                     
                 },
                 error: function(xhr, status, error) {
                     $('#responseQuoteMessage').html('<p class="text-danger">There was an error submitting the form. Please try again.</p>');
                     $('#quoteForm')[0].reset();
                  }
             });
         });
     });

 </script>
 </body>

 </html>