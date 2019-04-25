<!DOCTYPE html>
<html lang="en">

    <?php include 'head.php';?>
    
<body class="full-layout">
<div class="content-wrapper">
  
    <?php include 'header.php';?>

<section id="cover" class="over">
    <div class="background">
        <div class="layer pulse" style="background-image: url(assets/images/background/main-cover3.jpg);">
        </div>    
    </div>
    <div class="isi">
        <img src="assets/images/depan.png" class="img-responsive tengah">
    </div>
    <a class="searchbychar hidden-sm hidden-xs" href="#" id="#about" data-target="about" data-wow-delay="1.6s">
        <div class="next-sections">
            <i class="scroll-down"></i>
        </div>
    </a>
    
</section>

<script type="text/javascript">
$(document).on('click','.searchbychar', function(event) {
    event.preventDefault();
    var target = "#" + this.getAttribute('data-target');
    $('html, body').animate({
        scrollTop: $(target).offset().top -25
    }, 1000);
})
</script>
<!--
<div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <ul>
            <li data-transition="slidevertical" data-fstransition="fade"> <img src="assets/images/background/main-cover.jpg" alt="" /> </li>
        </ul>
        <div class="tp-static-layers">
            <div class="tp-caption tp-static-layer large text-center" data-x="center" data-y="center" data-voffset="['-30','-30','-30','-30']" data-fontsize="['45','45','45','45']" data-start="500" data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on" data-startslide="0" data-endslide="3" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" style="z-index: 5;">Hello, we're Juno.</div>
            <div class="tp-caption tp-static-layer medium text-center" data-x="center" data-y="center" data-voffset="['30','30','30','30']" data-fontsize="['26','26','26','26']" data-start="1000" data-splitin="none" data-splitout="none" data-responsive="on" data-responsive_offset="on" data-startslide="0" data-endslide="3" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" style="z-index: 5;">Digital Photo Studio</div>
        </div>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
-->
  <!-- /.rev_slider -->
  
   
