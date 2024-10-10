<?php include("header.php") ?>
<style>
    .box_item_info li {
        color: #000;
    }

    .booking_wrapper .col-12 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .row_list_version_2 {
        margin-bottom: 70px;
        padding: 50px 30px 30px 30px;
        ;
    }

    .box_item_info {
        border-radius: 15px;
    }
</style>


<div class="header-modal">
    <div class="modal fade" tabindex="-1" id="bookingRoom" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Book Your Stay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="send_mail.php" method="POST" id="bookingForm">
                        <!-- <ul>
                                <li>
                                <label for="name"><span>Name <span class="required-star">*</span></span></label>
                                <input type="text" id="name" name="name" required>
                                </li>
                                <li>
                                <label for="mail"><span>Email Id<span class="required-star">*</span></span></label>
                                <input type="email" id="mail" name="mail" required>
                                </li>
                                <li>
                                <label for="phone"><span>Phone Number <span class="required-star">*</span></span></label>
                                <input type="phone" id="phone" name="phone" required>
                                </li>
                                <li>
                                <label for="address"><span>Address<span class="required-star">*</span></span></label>
                                <input type="address" id="address" name="address" required>
                                </li>
                                <li>
                                <label for="msg"><span>Message</span></label>
                                <textarea rows="4" cols="50" id="msg" name="msg" required></textarea>
                                </li>
                                <li>
                                <input type="Submit" value="Submit" id="submit">
                                </li>
                            </ul> -->
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name"><span>Name <span class="required-star">*</span></span></label>
                                <input type="text" id="name" name="name" required class="option_font">
                            </div>
                            <div class="col-md-6">
                                <label for="mail"><span>Email Id<span class="required-star">*</span></span></label>
                                <input type="email" id="mail" name="mail" required class="option_font">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone"><span>Phone Number <span class="required-star">*</span></span></label>
                                <input type="phone" id="phone" name="phone" required class="option_font">
                            </div>
                            <div class="col-md-6">
                                <label for="address"><span>Address<span class="required-star">*</span></span></label>
                                <input type="address" id="address" name="address" required class="option_font">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mobile_col">
                                <label for="name"><span>Check In <span class="required-star">*</span></span></label>
                                <input type="date" id="check_in" name="check_in" required class="option_font">
                            </div>
                            <div class="col-md-6 mobile_col">
                                <label for="mail"><span>Check Out<span class="required-star">*</span></span></label>
                                <input type="date" id="check_out" name="check_out" required class="option_font">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mobile_col">
                                <label for="name"><span>Hotel Name <span class="required-star">*</span></span></label>
                                <select id="hotel" name="hotel" required onchange="updateRoomOptions()" class="option_font">
                                    <option value="" class="option_font">-- Select Hotel --</option>
                                    <option value="Mookanana_Resort_and_Spa">Mookanana Resort & Spa</option>
                                    <option value="Advaya_Resort">Advaya Luxury Resort</option>
                                    <option value="Club_Oxygen_Resorts">Club Oxygen Resorts</option>
                                    <option value="Thekady_Resort">Oxygen Resorts, Thekkady.</option>
                                    <option value="Mojirm_Resort">Oxygen Resorts Morjim, Goa.</option>
                                </select>
                            </div>
                            <div class="col-md-6 mobile_col">
                                <label for="name"><span>Select Room <span class="required-star">*</span></span></label>
                                <select id="room" name="room" required class="option_font">
                                    <option value="">-- Select a Room --</option>

                                </select>
                            </div>
                        </div>
                        <div class="row msg_row">
                            <div class="col-md-12">
                                <label for="msg"><span>Message</span></label>
                                <textarea rows="4" cols="50" id="msg" name="msg" required></textarea>
                            </div>
                        </div>
                        <div class="submit-btn">
                            <input type="Submit" value="Submit" id="submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<main>
    <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img" src="img/photos/mookana_banner.png" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <small class="slide-animated one">Move towards Forest</small>
                <h1 class="slide-animated two">Mookanana Resorts Booking</h1>
            </div>
        </div>
    </div>

    <div class="container add_bottom_60 add_top_60">
        <div class="title text-center">
            <small>Jungle Forest Experience</small>
            <h2>Choose Your Cottage</h2>
        </div>
        <div class="row">

            <!-- <div class="image-content-row">
                <div class="image-section">
                    <img src="img/photos/deluxe_room.png" alt="Advaya Luxury Resort" class="img-fluid" />
                </div>
                <div class="content-section">
                    <div class="box_item_info">
                        <div class="row">
                            <div class="col-md-6">
                                <small>Rent : Contact Us</small>
                                <h2>Deluxe Room</h2>
                                <h6 style="color:#124888;">Options</h6>
                                <ul>
                                    <li>Breakfast Included</li>
                                    <li>Free Parking</li>
                                    <li>Sports Facilities</li>
                                </ul>
                                
                            </div>
                            <div class="col-md-6">
                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Maximum:</span>
                                </div>
                                <div class="right-side">
                                    <p>2 Guests</p>
                                </div>
                            </div>
                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Room Size:</span>
                                </div>
                                <div class="right-side">
                                    <p>250 sqt</p>
                                </div>
                            </div>
                                <div class="box_item_footer d-flex align-items-center justify-content-between">
                                    <a href="#0" class="btn_4 learn-more">
                                        <span class="circle">
                                            <span class="icon arrow"></span>
                                        </span> 
                                        <span class="button-text" href="#bookingModal" data-toggle="modal">Book Now</span>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>                           
                    </div>
                </div>
            </div> -->

            <div class="row_list_version_2" id="deluxe_room">
                <div class="row g-0 align-items-center justify-content-center" id="deluxe">
                    <div class="col-xl-6">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item active center">
                                        <div class="item"><img src="img/photos/cozy-1.png" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item"><img src="img/photos/cozy-2.png" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item"><img src="img/photos/cozy-3.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots">
                                <button role="button" class="owl-dot active"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info">
                            <h2>Cozy Room</h2>

                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Maximum:</span>
                                </div>
                                <div class="right-side">
                                    <p>2 Guests</p>
                                </div>
                            </div>
                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Room Size:</span>
                                </div>
                                <div class="right-side">
                                    <p>250 sqt</p>
                                </div>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="https://live.ipms247.com/booking/book-rooms-mookananaresortandspa?utm_source=Mookanana.com&utm_medium=Business+Listing&utm_campaign=Book-Now-CTA&utm_id=Book-Now-Button&utm_term=Mookanana+Resort&utm_content=SEO-Rakesh+T+Shankar" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text" href="">Book Now</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="row_list_version_2 inverted" id="hill_view">
                <div class="row g-0 align-items-center justify-content-center" id="deluxe">

                    <div class="col-xl-6 order-xl-2">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item active center">
                                        <div class="item"><img src="img/photos/hill_view_img.webp" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item"><img src="img/photos/hill_view_img2.webp" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item"><img src="img/photos/hill_view_img3.webp" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots">
                                <button role="button" class="owl-dot active"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>

                    <div class="col-xl-4">
                        <div class="box_item_info">
                            <h2>Hill View Cottage</h2>

                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Maximum:</span>
                                </div>
                                <div class="right-side">
                                    <p>5 Guests</p>
                                </div>
                            </div>
                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Room Size:</span>
                                </div>
                                <div class="right-side">
                                    <p>450 sqt</p>
                                </div>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="https://live.ipms247.com/booking/book-rooms-mookananaresortandspa?utm_source=Mookanana.com&utm_medium=Business+Listing&utm_campaign=Book-Now-CTA&utm_id=Book-Now-Button&utm_term=Mookanana+Resort&utm_content=SEO-Rakesh+T+Shankar" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text" href="">Book Now</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row_list_version_2" id="valley_view">
                <div class="row g-0 align-items-center justify-content-center" id="deluxe">
                    <div class="col-xl-6">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item active center">
                                        <div class="item"><img src="img/photos/valley_view.webp" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item"><img src="img/photos/valley_view_2.webp" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item"><img src="img/photos/valley_view3.webp" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots">
                                <button role="button" class="owl-dot active"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                                <button role="button" class="owl-dot"><span></span></button>
                            </div>
                        </div>
                        <!-- /carousel -->
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info">
                            <h2>Valley View Cottage</h2>

                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Maximum:</span>
                                </div>
                                <div class="right-side">
                                    <p>5 Guests</p>
                                </div>
                            </div>
                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Room Size:</span>
                                </div>
                                <div class="right-side">
                                    <p>850 sqt</p>
                                </div>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="https://live.ipms247.com/booking/book-rooms-mookananaresortandspa?utm_source=Mookanana.com&utm_medium=Business+Listing&utm_campaign=Book-Now-CTA&utm_id=Book-Now-Button&utm_term=Mookanana+Resort&utm_content=SEO-Rakesh+T+Shankar" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text" href="">Book Now</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- <div class="row_list_version_2 inverted" id="double_bed">
                <div class="row g-0 align-items-center justify-content-center" id="deluxe">


                    <div class="col-xl-6 order-xl-2">
                        <div class="item">
                            <a data-fslightbox="gallery_1" data-type="image" href="img/photos/double_bed.png">
                                <img src="img/photos/double_bed.png" alt="" class="img-fluid book-room"></a>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="box_item_info">
                            <small>Rent : Contact Us</small>
                            <h2>Double Bed Room Villa</h2>

                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Maximum:</span>
                                </div>
                                <div class="right-side">
                                    <p>6 Guests</p>
                                </div>
                            </div>
                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Room Size:</span>
                                </div>
                                <div class="right-side">
                                    <p>950 sqt</p>
                                </div>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="#0" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text" href="#bookingRoom" data-toggle="modal">Book Now</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div> -->


            <div class="row_list_version_2 inverted" id="private_pool">
                <div class="row g-0 align-items-center justify-content-center" id="deluxe">
                    <div class="col-xl-6 order-xl-2">
                        <div class="item">
                            <a data-fslightbox="gallery_1" data-type="image" href="img/photos/private_villa.png">
                                <img src="img/photos/private_villa.png" alt="" class="img-fluid book-room"></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="box_item_info">
                            <h2>Private Pool Villa</h2>

                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Maximum:</span>
                                </div>
                                <div class="right-side">
                                    <p>6 Guests</p>
                                </div>
                            </div>
                            <div class="guest-info">
                                <div class="left-side">
                                    <i class="bi bi-person"></i>
                                    <span>Room Size:</span>
                                </div>
                                <div class="right-side">
                                    <p>1500 sqt</p>
                                </div>
                            </div>
                            <div class="box_item_footer d-flex align-items-center justify-content-between">
                                <a href="https://live.ipms247.com/booking/book-rooms-mookananaresortandspa?utm_source=Mookanana.com&utm_medium=Business+Listing&utm_campaign=Book-Now-CTA&utm_id=Book-Now-Button&utm_term=Mookanana+Resort&utm_content=SEO-Rakesh+T+Shankar" class="btn_4 learn-more">
                                    <span class="circle">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text" href="">Book Now</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</main>

<?php include("footer.php") ?>
</footer>
<!-- /footer -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-gwAqT3IuTyG8dYYeBWit96kP4Zq8+FWZnC9T1k9Fd3/0Oe+EvbH6yDHPZr4UO2a5o2Yy+TSE+p9PO8kH+q7Nug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        nav: true,
        dots: true
    });
});
</script>
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
<script src="phpmailer/validate.js"></script>

</body>

</html>