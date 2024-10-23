<?php include("header.php") ?>
<style>
    a:hover {
        text-decoration: none;
    }

    a.box_contents figure img {
        transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    a.box_contents .wrapper {
        padding: 20px 25px 50px 30px;
        height: auto;
        position: relative;
    }
</style>
<main>
    <div class="hero home-search full-height jarallax" data-jarallax-video="mp4:./video/banner-video1.mp4,ogv:./video/banner-video.ogv" data-speed="0.2">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <!-- <small class="slide-animated one"></small> -->
                <h1 class="slide-animated two">Welcome to PnT Hotels</h1>
                <small class="slide-animated one">ultimate travel experience</small>
                <!-- <div class="row justify-content-center slide-animated three">
                        
                    </div> -->
                <div class="row justify-content-center slide-animated three">
                    <div class="col-xl-10">
                        <div class="row g-0 booking_form">
                            <div class="col-lg-4 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="dates" id="dates" placeholder="Check in / Check out" readonly=""><span class="easepick-wrapper" style="position: absolute; pointer-events: none;"></span>
                                    <i class="bi bi-calendar2"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 pe-lg-0 pe-sm-1">
                                <div class="qty-buttons">
                                    <label>Adults</label>
                                    <input type="button" value="+" class="qtyplus" name="adults">
                                    <input type="text" name="adults" id="adults" value="" class="qty form-control">
                                    <input type="button" value="-" class="qtyminus" name="adults">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 ps-lg-0 ps-sm-1">
                                <div class="qty-buttons">
                                    <label>Childs</label>
                                    <input type="button" value="+" class="qtyplus" name="childs">
                                    <input type="text" name="childs" id="childs" value="" class="qty form-control">
                                    <input type="button" value="-" class="qtyminus" name="childs">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <a href="#bookingModal" data-toggle="modal"> <input type="submit" class="btn_search" value="Search"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mouse_wp slide-animated four">
                <a href="#first_section" class="btn_scrollto">
                    <div class="mouse"></div>
                </a>
            </div>
            <!-- /mouse_wp -->
        </div>
    </div>
    <!-- /jarallax video background -->

    <div class="pattern_2">
        <div class="container margin_120_95" id="first_section">
            <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                <div class="col-lg-5">
                    <div class="parallax_wrapper">
                        <img src="img/photos/abt-1.webp" alt="" class="img-fluid rounded-img">
                        <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="img/photos/abt_2.webp" alt="" class="rounded-img"></span></div>
                    </div>

                </div>

                <div class="col-lg-5">
                    <div class="intro">
                        <div class="title">
                            <!-- <small>Amenities </small> -->
                            <h1>PnT Hotels & Resorts</h1>
                        </div>
                        <p style="color: #000;">Select the resort that best fits your preferences.</p>
                        <p style="color: #000;">Welcome to PnT Hotels, where unique meets serenity in the heart of India's most captivating
                            destinations like Sakleshpur, Ooty, Thekkady, and Goa.</p>
                        <p style="color: #000;">Immerse yourself in the unparalleled beauty and opulence that define our collection of exquisite
                            resorts. From the lush hills of Sakleshpur to the tranquil shores of Goa, each of our properties
                            offers a unique and unforgettable experience..</p>
                        <p style="color: #000;">Our dedicated team is here to help you create unforgettable memories tailored to your interests, whether you're planning a romantic getaway,
                            a family vacation, or a corporate retreat. At PnT Hotels, we believe every moment matters, and we are committed to making your stay seamless
                            and extraordinary.</p>

                        <div class="about-end">
                            <div class="left">
                                <p><em>Enjoy Your Stay...</em></p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- /Row -->
        </div>
    </div>


    <div class="pinned-image pinned-image--medium">
        <div class="pinned-image__container" id="section_video">
            <video loop="loop" muted="muted" id="video_home">
                <source src="video/video1.mp4" type="video/mp4">

            </video>
            <div class="pinned-image__container-overlay"></div>
        </div>
        <div class="pinned_over_content">
            <div class="title white">
                <small data-cue="slideInUp" data-delay="200">Unique Holiday Experience</small>
                <h2 data-cue="slideInUp" data-delay="300">Enjoy in a very<br> Immersive Relax</h2>
            </div>
        </div>
    </div>
    <!-- /Pattern  -->


    <!-- <div class="bg_white"> -->
    <div class="container add_bottom_60 add-top-60">
        <div class="title mb-3">
            <small data-cue="slideInUp">Unique experience</small>
            <h2 data-cue="slideInUp" data-delay="200">Our Hotels & Resorts</h2>
        </div>
        <div class="row justify-content-center home hotel_name" data-cues="slideInUp" data-delay="800">
            <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                <div class="item">
                    <a href="advaya_resort.php" class="box_contents" data-cue="slideInUp" data-delay="300">
                        <figure><img src="img/photos/adv-room-banner.webp" alt="" class="img-fluid"></figure>
                        <div class="wrapper">
                            <h2>Advaya Luxury Resort in Sakleshpur.</h2>
                            <p>Advaya Luxury Resort in Sakleshpur has nique glasshouse restaurant with 50 covers
                                is constructed on a waterbody which offers a memorable dining experience.</p>
                            <em>Resort Details</em>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="mookana_hotel.php" class="box_contents" data-cue="slideInUp" data-delay="400">
                        <figure><img src="img/photos/mookana.webp" alt="" class="img-fluid"></figure>
                        <div class="wrapper">
                            <h2>Mookanana Jungle Resort & Spa, Sakleshpur.</h2>
                            <p>Discover a unique getaway at Mookanana Jungle Resort and Spa, nestled in the heart of the
                                Mookanana in Sakleshpur, Karnataka.</p>
                            <em>Resort Details</em>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="club_oxygen_resort.php" class="box_contents" data-cue="slideInUp" data-delay="500">
                        <figure><img src="img/photos/welbeck_oxygen.png" alt="" class="img-fluid"></figure>
                        <div class="wrapper">
                            <h2>Welbeck Vintage by Oxygen Resorts.</h2>
                            <p>Welbeck Vintage by Oxygen Resorts in Ooty boasts a tranquil location in the 'Queen
                                of Hill Stations,' providing easy accessibility to the city while being away
                                from the crowds.</p>
                            <em>Resort Details</em>
                        </div>
                    </a>
                </div>
                <div class="item ">
                    <a href="Thekkady_resort.php" class="box_contents" data-cue="slideInUp" data-delay="500" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 480ms; animation-direction: normal; animation-fill-mode: both;">
                        <figure><img src="img/photos/thekkadi.webp" alt="" class="img-fluid"></figure>
                        <div class="wrapper">
                            <h2>Oxygen Resorts, Thekkady.</h2>
                            <p>Oxygen Resort, Thekkady, where you can experience the wonders of the Periyar National Park,
                                one of the best examples of nature's creativity in Thekkady. </p>
                            <em>Resort Details</em>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="Goa_resort.php" class="box_contents" data-cue="slideInUp" data-delay="500" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 480ms; animation-direction: normal; animation-fill-mode: both;">
                        <figure><img src="img/photos/goa.png" alt="" class="img-fluid"></figure>
                        <div class="wrapper">
                            <h2>Oxygen Resorts Morjim, Goa.</h2>
                            <p>Club Oxygen Resort, Morjim, Goa, offers a luxurious escape with contemporary accommodations and world-class amenities. </p>

                            <em>Resort Details</em>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--/row -->
    </div>
    <!--/container -->
    <!-- </div> -->


    <!-- <div class="bg_white"> -->
    <div class="container add-top-60" style="text-align:center;">
        <div class="title mb-3">
            <small data-cue="slideInUp">Offerings</small>
            <h2 data-cue="slideInUp" data-delay="200">Our Packages & Services</h2>
        </div>
    </div>
    <div class="package-section" data-cues="slideInUp" data-delay="200">

        <div class="container-fluid">
            <div class="package-row">
                <a href="packages.php#relaxation_retreats">
                    <div class="package-class">
                        <img src="img/photos/package-4.png" class="package-img" alt="package-img" alt="package-img" />
                    </div>
                </a>
                <a href="packages.php#water_sports">
                    <div class="package-class">
                        <img src="img/photos/package-5.png" class="package-img" alt="package-img" />
                    </div>
                </a>
                <a href="packages.php#hiking_trails">
                    <div class="package-class">
                        <img src="img/photos/package-6.png" class="package-img" alt="package-img" />
                    </div>
                </a>

                <a href="packages.php#spa_sanctuaries">
                    <div class="package-class">
                        <img src="img/photos/package-7.png" class="package-img" alt="package-img" />
                    </div>
                </a>
                <a href="packages.php#culinary_delight">
                    <div class="package-class">
                        <img src="img/photos/package-8.png" class="package-img" alt="package-img" />
                    </div>
                </a>
                <a href="packages.php#getaway_packages">
                    <div class="package-class">
                        <img src="img/photos/package1.png" class="package-img" alt="package-img" />
                    </div>
                </a>
                <a href="packages.php#event_management">
                    <div class="package-class">
                        <img src="img/photos/package2.png" class="package-img" alt="package-img" />
                    </div>
                </a>
                <a href="packages.php#wedding_planner">
                    <div class="package-class">
                        <img src="img/photos/package3.png" class="package-img" alt="package-img" />
                    </div>
                </a>


            </div>
        </div>
    </div>

    <div class="marquee">
        <div class="track">
            <div class="content">&nbsp;Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience Relax Enjoy Luxury Holiday Travel Discover Experience</div>
        </div>
    </div>
    <!-- </div> -->
    <!-- /marquee-->



    <!-- /bg_white -->

    <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
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
                                        <figure><img src="img/photos/Shruthi.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Shruthi Mh<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Peaceful stay amidst forest and beautiful nature. Great place to unwind from busy life. Friendly staff and good food. It was a great family holiday at Mookanna! Definitely looking forward to be back there during the right season."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/Santhosh.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Santhosh S<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Very excellent place to stay, nice ambience, food provided was very good and hygiene. Friendly staff, swimming pool is one of the finest. Must visit for cool and peaceful stay. Value for money."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/m-p-1.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Deepak S<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                        "We had a fantastic family vacation at PnT! The staff was incredibly friendly and attentive, making our stay truly enjoyable. It was the perfect getaway to relax and bond as a family. We’re already looking forward to our next visit!" </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/m-p-3.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Harini<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Our honeymoon at PnT was absolutely magical! The staff made us feel so special and attended to every detail. It was the perfect romantic getaway, allowing us to relax and enjoy each other's company. We created beautiful memories that we will cherish forever. We can’t wait to return for our anniversary!"
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>

                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/profile-3.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Ashwin<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                        "I had a peaceful and rejuvenating solo retreat at PnT Hotels & Resorts. The friendly staff made me feel welcomed and safe throughout my stay. It was the perfect destination to take a break, reflect, and recharge. I’ll definitely return for another solo escape soon!" </div>
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
    <!-- /parallax_section_1-->

    <div class="bg_white">
        <div class="container add_bottom_60 add-top-60 news_event_section">
            <div class="title mb-3">
                <small data-cue="slideInUp">PnT Hotels & Resorts</small>
                <h2 data-cue="slideInUp" data-delay="200">News & Events</h2>
            </div>
            <div class="row justify-content-center home news_event" id="news_event">
                <div class="item col-xl-4 col-lg-6">
                    <a href="#" class="box_contents" data-cue="slideInUp" data-delay="300" onclick="event.preventDefault();">
                        <figure><img src="img/photos/even-1.webp" alt="" class="img-fluid"><em>Party</em></figure>
                        <div class="wrapper">
                            <small>Celebration<span></span></small>
                            <h2>New Year Party</h2>
                            <p>PnT Group of Resorts invites you to a spectacular New Year's Eve celebration in an atmosphere of elegance
                                and luxury. Experience our warm hospitality and an evening filled with joy and cherished memories. Step
                                into the new year with positivity and excitement, making it a night to remember. Celebrate in style with
                                us and create unforgettable moments.</p>
                        </div>
                    </a>
                </div>
                <div class="item col-xl-4 col-lg-6">
                    <a href="#" class="box_contents" data-cue="slideInUp" data-delay="400" onclick="event.preventDefault();">
                        <figure><img src="img/photos/event-2.webp" alt="" class="img-fluid"><em>Guide</em></figure>
                        <div class="wrapper">
                            <small>Guide<span></span></small>
                            <h2>Ultimate Travel Guide</h2>
                            <p>PnT Group of Resorts invites you to explore ultimate travel destinations with unforgettable
                                vacation experiences for every adventurer. Whether it's a peaceful retreat, family getaway,
                                or romantic escape, our resorts offer the perfect setting. Immerse yourself in luxury, comfort,
                                and personalized service. Every stay with us becomes a treasured memory.</p>
                        </div>
                    </a>
                </div>
                <div class="item col-xl-4 col-lg-6">
                    <a href="#" class="box_contents" data-cue="slideInUp" data-delay="500" onclick="event.preventDefault();">
                        <figure><img src="img/photos/event-3.webp" alt="" class="img-fluid"><em>Travel</em></figure>
                        <div class="wrapper">
                            <small>Travel<span></span></small>
                            <h2>Top 15 Travel Moments</h2>
                            <p>PnT Group of Resorts presents the ultimate guide to unforgettable, uncover story-worthy travel experiences.
                                Our handpicked destinations offer adventure, relaxation, and discovery, ensuring something unique for every
                                traveler. Whether exploring hidden gems or indulging in luxury, each journey creates lasting memories
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pagination__wrapper">
                <ul class="pagination d-flex align-items-center justify-content-center">
                    <li><a href="#0" class="prev1 active"><i class="bi bi-arrow-left-short"></i></a></li>
                    <li><a href="#0" class="next1 active"><i class="bi bi-arrow-right-short"></i></a></li>
                </ul>
            </div>
            <!--/row -->
        </div>
        <!--/container -->
    </div>

    <div class="bg-white">
        <div class="container add_bottom_60 add-top-60">
            <div class="title mb-3" data-cues="slideInUp" data-delay="800">
                <small data-cue="slideInUp" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;text-align: center; ">Photos</small>
                <h2 data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;text-align: center;     margin-bottom: 35px;">Our Gallery</h2>
            </div>
            <div class="isotope-wrapper" data-cues="slideInUp" data-delay="500">
                <div class="row justify-content-center" id="gallery-container">
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-1.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-1.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-2.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-2.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-3.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-3.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-4.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-4.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-5.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-5.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-6.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-6.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-7.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-7.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/o_gal_1.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_1.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-9.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-9.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-10.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-10.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-11.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-11.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-12.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-12.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-13.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-13.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-14.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-14.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-15.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-15.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/gal-16.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/gal-16.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/m_gal_5.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_5.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
                        <div class="item-img" data-cue="slideInUp">
                            <img src="img/gallery/o_gal_3.webp" alt="" class="img-fluid" />
                            <div class="content">
                                <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/o_gal_3.webp"><i class="bi bi-arrows-angle-expand"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/row -->
            </div>
            <!--/isotope-wrapper -->

            <div class="pagination__wrapper">
                <ul class="pagination d-flex align-items-center justify-content-center">
                    <li><a href="#0" class="prev active"><i class="bi bi-arrow-left-short"></i></a></li>
                    <li><a href="#0" class="next active"><i class="bi bi-arrow-right-short"></i></a></li>
                </ul>
            </div>
            <!-- /pagination -->

        </div>
    </div>

    <div class="">
        <div class="container margin_120_95" id="booking_section">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Unique travel experience</small>
                            <h2>PnT Hospitality Services</h2>
                        </div>
                        <p class="text-justify">Explore our exceptional hospitality services, designed to provide you with a unique travel experience tailored to your needs.</p>
                        <p class="phone_element no_borders"><a href="tel://9916609006"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+91 9916609006</span></a></p>
                        <p class="text-start mt-3"><a href="#bookingModal" class="btn_1 outline" data-toggle="modal">Book Now</a></p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div data-cue="slideInUp" data-delay="200">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4814.030071528493!2d77.61597747588002!3d12.9928841144096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16d88b6fe4fd%3A0x7b0f6c94cdd3f859!2sPnT%20Hotels!5e1!3m2!1sen!2sin!4v1725610237029!5m2!1sen!2sin"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <!-- / row -->

                    </div>

                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
    </div>

    </script>


</main>


<?php include("footer.php")  ?>
<!-- /footer -->

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- /back to top -->
<script>
    document.getElementById('submitForm1').addEventListener('click', function() {
        // Get values from Form 1
        var name = document.getElementById('adults_booking').value;
        var name = document.getElementById('childs_booking').value;

        // Set the values in Form 2
        document.getElementById('adult').value = name;
        document.getElementById('child').value = name;
    });
</script>
<!-- COMMON SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="js/common_scripts.js"></script>
<script src="js/common_functions.js"></script>
<script src="js/datepicker_search.js"></script>
<script src="js/datepicker_inline.js"></script>
<!-- <script src="phpmailer/validate.js"></script> -->
<script>
    $(document).ready(function() {
        $('.packages').not('.first-package').hover(
            function() {
                // Shrink the first package when hovering over the second
                $('.first-package').removeClass('col-xl-6 col-lg-12 col-md-12 col-sm-12')
                    .addClass('col-xl-3 col-lg-6 col-md-6 col-sm-6');

                // Expand the hovered package
                $(this).removeClass('col-xl-3 col-lg-6 col-md-6 col-sm-6')
                    .addClass('col-xl-6 col-lg-12 col-md-12 col-sm-12');
            },
            function() {
                // Reset the first package to its original expanded size
                $('.first-package').removeClass('col-xl-3 col-lg-6 col-md-6 col-sm-6')
                    .addClass('col-xl-6 col-lg-12 col-md-12 col-sm-12');

                // Shrink the hovered package back to original size
                $(this).removeClass('col-xl-6 col-lg-12 col-md-12 col-sm-12')
                    .addClass('col-xl-3 col-lg-6 col-md-6 col-sm-6');
            }
        );
    });
</script>


<script>
    let itemsPerPage = 3; // Default for larger screens
    const galleryItems = document.querySelectorAll('#gallery-container .item');
    let currentPage = 1;
    let totalPages; // This will be calculated dynamically

    // Check screen size and adjust items per page for mobile
    function updateItemsPerPage() {
        if (window.innerWidth <= 700) {
            itemsPerPage = 1; // For mobile view, display one item per page
        } else if (window.innerWidth > 700 && window.innerWidth <= 1199) {
            itemsPerPage = 2;
        } else {
            itemsPerPage = 3; // For larger screens, display three items per page
        }
        totalPages = Math.ceil(galleryItems.length / itemsPerPage); // Recalculate total pages after changing itemsPerPage
    }

    function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;

        galleryItems.forEach((item, index) => {
            if (index >= start && index < end) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // "Prev" button functionality
    document.querySelector('.prev').addEventListener('click', function(e) {
        e.preventDefault();
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    // "Next" button functionality
    document.querySelector('.next').addEventListener('click', function(e) {
        e.preventDefault();
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    });

    // Update items per page on window resize and recalculate total pages
    window.addEventListener('resize', function() {
        updateItemsPerPage();
        showPage(currentPage);
    });

    // Initial setup
    updateItemsPerPage();
    showPage(currentPage);
</script>

<script>
    let eventsPerPage = 3; // Default for larger screens
    const eventItems = document.querySelectorAll('.news_event .item');
    let activePage = 1;
    let totalEventPages; // This will be calculated dynamically

    // Check screen size and adjust events per page for mobile
    function adjustEventsPerPage() {
        if (window.innerWidth <= 700) {
            eventsPerPage = 1; // For mobile view, display one item per page
        } else if (window.innerWidth > 700 && window.innerWidth <= 1199) {
            eventsPerPage = 2; // For medium screens, display two items per page
        } else {
            eventsPerPage = 3; // For larger screens, display three items per page
        }
        totalEventPages = Math.ceil(eventItems.length / eventsPerPage); // Recalculate total pages after changing eventsPerPage
    }

    function displayPage(pageNumber) {
        const startIndex = (pageNumber - 1) * eventsPerPage;
        const endIndex = startIndex + eventsPerPage;

        eventItems.forEach((event, index) => {
            if (index >= startIndex && index < endIndex) {
                event.style.display = 'block';
            } else {
                event.style.display = 'none';
            }
        });
    }

    // "Previous" button functionality
    document.querySelector('.prev1').addEventListener('click', function(e) {
        e.preventDefault();
        if (activePage > 1) {
            activePage--;
            displayPage(activePage);
        }
    });

    // "Next" button functionality
    document.querySelector('.next1').addEventListener('click', function(e) {
        e.preventDefault();
        if (activePage < totalEventPages) {
            activePage++;
            displayPage(activePage);
        }
    });

    // Update events per page on window resize and recalculate total pages
    window.addEventListener('resize', function() {
        adjustEventsPerPage();
        displayPage(activePage);
    });

    // Initial setup
    adjustEventsPerPage();
    displayPage(activePage);
</script>

</body>

<!-- Mirrored from www.ansonika.com/paradise/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 06:30:30 GMT -->

</html>