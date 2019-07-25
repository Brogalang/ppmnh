@extends('front.template.base')
@section('content')
<div style="height: 113px;"></div>

    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover" style="background-image: url(assets/front/images/IMG_1397.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Rectoverso <strong>Keakraban 2018</strong></h1>
            </div>
          </div>
        </div>
      </div>  
      <div class="site-blocks-cover" style="background-image: url(assets/front/images/IMG_7203.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>PPM <strong>NH GO</strong> Pekan Olahraga</h1>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-blocks-cover" style="background-image: url(assets/front/images/IMG_4945.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1><strong>PPM Awards</strong><br>Penghargaan Bagi Para Santri</br></h1>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <!-- <div class="site-blocks-cover" style="background-image: url();" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1><strong>PPM Awards</strong><br>Penghargaan Bagi Para Santri</br></h1>
            </div>
          </div>
        </div>
      </div> 
    </div> -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">PPM Nurul Hakim</h2>
            <p>Semua kegiatan yang ada di PPM Barokah, yuk daftar..!</p>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-12 text-center mb-3">
            <h3 class="h5"><span class="text-uppercase">&ldquo;Thy Kingdom Come&rdquo;</span> &mdash; <span class="small"><em>by</em> Pastor Edward Cane</span></h3>
          </div>
          <div class="col-12">
            <div class="player">
                <audio id="player2" preload="none" controls style="max-width: 100%">
                    <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                </audio>
            </div>
          </div>
        </div> -->

      </div>
    </div>

       <div class="site-block-half d-flex">
        <div class="image bg-image" style="background-image: url(assets/front/images/tumblr_oc4v1sxUPo1rbth4yo1_1280.jpg);"></div>
        <div class="text">
          <div class="section-heading text-left">
            <h2 class="mb-5">Our Home</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio autem dolorem vero asperiores itaque officia, assumenda sapiente iste, labore unde nulla facilis fugiat non iure nobis veritatis! Labore, corporis, velit.</p>
            <p><a href="{{route('our_3')}}" class="text-uppercase">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
          <div class="site-block-half d-flex">
       <div class="image bg-image order-2" style="background-image: url(assets/front/images/membaca-al-quran-menjauhkan-dari-maksiat.jpg);"></div>
        <div class="text">
          <div class="section-heading text-left">
            <h2 class="mb-5">Our Teacher</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio autem dolorem vero asperiores itaque officia, assumenda sapiente iste, labore unde nulla facilis fugiat non iure nobis veritatis! Labore, corporis, velit.</p>
            <p><a href="{{route('our_2')}}" class="text-uppercase">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
             <div class="site-block-half d-flex">
        <div class="image bg-image" style="background-image: url(assets/front/images/back-view-portrait-of-boys-men-best-friends-vector-15608960.jpg);"></div>
        <div class="text">
          <div class="section-heading text-left">
            <h2 class="mb-5">Our Family</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio autem dolorem vero asperiores itaque officia, assumenda sapiente iste, labore unde nulla facilis fugiat non iure nobis veritatis! Labore, corporis, velit.</p>
            <p><a href="{{route('our')}}"class="text-uppercase">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>

    
<!-- 
    <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Our Mission</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Testimonies</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-speaker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Listen To Our Sermons</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-avatar display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Join Our Church</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div> -->

    


    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Event Terbaru</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">
          

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Asrama Hadist Muslim (Amuse) 1</a></h2>
              <span class="mb-3 d-block post-date">July 28, 2019 &bullet; <a href="#"></a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Metamorph 2019</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2019 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">PPM NH GO</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
<!-- 
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div> -->
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Asrama Hadist Muslim (Amuse) 1</a></h2>
              <span class="mb-3 d-block post-date">July 28, 2019 &bullet; <a href="#"></a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div><!-- 
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Bible Study</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Church Building Accomplishments in January 2018</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <img src="images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div> -->
          


        </div>

        <div class="row">
          
        </div>
      </div>
    </div>
    

    <div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h2><span class="icon-room"></span> Location</h2>
              <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Service Times</h2>
              <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
              Fridays at Sunset - 7:30PM <br>
              Saturdays at 8:00AM - Sunset</p>
            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span> Get In Touch</h2>
            <p class="mb-0">Email: info@yoursite.com <br>
            Phone: (123) 3240-345-9348 </p>
          </div>
        </div>
      </div>
    </div>
@endsection