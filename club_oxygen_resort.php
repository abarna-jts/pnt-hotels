<?php include("header.php"); ?>
<!-- /nav_panel -->
<style>
    .bg_white .title h3 {
        margin-bottom: 10px;
        /* font-size: 1.5rem; */
    }

    #tsum-tabs label[for*='1']:before {
        content: '\f2e7';
    }

    .amenties .title h3 {
        font-size: 1.4rem;
    }

    .list_display {
        display: flex;
    }

    .room_facilities_list li {
        color: #000;
    }

    .room_facilities_list ul li {
        float: left;
        width: 47%;
        margin: 0 5px;
        padding: 10px 0;
        border-bottom: 1px solid #ededed;
        display: flex;
        align-items: center;
    }

    .amenties_column {
        flex: 0 0 37.333333%;
        max-width: 37.333333%;
    }

    .activities_list {
        padding-left: 0px;
    }

    .activities_list2 {
        padding-left: 25px;
    }
</style>
<main>

    <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img" src="img/photos/club-banner.png" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <small class="slide-animated one">Nature Impressive Experience</small>
                <h1 class="slide-animated two">Club Oxygen Resorts</h1>
            </div>
        </div>
    </div>
    <!-- /Background Img Parallax -->

    <div class="bg_white" id="first_section">
        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="title">
                        <small>Nature Experience</small>
                        <h3>Welcome to Oxygen Resort, Ooty</h3>
                    </div>
                    <p style="text-align:justify;">Nestled amidst the picturesque landscapes of Ooty, Welbeck Vintage by Oxygen Resorts 
                        offers a tranquil retreat in the heart of the 'Queen of Hill Stations.' Situated away from the hustle and bustle 
                        of the city, yet conveniently close to all its attractions, our resort provides
                         the perfect blend of serenity and accessibility.</p>
                </div>
                <div class="col-lg-12">
                    <div class="row nasir-welboxes">
                        <div class="col-sm-3">
                            <a href="#luxury_room" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/1.png" alt="">
                                </div>
                                <h4>Luxuary Room </h4>
                                <!-- <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Conference & Events </h2>
                                            <p> </p>
                                        </div>
                                    </div>
                                </div> -->
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="#inhouse_rest" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/2.png" alt="">
                                </div>
                                <h4>Inhouse Restaurant </h4>
                                <!-- <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Conference & Events </h2>
                                            <p> </p>
                                        </div>
                                    </div>
                                </div> -->
                            </a>
                        </div>
                        <div class="col-sm-3 drop-icon">
                            <a href="#" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/3.png" alt="">
                                </div>
                                <h4>Pick & Drop Facility</h4>
                                <!-- <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Conference & Events </h2>
                                            <p> </p>
                                        </div>
                                    </div>
                                </div> -->
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="#local_attraction" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/4.png" alt="">
                                </div>
                                <h4>Local Attraction</h4>
                                <!-- <div class="overlay transition3s">
                                    <div class="icon_position_table">
                                        <div class="icon_container border_round">
                                            <h2>Conference & Events </h2>
                                            <p> </p>
                                        </div>
                                    </div>
                                </div> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_white -->


    <div class="bg_white add_bottom_60 add_top_60" >
            <div class="container-fluid p-lg-0">
                <div data-cues="zoomIn">
                    <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img gallery-carousel">
                        <div class="item">
                            <img src="img/gallery/o_gal_1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/o_gal_2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/o_gal_3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/o_gal_4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/o_gal_5.png" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/o_gal_6.png" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/o_gal_7.png" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_1.png">FullScreen Gallery</a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_2.png"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_3.png"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_4.png"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_5.png"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_6.png"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_7.png"></a>
                    
                </div>
            </div>
        </div>


    

    <!-- /bg_white -->
    <div class="bg_white add_bottom_60 add_top_60" id="luxury_room">
        <div class="container">
            <div data-cue="slideInUp">
                <div class="title">
                    <small>Club Oxygen Resorts,Ooty</small>
                    <h2>Choose your room</h2>
                </div>
                <div class="row" data-cues="slideInUp" data-delay="800">
                    <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> -->
                        <div class="item">
                            <a href="https://wa.me/919916669006" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/club_1.png)"></div>
                                    <div class="info">
                                        <small>Rent : Contact Us</small>
                                        <h3>Honey Comb Standard</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> -->
                        <div class="item">
                            <a href="https://wa.me/919916669006" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/club_2.png)"></div>
                                    <div class="info">
                                        <small>Rent : Contact Us</small>
                                        <h3>Honey Comb</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> -->
                        <div class="item">
                            <a href="https://wa.me/919916669006" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/club_3.png)"></div>
                                    <div class="info">
                                        <small>Rent : Contact Us</small>
                                        <h3>Mellow Glory</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> -->
                        <div class="item">
                            <a href="https://wa.me/919916669006" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/club_4.png)"></div>
                                    <div class="info">
                                        <small>Rent : Contact Us</small>
                                        <h3>Euphoria</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> -->
                        <div class="item">
                            <a href="https://wa.me/919916669006" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/club_5.png)"></div>
                                    <div class="info">
                                        <small>Rent : Contact Us</small>
                                        <h3>Bliss</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>

                        <div class="item">
                            <a href="https://wa.me/919916669006" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/club_6.png)"></div>
                                    <div class="info">
                                        <small>Rent : Contact Us</small>
                                        <h3>Calista</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://wa.me/919916669006" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/club_7.png)"></div>
                                    <div class="info">
                                        <small>Rent : Contact Us</small>
                                        <h3>Rukum</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>

                        <!-- </div> -->
                    </div>
                </div>
                <!-- /row-->
            </div>
        </div>
    </div>
    <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2" >
        <img class="jarallax-img kenburns-2" src="img/photos/parallax.webp" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title white">
                            <small class="mb-1">Testimonials</small>
                            <h2>What Clients Says</h2>
                        </div>
                        <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/profile-2.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Sanjana</h4>
                                    </div>
                                    <div class="comment">
                                        From the moment I walked into the hotel, I felt like a valued guest. The warm smiles and genuine hospitality made me instantly feel at home. Throughout my stay, the staff went above and beyond to ensure every detail was taken care of, from offering recommendations to promptly attending to any request I had. It truly made my experience exceptional. </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/profile-3.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Mark John</h4>
                                    </div>
                                    <div class="comment">
                                        Staying at this hotel was an absolute pleasure. The ambiance was inviting, and the hospitality was unmatched. The staff went out of their way to ensure that I had everything I needed, making me feel like a VIP throughout my stay. It's clear that they take pride in the small details, as every aspect of my experience was carefully curated to enhance my comfort and satisfaction. </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/profile-1.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Mohan S</h4>
                                    </div>
                                    <div class="comment">
                                        My recent stay at this hotel was nothing short of fantastic. The level of service provided by the attentive staff was exceptional. They anticipated my needs before I even had to ask, making me feel incredibly well taken care of. The attention to detail, from the cleanliness of the rooms to the personalized touches, truly made my stay memorable. I can't wait to return!
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/m-p-3.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Sonu S</h4>
                                    </div>
                                    <div class="comment">
                                    I can't say enough about the outstanding service provided by the staff at this hotel. Their dedication to ensuring my comfort and satisfaction was evident from the start. Every interaction was met with professionalism and a genuine desire to make my stay enjoyable. The attention to detail, from the cleanliness of the rooms to the thoughtful amenities provided, exceeded my expectations.
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            

                        </div>
                        <!-- End carousel_testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container add_bottom_60 add_top_60 tab_section" data-cues="slideInUp" data-delay="300" id="inhouse_rest">
        <div class="row">
            <div class="col-md-4">
                <div class="img-holder">
                    <img src="img/photos/tab-img-ooty.webp" alt="" class="img-fluid tab-img">
                </div>

            </div>
            <div class="col-md-8 ooty-tab">
                <div id="tsum-tabs">
                    <div class="title mb-3">
                        <h2 data-cue="slideInUp" data-delay="200">Best Resort in Ooty</h2>
                    </div>
                    <main data-cues="slideInUp" data-delay="500">

                        <input id="tab1" type="radio" name="tabs" checked>
                        <label for="tab1">Delicious Food</label>

                        <input id="tab2" type="radio" name="tabs">
                        <label for="tab2">Fun With Family</label>

                        <input id="tab3" type="radio" name="tabs">
                        <label for="tab3">Mountain Cycling</label>

                        <input id="tab4" type="radio" name="tabs">
                        <label for="tab4">Candle Light Dinner</label>


                        <section id="content1">

                            <h5>Delicious Food</h5>
                            <p>Indulge in a culinary journey of delight with our Delicious Food offerings, from sumptuous breakfast buffets to gourmet dinners, our chefs craft dishes that tantalize the taste buds and leave you craving more.</p>

                        </section>

                        <section id="content2">

                            <h5>Fun With Family</h5>
                            <p>Fun With Family
                                Create cherished memories with your loved ones as you enjoy Fun With Family at our resort. Splashing in the pool, playing games on the lawn and activities ensure there's something for everyone to enjoy.</p>



                        </section>

                        <section id="content3">

                            <h5>Mountain Cycling</h5>
                            <p>Explore breathtaking beauty of our surroundings with Mountain Cycling adventures. As you pedal along scenic trails, discovering hidden gems & stunning vistas around every bend.</p>


                        </section>


                        <section id="content4">

                            <h5>Candle Light Dinner</h5>
                            <p>Rekindle romance with Candle Light Dinner under the stars. Our intimate dining experience is perfect for celebrating special occasions to enjoying a romantic evening with your partner.</p>


                        </section>



                    </main>
                </div>
            </div>
        </div>

    </div>


    <!-- <div class="bg-white">
        <div class="container add_bottom_60 add_top_60">
            <div class="row justify-content-between margin_60_0">
                <div class="col-lg-4">
                    <div class="title">
                        <small>Welbeck Vintage By Oxygen Resorts,Ooty</small>
                        <h3>Core Value of Resort</h3>
                    </div>
                    <p>Can’t find your question in the list?
                        Let us know your questions.</p>
                    <p><a href="https://api.whatsapp.com/send?phone=%20919916609006&utm_source=Whatsapp&utm_medium=cpc&utm_campaign=WhatsApp_Website_Click%20&text=Hello!%20I%20found%20Your%20Number%20on%20thearaise.com/oxygen-resort-ooty.php%20Website.%20Please%20Call%20Me%20Back%20With%20The%20Information" class="animated_link"><strong>Contact Us <i class="bi bi-arrow-right"></i></strong></a></p>
                </div>
                <div class="col-lg-7">
                    <div role="tablist" class="mb-5 accordion" id="faq">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="" aria-expanded="false">
                                        <i class="indicator bi-plus-lg"></i><b>Ultimate Comfort at Welbeck</b>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                                <div class="card-body">
                                    <p>	
                                        Perched overlooking the racecourse, valley area, and the enchanting city below, Welbeck Vintage offers breathtaking views that will leave you spellbound. Whether you're here for leisure or business, our expansive resort caters to your every need, providing a haven of relaxation and comfort.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="" aria-expanded="false">
                                        <i class="indicator bi-plus-lg"></i>Popular Tourist Attractions
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                                <div class="card-body">
                                    <p>	
                                    Venture out and explore the wonders of Ooty, with popular tourist attractions such as the Rose Garden, Botanical Garden, and Dodda Betta Peak just a stone's throw away. Whether you're a nature enthusiast, an adventure seeker, or simply looking to unwind amidst stunning surroundings, Welbeck Vintage offers the perfect base for your Ooty escapade.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-bs-toggle="collapse" href="" aria-expanded="false">
                                        <i class="indicator bi-plus-lg"></i>Modern Amenities
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                                <div class="card-body">
                                    <p>Step into our elegantly adorned rooms, where modern amenities seamlessly blend with timeless charm. From plush furnishings to luxurious draperies, every detail is thoughtfully curated to ensure a truly memorable stay.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div> -->



    
    <div class="check_availability  bg-white" id="local_attraction">
        <div class="container margin_120_95" id="booking_section">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Nature Experience</small>
                            <h2>Welbeck Vintage by Oxygen Resorts</h2>
                        </div>
                        <p class="text-justify">Discover a unique nature experience at Oxygen Resorts, where exceptional meets the beauty of nature.</p>
                        <p class="phone_element no_borders"><a href=""><i class="bi bi-geo-alt"></i><span><em>Address</em>9MXX+GPM, Welbeck Rd, above Woodlands Hotel, Fern Hill, Ooty, Tamil Nadu 643001</span></a></p>
                        <p class="phone_element no_borders"><a href="tel://9916669006"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>9916669006</span></a></p>
                        <p class="text-start mt-3"><a href="https://wa.me/919916669006" class="btn_1 outline">Book Now</a></p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div data-cue="slideInUp" data-delay="200">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4842.968377337427!2d76.71215657586593!3d11.404589547291499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8bdf5b3f8a47b%3A0x378516077fac0cbb!2sOxygen%20Resorts%2C%20Ooty!5e1!3m2!1sen!2sin!4v1727418603940!5m2!1sen!2sin"
                         width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- / row -->                        
                    </div>
                    
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
    </div>
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
<script src="phpmailer/validate.js"></script>
<script>
    // Progress bars animation
    $(function() {
        "use strict";
        var $section = $('#reviews');
        $(window).on('scroll', function(ev) {
            var scrollOffset = $(window).scrollTop();
            var containerOffset = $section.offset().top - window.innerHeight;
            if (scrollOffset > containerOffset) {
                $(".progress-bar").each(function() {
                    var each_bar_width = $(this).attr('aria-valuenow');
                    $(this).width(each_bar_width + '%');
                });
            }
        });
    });
</script>

</body>

<!-- Mirrored from www.ansonika.com/paradise/room-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 06:31:01 GMT -->

</html>