<section id="about">
    <div class="container">
        <div class="sec-jdl text-center">
            <h2>About the Women's Lounge</h2>
            <img src="assets/images/brush-line.png" class="img-responsive brush-line tengah">
        </div>
        <div class="col-md-12 text-center tentang">
            <h4>Sebuah persembahan dari detikcom yang disponsori oleh Ever-E, didedikasikan untuk para wanita Sehat, Muda, Aktif, dan Kreatif (SMART) yang dibingkai dengan rangkaian kegiatan menarik seperti talk show, band performance, games interaktif, dan berbagai keseruan lainnya dengan hadiah jutaan rupiah.</h4>
            <h4>Sabtu dan Minggu 16-17 Mei 2015 di Piazza GF Gandaria City Mall Jakarta.</h4>
        </div>
    </div>
    <div class="container" style="background-color: #0eb56f; border-radius: 40px; margin-top: 30px;">
        <div class="frame">
            <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h3>The Schedule</h3>
            </div>
            <div class="nav-center">
                <ul id="schedule-tabs" role="tablist" class="nav nav-pills">
                    <li class="active" role="presentation">
                        <a data-toggle="tab" role="tab" aria-controls="day1" href="#day1" aria-expanded="false">Hari Pertama <br> (11 januari 2017)</a>
                    </li>
                    <li role="presentation" class="">
                        <a data-toggle="tab" role="tab" aria-controls="day2" href="#day2" aria-expanded="true">Hari Kedua <br> (12 Januari 2017)</a>
                    </li>
                </ul>
            </div>
 
            <div class="tab-content">
                <div id="day1" class="tab-pane active" role="tabpanel">
                    <section class="timeline">
                        <div class="timeline-block">
                            <div data-wow-delay="0s" class="timeline-bullet wow zoomIn" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;">
                            </div>
 
                            <div class="timeline-content">
                                <h2 data-wow-delay="0.3s" class="wow flipInX hvr" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;"> Hot Music: Ryan Tedja</h2>
                                <span data-wow-delay="0.3s" class="date wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;">12:00-12.20</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div data-wow-delay="0s" class="timeline-bullet wow zoomIn" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;">
                            </div>
 
                            <div class="timeline-content">
                                <h2 data-wow-delay="0.3s" class="wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;"> Talkshow : Internet Sehat Bagi Anak</h2>
                                <p data-wow-delay="0.3s" class="wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;">by Bunga Citra Lestari</p>
                                <span data-wow-delay="0.3s" class="date wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;">13.30-14.20</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div data-wow-delay="0s" class="timeline-bullet wow zoomIn" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;">
                            </div>
 
                            <div class="timeline-content">
                                <h2 data-wow-delay="0.3s" class="wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;"> Hot Music : TULUS</h2>
                                
                                <span data-wow-delay="0.3s" class="date wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;">16:00 - 16:30 	</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div data-wow-delay="0s" class="timeline-bullet wow zoomIn" style="visibility: visible; animation-delay: 0s; animation-name: zoomIn;">
                            </div>
 
                            <div class="timeline-content">
                                <h2 data-wow-delay="0.3s" class="wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;"> Hot Music : Tata Janeta</h2>
                              
                                <span data-wow-delay="0.3s" class="date wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;">17:00 - 17:40</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div data-wow-delay="0s" class="timeline-bullet wow zoomIn" style="visibility: visible; animation-delay: 0s; animation-name: none;">
                            </div>
 
                            <div class="timeline-content">
                                <h2 data-wow-delay="0.3s" class="wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: none;"> Health Activity: Fit with Body Combat</h2>
                                <span data-wow-delay="0.3s" class="date wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: none;">18:30 - 19:30</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div data-wow-delay="0s" class="timeline-bullet wow zoomIn" style="visibility: visible; animation-delay: 0s; animation-name: none;">
                            </div>
 
                            <div class="timeline-content">
                                <h2 data-wow-delay="0.3s" class="wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: none;"> Hot Music : Yuka Tamada</h2>
                               
                                <span data-wow-delay="0.3s" class="date wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: none;">19:40 - 20:50</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div data-wow-delay="0s" class="timeline-bullet wow zoomIn" style="visibility: visible; animation-delay: 0s; animation-name: none;">
                            </div>
 
                            <div class="timeline-content">
                                <h2 data-wow-delay="0.3s" class="wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: none;"> Closing</h2>
                                <span data-wow-delay="0.3s" class="date wow flipInX" style="visibility: visible; animation-delay: 0.3s; animation-name: none;">20:50 - 21:00</span>
                            </div>
 
                        </div>
                    </section>
                </div>
                <div id="day2" class="tab-pane " role="tabpanel">
 
                    <section class="timeline">
                        <div class="timeline-block">
                            <div class="timeline-bullet">
                            </div>
 
                            <div class="timeline-content">
                                <h2>Topical/Industry Breakfasts</h2>
                                <span class="date">09:00 AM</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div class="timeline-bullet">
                            </div>
 
                            <div class="timeline-content">
                                <h2> Postcss: the future after Sass and Less</h2>
                                <p>by Andrey Sitnik</p>
                                <span class="date">10:00 AM</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div class="timeline-bullet">
                            </div>
 
                            <div class="timeline-content">
                                <h2> Stylish Slippy Maps: Creativity With Cartocss</h2>
                                <p>by Aurelia Moser </p>
                                <span class="date">12:00 PM</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div class="timeline-bullet">
                            </div>
 
                            <div class="timeline-content">
                                <h2>The Missing Slice</h2>
                                <p>by Lea Verou</p>
                                <span class="date">11:00 AM</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div class="timeline-bullet">
                            </div>
 
                            <div class="timeline-content">
                                <h2> Buffet Lunch </h2>
                                <span class="date">01:00 PM</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div class="timeline-bullet">
                            </div>
 
                            <div class="timeline-content">
                                <h2> Dragging Wordpress Core Css Into The 2000s</h2>
                                <p>by Michael Mifsud</p>
                                <span class="date">02:00 PM</span>
                            </div>
 
                        </div>
 
                        <div class="timeline-block">
                            <div class="timeline-bullet">
                            </div>
 
                            <div class="timeline-content">
                                <h2> Workshops &amp; Vote of Thanks</h2>
                                <span class="date">03:00 PM</span>
                            </div>
 
                        </div>
                    </section>
                </div>
            </div>
        </div> 
    </div>
</section>
    
