<footer class="revealed">
    <div class="footer_bg">
        <div class="gradient_over"></div>
        <div class="background-image" data-background="url(img/photos/footer-bg.jpg)"></div>
    </div>
    <div class="container-fluid">
        <div class="row move_content">
            <div class="col-lg-2 col-md-12 footer_about">
                <h5>About Us</h5>
                <!-- <div class="footer-logo">
                        <img src="img/pnt-logo.png" class="footer-img"/>
                    </div> -->
                <div class="footer-text" style="text-align: justify;">
                    <p>Discover unlimited possibilities with our unique collection of getaways and weekend destinations.
                        Resorts are ideally located in Bangalore, near Coorg and saklespur for a quick day trip or an extended nature inspired vacation
                    </p>
                </div>
                <div class="social">
                    <h5>Social Media</h5>
                    <ul>
                        <li><a href="https://www.instagram.com/araiseresorts?igsh=MTlxMDkxdjNib2Y5MQ=="><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://wa.me/9535529535"><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href="https://www.facebook.com/p/PnT-Hotels-100067223244585/?locale=ca_ES"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://x.com/"><i class="bi bi-twitter-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 contact_page">
                <h5>Contacts</h5>
                <ul>
                    <h6 style="color:#fff;">PnT Hospitality Services</h6>
                    <li><i class="fa-solid fa-location-dot"></i>
                        Unit L2 - 04, Skywalk Building,5/1, Assaye Road, Bangalore- Corporate Office Address</li>
                    <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@pnthotels.com" style="color:white;">info@pnthotels.com</a></li>
                    <li><i class="fa-solid fa-phone"></i><a href="tel:+919916609006" style="color:white;">+91 9916609006</a></li>
                </ul>
                <p class="footer-para">
                    <a href="mookana_hotel.php">Sakleshpur resorts,</a>
                    <a href="advaya_resort.php"> Resorts in Sakleshpur,</a>
                    <a href="mookana_hotel.php"> Resorts near bangalore,</a>
                    <a href="advaya_resort.php"> Resorts near hassan,</a>
                    <a href="mookana_hotel.php">Resorts near chikmagalur,</a>
                    <a href="advaya_resort.php">Resorts near coorg,</a>
                    <a href="mookana_hotel.php">Coorg resorts,</a>
                    <a href="advaya_resort.php">Best resort Sakleshpur,</a>
                    <a href="mookana_hotel.php">Family resort Saklespur, </a>
                    <a href="advaya_resort.php">Resorts in Saklespur with activities,</a>
                    <a href="mookana_hotel.php">Resorts in Saklespur with waterfalls</a>
                </p>

            </div>
            <div class="col-lg-2 col-md-12 footer-links">
                <h5>Explore</h5>
                <div class="footer_links">
                    <ul>
                        <li><i class="fa-regular fa-hand-point-right"></i><a href="index.php">Home</a></li>
                        <li><i class="fa-regular fa-hand-point-right"></i><a href="about.php">About Us</a></li>
                        <li><i class="fa-regular fa-hand-point-right"></i><a href="mookana_hotel.php">Mookanana Resorts</a></li>
                        <li><i class="fa-regular fa-hand-point-right"></i><a href="advaya_resort.php">Advaya Luxury Resort</a></li>
                        <li><i class="fa-regular fa-hand-point-right"></i><a href="packages.php">Our Packages</a></li>
                        <li><i class="fa-regular fa-hand-point-right"></i><a href="contacts.php">Contacts</a></li>

                    </ul>

                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <h5>Google Map</h5>
                <div class="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4814.030071528493!2d77.61597747588002!3d12.9928841144096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16d88b6fe4fd%3A0x7b0f6c94cdd3f859!2sPnT%20Hotels!5e1!3m2!1sen!2sin!4v1725610237029!5m2!1sen!2sin" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 footer-qr">
                <h5>QR Code</h5>
                <div class="footer_links">
                    <img src="img/photos/qr-code.png" class="qr-code" alt="qr-code" />
                </div>
            </div>

        </div>
        <!--/row-->
    </div>
    <!--/container-->
    <div class="copy">
        <div class="container">
            © Copyright 2024 PnT Hotels | All Rights Reserved by <a href="http://jorim.in/"> Jorim Technology Solution</a>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</script>

<script>
    $('#bookingForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: $(this).attr('action'), // Get the form action URL
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.trim() === 'success') {
                    // If the response is 'success', show the success modal
                    $('#successModal').modal('show');
                } else {
                    alert(response); // Show error message if mail is not sent
                }
            },
            error: function() {
                alert('There was an error sending the form. Please try again later.');
            }
        });
    });
</script>