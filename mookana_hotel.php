<?php include("header.php"); ?>
<!-- /nav_panel -->
<style>
    @media (max-width: 600px) {
    .parallax_section_1 {
        min-height: 670px !important;
    }
}
    a:hover{
        text-decoration: none;
    }
    .bg_white .title h3 {
        margin-bottom: 10px;
        /* font-size: 1.5rem; */
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
        flex: 0 0 39.333333%;
        max-width: 38.333333%;
    }

    .activities_list {
        padding-left: 0px;
    }

    .activities_list2 {
        padding-left: 25px;
    }

    .pic h4 small {
        color: #e1c450;
    }

    .wel-box {
        background-color: #fff;
    }

    a:hover {
        text-decoration: none;
    }

    .transition3s {
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .single_wel_cont:hover .overlay,
    .single_wel_cont:focus .overlay {
        transform: scale(1, 1);
        -webkit-transform: scale(1, 1);
    }

    .wel-box .h_4 {
        padding: 0.6em 0 0em !important;
        font: 400 1.57em / 1em 'PT Serif', serif !important;
        font-style: italic !important;
    }

    .icon_position_table p {
        color: #fff;
    }

    .wel-box .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: #95aa4ff7;
        padding: 10px;
        transform: scale(0, 0);
        -webkit-transform: scale(0, 0);
        -moz-transform: scale(0, 0);
        -ms-transform: scale(0, 0);
        -o-transform: scale(0, 0);
    }

    a.box_contents h2 {
        font-size: 24px;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .placeslist li {
        color: #000;
        font-size: 14px;
    }

    .wrapper p {
        font-size: 14px;
        height: 34px;
    }
    .placeslist{
        height: 127px;
    }
    .placeslist-1{
        height: 230px;
    }

   
</style>
<main>

    <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img" src="img/photos/mookana_banner.webp" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <small class="slide-animated one">Move Towards Forest</small>
                <h1 class="slide-animated two"> Mookanana  Jungle Resort & Spa</h1>
            </div>
        </div>
    </div>
    <!-- /Background Img Parallax -->

    <div class="bg_white" id="first_section">
        <div class="container add_top_60 add_bottom_60">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="title">
                        <small>Moo - Move, Kanana - Towards Forest </small>
                        <h3>Mookanana Jungle Resort and Spa, Sakleshpur</h3>
                    </div>
                    <p style="text-align:justify;">Discover a unique getaway at Mookanana Jungle Resort and Spa, nestled in the heart of of with Western ghats. 
                        This stunning resort in Sakleshpur offers exclusive cottages inspired by tribal architecture, scenic view restaurants, a refreshing 
                         swimming pool, a serene lake, and exciting jungle & falls trekking adventures.</p>

                    <p style="text-align:justify;">Surrounded by the rich biodiversity of a wildlife center, this destination is enveloped by three 
                        majestic hills and picturesque Abbi waterfalls in just 2 Kilometers. The resort's innovative igloo architecture blends 
                        seamlessly with the natural surroundings, creating a serene atmosphere for guests.</p>

                    <p style="text-align:justify;">Located in the core of the Western Ghats, Mookanana Jungle Resort and Spa promises an unforgettable
                     experience where nature and comfort intertwine.</p>
                </div>
                
                <div class="col-lg-6 mookana_content">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="single_wel_cont home4v col-lg-6">
                            <a href="#amenties" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/photos/icon_3.png" alt="">
                                </div>
                                <h4>Conference &amp; Events</h4>
                                
                            </a>
                        </div>
                        <div class="single_wel_cont home4v col-lg-6">
                            <a href="#glass_Resto" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/photos/icon_1.png" alt="">
                                </div>
                                <h4>Scenic View Restaurants</h4>
                                
                            </a>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="single_wel_cont home4v col-lg-6">
                            <a href="#sports_activity" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/photos/icon_2.png" alt="">
                                </div>
                                <h4>Sports &amp; Activities</h4>
                                
                            </a>
                        </div>
                        <div class="single_wel_cont home4v col-lg-6">
                            <a href="#local_attraction" class="wel-box">
                                <div class="icon-box">
                                    <img src="img/photos/icon_3.png" alt="">
                                </div>
                                <h4>Local Attractions</h4>
                                
                            </a>
                        </div>
                    </div>


                </div>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    


    <div class="bg_white add_bottom_60 add_top_60">
            <div class="container-fluid p-lg-0">
                <div class="container">
                    <div class="title text-center mb-3">
                        <small data-cue="slideInUp">Photos</small>
                        <h2 data-cue="slideInUp" data-delay="200">Our Gallery</h2>
                    </div>
                </div>
                
                <div data-cues="zoomIn">
                    <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img gallery-carousel">
                        <div class="item">
                            <img src="img/gallery/m_gal_1.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_5.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_11.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_2.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_3.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_4.webp" alt="">
                        </div>
                        
                        <div class="item">
                            <img src="img/gallery/m_gal_6.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_7.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_8.webp" alt="">
                        </div>
                        
                        <div class="item">
                            <img src="img/gallery/m_gal_10.webp" alt="">
                        </div>
                        
                        <div class="item">
                            <img src="img/gallery/m_gal_12.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_13.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_14.webp" alt="">
                        </div>
                        <!-- <div class="item">
                            <img src="img/gallery/m_gal_15.png" alt="">
                        </div> -->
                        <div class="item">
                            <img src="img/gallery/m_gal_16.webp" alt="">
                        </div>
                        <div class="item">
                            <img src="img/gallery/m_gal_9.webp" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_1.png">FullScreen Gallery</a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_2.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_3.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_4.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_5.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_6.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_7.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_8.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_9.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_10.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_11.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_12.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_13.webp"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_14.webp"></a>
                    <!-- <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_15.png"></a> -->
                    <a data-fslightbox="gallery_1" data-type="image" href="img/gallery/m_gal_16.webp"></a>
                </div>
            </div>
        </div>


    <!-- /bg_white -->
    <div class="bg_white" id="local_attraction">
        <div class="container add_top_60 add_bottom_60 events">
            <div class="title mb-3">
                <small data-cue="slideInUp">Jungle Experience</small>
                <h2 data-cue="slideInUp" data-delay="200">Things to do in Sakleshpur</h2>
            </div>
            <div class="row home justify-content-center" id="gallery-container">
                <div class="item col-xl-4 col-lg-6">
                    <a href="things_do.php#trekkers" class="box_contents" data-cue="slideInUp" data-delay="300">
                        <figure><img src="img/photos/trekker.webp" alt="" class="img-fluid"></figure>
                        <div class="wrapper">
                            <h2>FOR TREKKERS</h2>
                            <p>There are many routes worth Trekking in and around Sakleshpur. </p>
                            <ul class="placeslist">
                                <li>Mookanana Resort Trekking</li>
                                <li>Hosahalli Beta</li>
                                <li>Mookanana Mane Abbi Falls</li>
                                <li>Betakumari Falls</li>
                                <li>Bisale Ghat [Beauty Spot] Kumaradhara River View at 180ft</li>
                            </ul>
                            <button class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" >Read More</button>
                        </div>
                    </a>
                </div>
                <div class="item col-xl-4 col-lg-6">
                    <a href="things_do.php#sightseeking" class="box_contents" data-cue="slideInUp" data-delay="400">
                        <figure><img src="img/photos/sideseeking.webp" alt="" class="img-fluid"></figure>
                        <div class="wrapper">

                            <h2>FOR SIGHTSEEING</h2>
                            <p>Beautiful Places in Sakleshpur are </p>
                            <ul class="placeslist">
                                <li>Mookana Mane Abbi Waterfalls</li>
                                <li>Kaginahare View Point[Mini Switzerland]</li>
                                <li>Kaginare Fort</li>
                                <li>Betakumari Waterfalls</li>
                                <li>Hosahalli View Point</li>

                            </ul>
                            <button class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" >Read More</button>
                        </div>
                    </a>
                </div>

                <div class="item col-xl-4 col-lg-6">
                    <a href="things_do.php#waterfalls" class="box_contents" data-cue="slideInUp" data-delay="500">
                        <figure><img src="img/photos/waterfall.png" alt="" class="img-fluid"></figure>
                        <div class="wrapper">
                            <h2>Waterfalls</h2>
                            <p>Some of the famous waterfalls in Sakleshpur are </p>
                            <ul class="placeslist">
                                <li>Mookana Mane Abbi Falls</li>
                                <li>Manjehalli Falls</li>
                                <li>Magajahalli Falls</li>
                                <li>Kumaradhara/Mallahalli Falls</li>
                                <li>Bettakumari falls</li>
                                <li>Hemavathi backwaters Yethinahole Falls</li>

                            </ul>
                            <button class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" >Read More</button>
                        </div>
                    </a>
                </div>
                
            </div>
           
            <div class="pagination__wrapper">
            <ul class="pagination d-flex align-items-center justify-content-center">
                    <li><a href="#0" class="prev active"><i class="bi bi-arrow-left-short"></i></a></li>
                    <li><a href="#0" class="next active"><i class="bi bi-arrow-right-short"></i></a></li>
                </ul>
            </div>

        </div>
        <!--/container -->
    </div>
    
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
                                        <figure><img src="img/photos/m-p-1.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Gopal<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                        Visited here with family and enjoyed the location away from hazzle dazzle of city life. Food was very good, swimming pool is very good and open 12 hrs, nearby locations like kagenari, edukameri and Abbi falls are worth visiting. Staffs are very good but no room service. Rooms are well furnished and clean.
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/m-p-2.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Smitha Sinha<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                    Mookanana Jungle Resorts & Spa is the best resort to have wonderful team outing in between the Western-Ghats. They have a friendly staff's who never hesitate to help you with your needs. lakeside homestay is never the less you love to spend some time here with the nature. One of the best place for corporate outing. I am very much interested to visit again soon with my family. The cost of the bookings is also affordable compared to other Resorts.
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/mahadevan.png" alt="" class="img-circle">
                                        </figure>
                                        <h4>Ragul<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                    "I had a refreshing solo getaway at the resort, enjoying its peaceful atmosphere away from city life. The staff were friendly, and while there was no room service, the clean, well-furnished room and delicious food made my stay truly enjoyable."                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/m-p-3.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Smitha Sinha<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                    "Our honeymoon at the resort was absolutely magical, offering a romantic escape from the everyday hustle. The serene surroundings, attentive staff, and beautifully furnished room made it a perfect getaway for creating unforgettable memories together."                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="img/photos/profile-3.webp" alt="" class="img-circle">
                                        </figure>
                                        <h4>Santhosh<small>★★★★★</small></h4>
                                    </div>
                                    <div class="comment">
                                    "Our stay at this resort was nothing short of extraordinary! The location, nestled in the heart of the jungle, provided a tranquil escape from our busy lives. We loved exploring the nearby hills and waterfalls, and the unique igloo architecture added a charming touch. Highly recommend for nature lovers!"                                    </div>
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
    <!-- /bg_white -->
    <div class="bg_white add_bottom_60 add_top_60">
        <div class="container">
            <div data-cue="slideInUp">
                <div class="title">
                    <small>Mookanana Jungle Resort & Spa</small>
                    <h2>Choose your Cottage</h2>
                </div>
                <div class="row" data-cues="slideInUp" data-delay="800">
                    <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6"> -->
                        
                        <div class="item">
                            <a href="mookana-booking.php#hill_view" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/hill_view_img.webp)"></div>
                                    <div class="info">
                                        <h3>Hill View Cottage</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="item">
                            <a href="mookana-booking.php#valley_view" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/valley_view.webp)"></div>
                                    <div class="info">
                                        <h3>Valley View Cottage</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        
                        <div class="item">
                            <a href="mookana-booking.php#private_pool" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/private_villa.png)"></div>
                                    <div class="info">
                                        <h3>Private Pool Villa</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="item">
                            <a href="mookana-booking.php#deluxe_room" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/photos/cozy-1.webp)"></div>
                                    <div class="info">
                                        <h3>Cozy Room</h3>
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


    <div class="container add_bottom_60 add_top_60 tab_section" data-cues="slideInUp" data-delay="300" id="sports_activity">
        <div class="row">
            <div class="col-md-4">
                <div class="img-holder">
                    <img src="img/photos/tab-img-m.webp" alt="" class="img-fluid tab-img">
                </div>
                
            </div>
            <div class="col-md-8">
                <div id="tsum-tabs">
                    <div class="title mb-3">
                        <h2 data-cue="slideInUp" data-delay="200">Best Resort Near Sakleshpur</h2>
                    </div>
                    <main data-cues="slideInUp" data-delay="500">

                        <input id="tab1" type="radio" name="tabs" checked>
                        <label for="tab1">Infinity Pool</label>

                        <input id="tab2" type="radio" name="tabs">
                        <label for="tab2">Indoor Activities</label>

                        <input id="tab3" type="radio" name="tabs">
                        <label for="tab3">Outdoor Activities</label>


                        <section id="content1">

                            <h5>Infinity Pool</h5>
                            <p>Dive into tranquility at Mookanana Jungle Resort & Spa Our sparkling swimming pool, surrounded by the beauty of 
                            coffee plantations and a natural lake offers the perfect retreat.

                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Infinity Swimming Pool</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Kids Pool</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Kayaking/Boating</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                    <!-- <li><i class="fa fa-arrow-circle-right"></i> Zip Line</li> -->
                                        <!-- <li><i class="fa fa-arrow-circle-right"></i> Pool Volleyball</li> -->
                                        <li><i class="fa fa-arrow-circle-right"></i> Pool Side Dining</li>
                                    </ul>
                                </div>
                            </div>
                            </p>
                        </section>

                        <section id="content2">

                            <h5>Indoor Activities</h5>
                            <p>Step inside Jungle and explore a world of fun and excitement with our indoor games. 
                            From brain-teasing puzzles to engaging social activities, there's something for everyone. Whether you're 
                            looking to challenge yourself or unwind with family and friends, our indoor games offer the perfect mix 
                            of entertainment and relaxation.</p>
                            <div class="row indoor_row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Chess</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Carrom Games</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Dart Board</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Foos Balls </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <!-- <li><i class="fa fa-arrow-circle-right"></i> Spin Tennis</li> -->
                                        <li><i class="fa fa-arrow-circle-right"></i> Billiards (Coming Soon)</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Table Tennis</li>
                                    </ul>
                                </div>
                            </div>


                        </section>

                        <section id="content3">

                            <h5>Outdoor Activities</h5>
                            <p>Discover the benefits of outdoor play at Mookanana Jungle Resort! From stimulating 
                            creativity with nature to building self-confidence through thrilling ropes courses, our outdoor activities 
                            offer endless opportunities for fun and personal growth. Watch as participants engage in imaginative play 
                            and challenge themselves with high ropes courses.</p>
                            <div class="row outdoor_row">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Archery</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Mini Cricket</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Volleyball</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Badminton</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <!-- <li><i class="fa fa-arrow-circle-right"></i> Zipline</li> -->
                                        <li><i class="fa fa-arrow-circle-right"></i> Dart Board</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> BonFire</li>
                                        <li><i class="fa fa-arrow-circle-right"></i> Nature Walk</li>
                                    </ul>
                                </div>
                                
                            </div>

                        </section>



                    </main>
                </div>
            </div>
        </div>

    </div>


    

    <div class="container-fluid mookana_section" id="glass_Resto">
        <div class="row">
            <div class="col-lg-6 left-side">
                <img src="img/photos/mookana-section.png" class="img-fluid" />
            </div>
            <div class="col-lg-6" style="background-image:url('img/photos/bg.jpg');" data-cues="slideInUp" data-delay="500">
                <div class="section_2">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="title">
                            <h2>Best Resort In Sakleshpur</h2>
                            <small>Mookanana Jungle Resort & Spa</small>

                        </div>
                        <p>Join us as we take you on a journey through the Jungle amenities at Mookanana Jungle Resort & Spa. From the tranquil
                            swimming pool nestled in the core of Western Ghats to the culinary delights at our stunning restaurant,
                            experience a day of relaxation and indulgence. Explore scenic nature trails that lead to stunning views and wildlife encounters.
                            At Mookanana Jungle Resort & Spa every moment is crafted for your relaxation and enjoyment.
                            Relax in our uniquely designed igloo-sized structures, blending unique with the natural beauty of the jungle.</p>

                        <div class="row know-bot">
                            <div class="col-lg-4">
                                <li>
                                    <div class="about-img"><img src="img/photos/icon1.png" alt="" class="img-responsive"></div>
                                    <div class="about-cont">
                                        <p>Dedicated<br>Team</p>
                                    </div>
                                </li>
                            </div>
                            <div class="col-lg-4">
                                <li>
                                    <div class="about-img"><img src="img/photos/icon2.png" alt="" class="img-responsive"></div>
                                    <div class="about-cont">
                                        <p>Best<br>Advisors</p>
                                    </div>
                                </li>
                            </div>
                            <div class="col-lg-4">
                                <li>
                                    <div class="about-img"><img src="img/photos/icon3.png" alt="" class="img-responsive"></div>
                                    <div class="about-cont">
                                        <p>24/7<br>Supports</p>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="amenties add_top_60 add_bottom_60" id="amenties" >
        <div class="container">
            <div class="title" data-cues="slideInUp" data-delay="200">
                <small>Mookanana Jungle Resort & Spa</small>
                <h2>Amenities</h2>
                <div class="row justify-content-between" data-cues="slideInUp" data-delay="500">
                    <div class="col-lg-3 col-md-6">
                        <div class="title">
                            <h3>General</h3>
                        </div>
                        <div class="list_ok">
                            <ul>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>In Room Dinning</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="300" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Non-smoking Rooms</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="400" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Family Rooms</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="400" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Air Conditioning</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 left-side">
                        <div class="title">
                            <h3>Media & Technology</h3>
                        </div>
                        <div class="list_ok">
                            <ul>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Telephone</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="300" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Cable channels</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="400" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Flat-screen TV</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="title">
                            <h3>Front Desk Services</h3>
                        </div>
                        <div class="list_ok">
                            <ul>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>24-Hour Front Desk</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="300" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Baggage Storage</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="300" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Concierge Service</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 left-side">
                        <div class="title">
                            <h3>Food & Drink</h3>
                        </div>
                        <div class="list_ok">
                            <ul>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Restaurant with Dining Menu</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="300" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Special Diet Meals (upon request)</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 ">
                        <div class="title">
                            <h3>Activites</h3>
                        </div>
                        <div class="list_display">
                            <div class="col-lg-7  activities_list">
                                <div class="list_ok">
                                    <ul>
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>Swimming Pool</p>
                                        </li>
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>Bonfire</p>
                                        </li>
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>Kayaking</p>
                                        </li>
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>Jungle Trekking</p>
                                        </li>
                                        
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-7 activities_list2">
                                <div class="list_ok">
                                    <ul>
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>Plantation Walk</p>
                                        </li>
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>Hanging Bridge</p>
                                        </li>
                                        
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>Fishing</p>
                                        </li>
                                        <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                            <p>TT, Chess, Carrom & etc</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="title">
                            <h3>Bathroom</h3>
                        </div>
                        <div class="list_ok">
                            <ul>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Toilet</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Bathroom</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 left-side">
                        <div class="title">
                            <h3>Business Facilities</h3>
                        </div>
                        <div class="list_ok">
                            <ul>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Business Center</p>
                                </li>
                                <li data-cue="slideInUp" data-delay="200" data-show="true" style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
                                    <p>Conference Hall</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


    <!-- /container -->
    <div class="check_availability  bg-white">
        <div class="container margin_120_95" id="booking_section">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Jungle Experience</small>
                            <h2>Mookanana Jungle Resort & Spa</h2>
                        </div>
                        <p class="text-justify">Discover a unique jungle experience at Mookanana Jungle Resort, where exceptional meets the beauty of nature in Sakleshpur.</p>
                        <p class="phone_element no_borders"><a href="https://maps.app.goo.gl/dErHNyxaeQQfpxxD7"><i class="bi bi-geo-alt"></i><span><em>Address</em>Hongadahalla Hettur Hobli, Sakaleshpur Taluk, Hassan Dist, Karnataka -573134</span></a></p>
                        <p class="phone_element no_borders"><a href="tel://9916609006"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+91 9916609006</span></a></p>
                        <p class="text-start mt-3"><a href="mookana-booking.php" class="btn_1 outline">Book Now</a></p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div data-cue="slideInUp" data-delay="200">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4818.105129931985!2d75.705424175878!3d12.780986919027077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba52600085db7ff%3A0xa10349f5b8e68d7!2sMookanana%20Resort%20%26%20Spa!5e1!3m2!1sen!2sin!4v1727354652289!5m2!1sen!2sin"
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
<script>
    let itemsPerPage = 3; 
    const galleryItems = document.querySelectorAll('#gallery-container .item');
    let currentPage = 1;
    let totalPages; 

    // Check screen size and adjust items per page for mobile and tablets
    function updateItemsPerPage() {
        if (window.innerWidth <= 700) { // Mobile view (<= 700px)
            itemsPerPage = 1; // Display one item per page for mobile
        } else if (window.innerWidth > 700 && window.innerWidth <= 1023) { // Tablet view (701px - 1024px)
            itemsPerPage = 1; // Display two items per page for tablet
        } else if(window.innerWidth > 1023 && window.innerWidth <= 1150) {
            itemsPerPage = 2;
        }
        else {
            itemsPerPage = 3; 
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





</body>

<!-- Mirrored from www.ansonika.com/paradise/room-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 06:31:01 GMT -->

</html>