<!--
<section id="event">
    <div class="container">
        <div class="sec-jdl text-center">
            <h2>Event</h2>
        </div>
        <div class="tiles">
            <div class="items row row-offset-0">
                <div class="item col-xs-12 col-sm-6 col-md-6">
                    <figure class="overlay"> 
                        <a href="#myModal1" data-toggle="modal" data-target="#myModal1">
                            <div class="text-overlay caption">
                                <div class="info">
                                    <h2 class="post-title">TALKSHOW</h2>
                                    <div class="meta"> 
                                        <span class="category">LET'S BE A MOMPRENEUR</span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/sample/event1.jpeg" alt="" />
                        </a>
                    </figure>
                </div>
                
                <div class="item col-xs-12 col-sm-6 col-md-6">
                    <figure class="overlay"> 
                        <a href="#myModal2" data-toggle="modal" data-target="#myModal2">
                            <div class="text-overlay caption">
                                <div class="info">
                                    <h2 class="post-title">TALKSHOW 2</h2>
                                    <div class="meta"> 
                                        <span class="category">LET'S BE A MOMPRENEUR</span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/sample/event2.jpeg" alt="" />
                        </a>
                    </figure>
                </div>
                
                <div class="item col-xs-12 col-sm-6 col-md-6">
                    <figure class="overlay"> 
                        <a href="#myModal3" data-toggle="modal" data-target="#myModal3">
                            <div class="text-overlay caption">
                                <div class="info">
                                    <h2 class="post-title">TALKSHOW 3</h2>
                                    <div class="meta"> 
                                        <span class="category">LET'S BE A MOMPRENEUR</span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/sample/event3.jpeg" alt="" />
                        </a>
                    </figure>
                </div>
                
                <div class="item col-xs-12 col-sm-6 col-md-6">
                    <figure class="overlay"> 
                        <a href="#myModal4" data-toggle="modal" data-target="#myModal4">
                            <div class="text-overlay caption">
                                <div class="info">
                                    <h2 class="post-title">TALKSHOW 4</h2>
                                    <div class="meta"> 
                                        <span class="category">LET'S BE A MOMPRENEUR</span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/sample/event4.jpeg" alt="" />
                        </a>
                    </figure>
                </div>
                
                <div class="item col-xs-12 col-sm-6 col-md-6">
                    <figure class="overlay"> 
                        <a href="#myModal5" data-toggle="modal" data-target="#myModal5">
                            <div class="text-overlay caption">
                                <div class="info">
                                    <h2 class="post-title">TALKSHOW 5</h2>
                                    <div class="meta"> 
                                        <span class="category">LET'S BE A MOMPRENEUR</span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/art/pm5.jpg" alt="" />
                        </a>
                    </figure>
                </div>
                
                <div class="item col-xs-12 col-sm-6 col-md-6">
                    <figure class="overlay"> 
                        <a href="#myModal6" data-toggle="modal" data-target="#myModal6">
                            <div class="text-overlay caption">
                                <div class="info">
                                    <h2 class="post-title">TALKSHOW 6</h2>
                                    <div class="meta"> 
                                        <span class="category">LET'S BE A MOMPRENEUR</span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/art/pm6.jpg" alt="" />
                        </a>
                    </figure>
                </div>
                
                
                

          
          
        </div>
        /.row  
      </div>
        
        <div class="modal inverse-wrapper modal-transparent move-from-top" id="myModal1" tabindex="-1" role="dialog"> <a href="#" class="btn close-button" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <h2 class="post-title text-center">TALKSHOW</h2>
                    <h4 class="post-title text-center">LET'S BE A MOMPRENEUR</h4>
                    <p class="text-center">Menjadi seorang Ibu sekaligus entrepreneur sukses bukanlah mimpi belaka. Ketahui cara merealisasikan ide-ide bisnis dan berbagi pengalaman dengan berbagai narasumber inspiratif dalam acara talkshow bersama Meisya Siregar (Founder Rendang Natulang), Ike Dahlia (Founder Indonesia Mompreneur), Diajeng Lestari (Founder Hijup.com).</p>
                    
                    <div class="event-btn text-center">
                        <a href="#">Daftar</a> 
                    </div>
                    <div class="divide30"></div>
                    <ul class="basic-gallery text-center">
                        <li><img src="assets/images/art/pm1-full1.jpg" alt="" /></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
</section>
-->

