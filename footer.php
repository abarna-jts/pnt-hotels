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
                            <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="https://wa.me/9916669006"><i class="bi bi-whatsapp"></i></a></li>
                            <li><a href="https://www.facebook.com/p/PnT-Hotels-100067223244585/"><i class="bi bi-facebook"></i></a></li>
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
                        <li><i class="fa-solid fa-phone"></i><a href="tel:+919916669006" style="color:white;">+91 9916669006</a></li>
                    </ul>
                    
                </div>
                <div class="col-lg-2 col-md-12">
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
                <div class="col-lg-2 col-md-12">
                <h5>QR Code</h5>
                    <div class="footer_links">
                        <img src="img/photos/qr-code.png" class="qr-code"/>
                    </div>
                </div>
                
            </div>
            <!--/row-->
        </div>
        <!--/container-->
        <div class="copy">
            <div class="container">
                ©  Copyright 2024 PnT Hotels   |   All Rights Reserved by <a href="http://jorim.in/"> Jorim Technology Solution</a>
            </div>
        </div>
    </footer>
    <!-- <script>
document.getElementById('contact_form').onsubmit = function(event) {
    event.preventDefault(); 
    
    var formData = new FormData(this);

    fetch('send_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(responseText => {
        if (responseText.trim() === 'success') {
            $('#successModal').modal('show');
        } else {
            alert('There was an error sending your message: ' + responseText);
        }
    })
    .catch(error => console.error('Error:', error));
};

document.querySelector('.close-btn').addEventListener('click', function() {
    $('#successModal').modal('hide');
    $('#bookingModal').modal('hide');
});


document.querySelector('.close').addEventListener('click', function() {
    $('#successModal').modal('hide');
    $('#bookingModal').modal('hide');
}); -->
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
<!-- <script>
    $('#availabilitybooking').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: $(this).attr('action'), // Get the form action URL
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.trim() === 'success') {
                    // If the response is 'success', show the success modal
                    $('#successModal2').modal('show');
                } else {
                    alert(response); // Show error message if mail is not sent
                }
            },
            error: function() {
                alert('There was an error sending the form. Please try again later.');
            }
        });
    });
</script> -->
<script>
  // Function to update room options based on selected hotel
  function updateRoomOptions() {
    const roomSelect = document.getElementById("room");
    const hotelSelect = document.getElementById("hotel").value;

    // Clear existing room options
    roomSelect.innerHTML = '<option value="">-- Select a Room --</option>';

    // Define room options for each hotel
    const roomOptions = {
        Mookanana_Resort_and_Spa: [
        { value: "Deluxe Room", text: "Deluxe Room" },
        { value: "Hill View Cottage", text: "Hill View Cottage" },
        { value: "Valley View Cottage", text: "Valley View Cottage" },
        { value: "Double Bed Room Villa", text: "Double Bed Room Villa" },
        { value: "Private Pool Villa", text: "Private Pool Villa" },

      ],
      Club_Oxygen_Resorts: [
        { value: "Honey Comb Standard", text: "Honey Comb Standard" },
        { value: "Honey Comb", text: "Honey Comb" },
        { value: "Mellow Glory", text: "Mellow Glory" },
        { value: "Euphoria", text: "Euphoria" },
        { value: "Bliss", text: "Bliss" },
        { value: "Calista", text: "Calista" },
        { value: "Rukum", text: "Rukum" },
      ],
      Advaya_Resort: [
        { value: "Club Room", text: "Club Room" },
        { value: "Club Premiere Room", text: "Club Premiere Room" },
        { value: "Luxury Tetal Suit", text: "Luxury Tetal Suit" },
        { value: "Village House Room", text: "Village House Room" },
      ],
      Thekady_Resort: [
        { value: "Deluxe Room", text: "Deluxe Room" },
        { value: "Economy Room", text: "Economy Room" },
        { value: "Super Room", text: "Super Room" },
        { value: "Family Room", text: "Family Room" },
      ],
      Mojirm_Resort: [
        { value: "Deluxe Room", text: "Deluxe Room" },
        { value: "Superior Deluxe", text: "Superior Deluxe" },
        { value: "Executive Deluxe Sea View", text: "Executive Deluxe Sea View" },
        { value: "Family Suit", text: "Family Suit" },
        { value: "Deluxe Suit Sea View", text: "Deluxe Suit Sea View" },
      ],

    };

    // Add new room options based on selected hotel
    if (roomOptions[hotelSelect]) {
      roomOptions[hotelSelect].forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.value;
        newOption.textContent = option.text;
        roomSelect.appendChild(newOption);
      });
    }
  }
</script>
<script>
  // Get today's date in the format YYYY-MM-DD
  let today = new Date().toISOString().split('T')[0];
  
  // Set the min attribute to today's date for both check-in and check-out fields
  document.getElementById("check_in").setAttribute("min", today);
  document.getElementById("check_out").setAttribute("min", today);
</script>