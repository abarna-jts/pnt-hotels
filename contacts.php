<?php include("header.php"); ?>
    <!-- /nav_panel -->
<style>
    .clearfix div{
        color:#978667;
    }
    .form-floating label{
        color:#978667;
    }
    
</style>
    <main>

        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="img/photos/abt-banner.png" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Discover Ultimate Experience</small>
                    <h1 class="slide-animated two">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <div class="contact_icon">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Address</h4>
                                </div>
                                <div class="contact_details">PnT Hospitality Services<br>
                                Unit L2 - 04, Skywalk Building,<br>5/1, Assaye Road, Bangalore<br> Corporate Office Address</div>
                            </li>
                            <li>
                            <div class="contact_icon">
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>
                            </div>
                                <p><a href="#0" style="color: #978667 !important;">info@pnthotels.com</a></p>
                            </li>
                            <li>
                            <div class="contact_icon">
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>
                            </div>
                                <div class="call">+ 91 9916669006<br></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Get in Touch</h3>
                    <div id="message-contact"></div>
                    <form method="post" action="contact_mail.php" id="contactform" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="firstname_contact" name="firstname_contact" placeholder=" First Name" required>
                                    <label for="firstname_contact">First Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact" name="lastname_contact" placeholder="Last Name" required>
                                    <label for="lastname_contact">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" name="email_contact" placeholder="Email" required>
                                    <label for="email_contact">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" name="phone_contact" placeholder="Telephone" required>
                                    <label for="phone_contact">Telephone</label>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" name="message_contact"></textarea>
                            <label for="message_contact">Message</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" name="verify_contact" placeholder="Are you human? 3 + 1 =" required>
                                    <label for="verify_contact">Are you human? 3 + 1 =</label>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3"><input type="submit" value="Submit" class="btn_1 outline"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- Success Popup Modal -->
<!-- Success Popup Modal -->
<div id="successModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Success</h5>
        <button type="button" class="close" id="closeModalButton" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Email sent successfully!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById("contactform").addEventListener("submit", function(e) {
   
    e.preventDefault();

    const formData = new FormData(this);

    fetch('contact_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Show success modal
            $('#successModal').modal('show');
        } else {
            alert(data.message);  // Show error message if any
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
    
});

</script>


<!-- Include Bootstrap JS for modal functionality -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!--/container -->

        <div class="map_contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4814.030071528493!2d77.61597747588002!3d12.9928841144096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16d88b6fe4fd%3A0x7b0f6c94cdd3f859!2sPnT%20Hotels!5e1!3m2!1sen!2sin!4v1725281853375!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--/map_contact -->

        <div class="check_availability  bg-white">
        <div class="container pt-5 pb-5 contact-final" id="booking_section">
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Ultimate Travel Experience</small>
                            <h2>PnT Hotel</h2>
                        </div>
                        <p class="text-justify">Discover a unique travel experience at PnT Hotel, where exceptional meets the beauty of nature.</p>
                        <p class="phone_element no_borders"><a href="tel://9916669006"><i class="bi bi-telephone"></i><span><em>Call Us</em>+91 9916669006</span></a></p>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div data-cue="slideInUp" data-delay="200">
                    <p class="text-center d-flex align-items-center justify-content-center mt-3"><a href="#bookingModal" class="btn_1 outline" data-toggle="modal">Book Now</a></p>

                        
                    </div>
                    
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
    </div>
        <!-- /container -->
        
    </main>

    <?php include("footer.php"); ?>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.js"></script>
<script src="js/common_functions.js"></script>
<script src="js/datepicker_inline.js"></script>

</body>

<!-- Mirrored from www.ansonika.com/paradise/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 06:31:12 GMT -->
</html>