<section id="event">
            <div class="container">

                <div class="sec-jdl text-center">
                    <h2>Our Event</h2>
                    <img src="assets/images/brush-line.png" class="img-responsive brush-line tengah">
                </div>

                <div class="cyevent-area">
                    <div class="col-md-6">
                        <div class="event-list">
                            <div class="event-image">
                                <img src="assets/images/sample/event1.jpeg" class="img-responsive">
                            </div>
                            <div class="info-event-area text-center">
                                <h2>Talkshow </h2>
                                <h4>Ayo Ajarkan Anak Hidup Sehat</h4>
                                <p>Menjadi seorang Ibu sekaligus entrepreneur sukses bukanlah mimpi belaka. Ketahui cara merealisasikan ide-ide bisnis dan berbagi pengalaman dengan berbagai narasumber inspiratif dalam acara talkshow bersama Meisya Siregar (Founder Rendang Natulang), Ike Dahlia (Founder Indonesia Mompreneur), Diajeng Lestari (Founder Hijup.com). </p>
                                <div class="clearfix"></div>
                                <div class="cyevent-btn text-center">
                                    <a href="register.php">Daftar</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="event-list">
                            <div class="event-image">
                                <img src="assets/images/sample/event2.jpeg" class="img-responsive">
                            </div>
                            <div class="info-event-area text-center">
                                <h2>Cooking Competition</h2>
                                <h4>Selera Nusantara</h4>
                                <p>Kompetisi masak yang akan memperebutkan total hadiah 10 juta rupiah untuk tiga orang pemenang dan berbagai hadiah menarik lainnya. Juri : Odillia Wineke (Editor in Chief detikfood.com) & Chef Yuda Bustara (Profesional Chef) </p>
                                <div class="cyevent-btn text-center">
                                    <a href="register.php">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="event-list">
                            <div class="event-image">
                                <img src="assets/images/sample/event3.jpeg" class="img-responsive">
                            </div>
                            <div class="info-event-area text-center">
                                <h2>Healthy Activity</h2>
                                <h4>Fit With Body Combat</h4>
                                <p>detikHealth berkerja sama dengan Celebrity Fitness mengajak Anda untuk bergabung dalam Body Combat sebagai salah satu kegiatan yang membuktikan bahwa wanita SMART adalah wanita yang sehat. </p>
                                <div class="cyevent-btn text-center">
                                    <a href="register.php">Daftar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="event-list">
                            <div class="event-image">
                                <img src="assets/images/sample/event4.jpeg" class="img-responsive">
                            </div>
                            <div class="info-event-area text-center">
                                <h2>Hijab Talk</h2>
                                <h4>Menjaga Hati Menjaga Body</h4>
                                <p>Bincang seru dengan para hijabers inspiratif, mulai dari selebriti hingga desainer tentang pengalaman mereka dalam mencapai kesuksesan dan berbagi tips & trik dalam sesi tanya jawab dengan para audiens. Dihadiri oleh: Zaskia Mecca, Risty Tagor, Jenahara. </p>
                                
                                <div class="cyevent-btn text-center">
                                    <a href="register.php">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>

<section id="talent">
    <div class="container-cepe">
        <div class="col-md-12">
            <div class="sec-jdl text-center">
                <h2 style="color:#fff!important;">Guest Star</h2>
                <img src="assets/images/brush-linew.png" class="img-responsive brush-line tengah">
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 np">
            <div class="talent-image">
                <img src="assets/images/sample/talent6.jpg" class="img-responsive">
                <span class="talent-overlay">
                    <h2>Zaskia Mecca</h2>
                </span>
            </div>

        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 np">
            <div class="talent-image">
                <img src="assets/images/sample/talent1.jpg" class="img-responsive">
                <span class="talent-overlay">
                    <h2>Bunga Citra Lestari</h2>
                </span>
            </div>
            

        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 np">
            <div class="talent-image">
                <img src="assets/images/sample/talent2.jpg" class="img-responsive">
                <span class="talent-overlay">
                    <h2>Raline Shah</h2>
                </span>
            </div>

        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 np">
            <div class="talent-image">
                <img src="assets/images/sample/talent3.jpg" class="img-responsive">
                <span class="talent-overlay">
                    <h2>Dona Agnesia</h2>
                </span>
            </div>

        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 np">
            <div class="talent-image">
                <img src="assets/images/sample/talent4.jpg" class="img-responsive">
                <span class="talent-overlay">
                    <h2>Titi kamal</h2>
                </span>
            </div>

        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 np">
            <div class="talent-image">
                <img src="assets/images/sample/talent5.jpg" class="img-responsive">
                <span class="talent-overlay">
                    <h2>Zaskia Sungkar</h2>
                </span>
            </div>

        </div>
        
    </div>
</section>  
    
<!--
<section id="talent">
    <div class="container">
        <div class="col-md-12">
            <div class="sec-jdl text-center">
                <h2 style="color:#fff!important;">Talent</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image1.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Bunga Citra Lestari</h3>
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image2.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Maia Estianty</h3>
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image3.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Dona Agnesia</h3>
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image4.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Titi Kamal</h3>
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image1.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Bunga Citra Lestari</h3>
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image2.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Maia Estianty</h3>
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image3.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Dona Agnesia</h3>
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="talent-image">
                <img src="assets/images/event/image4.jpeg" class="img-responsive">
                <span class="talent-overlay">
                    <h3>Titi Kamal</h3>
                </span>
            </div>
        </div>
    </div>
    
</section>
-->
    
<section id="tenant">
    <div class="container">
        <div class="col-md-12">
            <div class="sec-jdl text-center">
                <h2>Tenant</h2>
                <img src="assets/images/brush-line.png" class="img-responsive brush-line tengah">
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-4">
                <div class="box"> 
                    <img src="assets/images/tenant/1.png" class="img-responsive">
                    <h4>Aggys</h4>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio dapibus facilisis in egestas eget. </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box"> 
                    <img src="assets/images/tenant/2.png" class="img-responsive">
                    <h4>Deep n Dips</h4>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio dapibus facilisis in egestas eget. </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box"> 
                    <img src="assets/images/tenant/3.png" class="img-responsive">
                    <h4>Healtea</h4>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio dapibus facilisis in egestas eget. </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box"> 
                    <img src="assets/images/tenant/4.png" class="img-responsive">
                    <h4>Brownis Gandum</h4>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio dapibus facilisis in egestas eget. </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box"> 
                    <img src="assets/images/tenant/5.png" class="img-responsive">
                    <h4>Namirah</h4>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio dapibus facilisis in egestas eget. </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box"> 
                    <img src="assets/images/tenant/6.png" class="img-responsive">
                    <h4>Deep n Dips</h4>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio dapibus facilisis in egestas eget. </p>
                </div>
            </div>
            
        </div>
    </div>
</section>
    
    
<section id="news">
        <div class="light-wrapper">
            <div class="container">
                <div class="col-md-12">
                    <div class="sec-jdl text-center">
                        <h2>News Update</h2>
                        <img src="assets/images/brush-line.png" class="img-responsive brush-line tengah">
                    </div>
                </div>
                <div class="news">
                    <div class="post col-sm-6 col-md-4">
                        <figure>
                            <img src="assets/images/sample/image1.jpeg" alt="">
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                               <a href="#">Siapa Saja Pengisi Jazz Gunung Agustus 2017 Mendatang?</a>
                            </h3>
                            <div class="meta">
                                <span class="date">Selasa, 25 Apr 2017 12:40 WIB</span>
                            </div>
                            <p>Jazz Gunung Bromo sudah dijadwalkan bakal kembali hadir tahun ini. Mengalun pada Agustus 2017, siapa saja pengisinya?<a class="readmore" href="#"> more <i class="panah-more ion-arrow-right-c"></i></a></p>
                        </div>
                    </div>
                    
                    <div class="post col-sm-6 col-md-4">
                        <figure>
                            <img src="assets/images/sample/image2.jpeg" alt="">
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                               <a href="#">'The Fate of the Furious' Masih Betah di Puncak Box Office</a> 
                            </h3>
                            <div class="meta">
                                <span class="date">Selasa, 25 Apr 2017 12:40 WIB</span>
                            </div>
                            <p>Peringkat tiga besar box office pekan ini rupanya belum berubah dari minggu lalu. 'The Fate of the Furious' masih<a class="readmore" href="#"> more <i class="panah-more ion-arrow-right-c"></i></a></p>
                        </div>
                    </div>
                    
                    <div class="post col-sm-6 col-md-4">
                        <figure>
                            <img src="assets/images/sample/image3.jpeg" alt="">
                        </figure>
                        <div class="post-content">
                            <h3 class="post-title">
                               <a href="#">Ini Inspirasi Desa Cantik Dalam Film Beauty and the Beast</a>
                            </h3>
                            <div class="meta">
                                <span class="date">Selasa, 25 Apr 2017 12:40 WIB</span>
                            </div>
                            <p>Traveler sudah menonton film Beauty and The Beast? Bagian awal film dengan latar pedesaan ternyata itu asli.<a class="readmore" href="#"> more <i class="panah-more ion-arrow-right-c"></i></a></p>
                        </div>
                    </div>
  
                    <div class="col-md-12 text-center mt40">
                        <div class="wd-btn1">
                            <a href="indeks.php">More News</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
  
</div>
<!-- /.content-wrapper -->

    <?php include 'footer.php';?> 
    
</body>
</html>