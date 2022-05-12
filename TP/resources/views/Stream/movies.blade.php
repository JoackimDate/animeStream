@extends('base')


      @section('header')
      <!-- Slider Start -->
      <section class="banner-container">
         <div class="movie-banner tvshows-slider">
            <div  class="swiper-banner-container iq-rtl-direction" data-swiper="banner-detail-slider">
               <div class="swiper-wrapper">
                  <div class="swiper-slide movie-banner-1 swiper-bg">
                     <div class="shows-content h-100">
                        <div class="row align-items-center h-100">
                           <div class="col-lg-7 col-md-12">
                              <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                 data-delay-in="0.6">The Dinosaur</h1>
                              <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                                 style="opacity: 1;">
                                 <div class="slider-ratting d-flex align-items-center ">
                                    <ul
                                       class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                       <li>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                       </li>
                                       <li>
                                          <i class="fa fa-star-half" aria-hidden="true"></i>
                                       </li>
                                    </ul>
                                    <span class="text-white ml-3">4.4(lmdb)</span>
                                 </div>
                                 <div class="d-flex align-items-center movie-banner-time">
                                    <span class="badge badge-secondary p-2">PG</span>
                                    <span class="mx-2 mx-md-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                    <span class="trending-time"> 1hr : 44mins</span>
                                    <span class="mx-2 mx-md-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                    <span class="trending-year">Feb 2018</span>
                                 </div>
                                 <p class="movie-banner-text" data-animation-in="fadeInUp" data-delay-in="1.2">Dinosaurs are a
                                    diverse group of reptiles of the clade Dinosauria. They first appeared during the
                                    Triassic period, between 243 and 233.23 million years ago, although the exact origin
                                    and timing of the evolution of dinosaurs is the subject of active research.</p>
                              </div>
                              <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp"
                                 data-delay-in="1.2">
                                 <a href="movie-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                                       aria-hidden="true"></i>Play Now</a>
                              </div>
                           </div>
                           <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                              <a href="video/trailer.mp4" class="video-open playbtn" tabindex="0">
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px"
                                    viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-miterlimit="10"
                                       points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                    </circle>
                                 </svg>
                                 <span class="w-trailor text-uppercase">Watch Trailer</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide movie-banner-2 swiper-bg">
                     <div class="shows-content h-100">
                        <div class="row align-items-center h-100" >
                           <div class=" col-lg-8 col-md-12">
                              <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                 data-delay-in="0.6">The Great Emperor</h1>
                                 <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                                 <div class="slider-ratting d-flex align-items-center ">
                                       <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                          <li>
                                             <i class="fa fa-star-half" aria-hidden="true"></i>
                                          </li>
                                       </ul>
                                       <span class="text-white ml-3">3.5(lmdb)</span>
                                    </div>
                                    <div class="d-flex align-items-center movie-banner-time">
                                       <span class="badge badge-secondary p-2">G</span>
                                       <span class="mx-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                       <span class="trending-time">
                                          2hr : 42mins</span>
                                       <span class="mx-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                       <span class="trending-year">Nov 2017</span>
                                    </div>
                                    <p class="movie-banner-text" data-animation-in="fadeInUp" data-delay-in="1.2">The most brutal emperor in the history of world.He was the founder of the most contiguous empire of the world i.e. the Mongol empire.He made an army by himself by uniting some nomadic tribes and trained them.
                                    </p>
                              </div>
                              <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                 <a href="movie-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                                    aria-hidden="true"></i>Play Now</a>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12 trailor-video iq-slider d-none d-lg-block">
                              <a href="video/trailer.mp4" class="video-open playbtn">
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                    enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                    <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-miterlimit="10"
                                       points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                                    <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                                 </svg>
                                 <span class="w-trailor">Watch Trailer</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide movie-banner-3 swiper-bg">
                     <div class="shows-content h-100">
                        <div class="row align-items-center h-100" >
                           <div class="col-lg-7 col-md-12">
                              <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                 data-delay-in="0.6">Jumbo Queen</h1>
                                 <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                                 <div class="slider-ratting d-flex align-items-center">
                                       <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                          <li>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                          </li>
                                          <li>
                                             <i class="fa fa-star-half" aria-hidden="true"></i>
                                          </li>
                                       </ul>
                                       <span class="text-white ml-3">4.9(lmdb)</span>
                                    </div>
                                    <div class="d-flex align-items-center movie-banner-time">
                                       <span class="badge badge-secondary p-2">PG-13</span>
                                       <span class="mx-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                       <span class="trending-time">2hr : 12mins</span>
                                       <span class="mx-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                       <span class="ml-4 trending-year">Dec 2018</span>
                                    </div>
                                    <p class="movie-banner-text" data-animation-in="fadeInUp" data-delay-in="1.2">Jumbo also known as Jumbo the Elephant and Jumbo the Circus Elephant, was a 19th-century male African bush elephant born in Sudan. Jumbo was exported to Jardin des Plantes, a zoo in Paris, and then transferred in 1865 to London Zoo in England. Despite public protest, Jumbo was sold to P. T. Barnum, who took him to the United States for exhibition in March 1882.</p>
                              </div>
                              <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                 <a href="movie-details.html" class="btn btn-hover iq-button"><i class="fa fa-play mr-2"
                                    aria-hidden="true"></i>Play Now</a>
                              </div>
                           </div>
                           <div class="col-lg-5 col-md-12 trailor-video iq-slider d-none d-lg-block">
                              <a href="video/trailer.mp4" class="video-open playbtn">
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                                    enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                    <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-miterlimit="10"
                                       points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                                    <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                                       stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                                 </svg>
                                 <span class="w-trailor">Watch Trailer</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-banner-button-next ">
                  <i class="ri-arrow-left-s-line arrow-icon"></i>
               </div>
               <div class="swiper-banner-button-prev">
                  <i class="ri-arrow-right-s-line arrow-icon"></i>
               </div> 
            </div>
         </div>
      </section>
      @endsection
      @section('content')
      <!-- MainContent -->
      <div class="main-content">
         <section id="iq-favorites" class="iq-rtl-direction">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Popular Movies
                        </h4>
                        <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                     <ul class="swiper-wrapper m-0 p-0">
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/05.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/10.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover"><i
                                          class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide  slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/06.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/07.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">25+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/01.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover"><i
                                          class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item ">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/02.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/03.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">25+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/04.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/08.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/09.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                     </ul> 
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>                  
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-upcoming-movie" class="iq-rtl-direction">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Specials & Latest Movies
                        </h4>
                        <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div  class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                     <ul class="swiper-wrapper m-0 p-0">
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/01.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover"><i
                                          class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/02.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/09.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/04.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/05.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/03.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">25+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item ">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/06.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/07.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">25+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/08.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/10.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover"><i
                                          class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                                 
                              </div>
                           </div>
                        </li>                      
                     </ul>  
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>                   
                  </div>
               </div>
            </div>
         </section>
         <section id="iq-suggestede" class="iq-rtl-direction">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Movies Recommended For You
                        </h4>
                        <a href="view-all.html" class="text-primary iq-view-all">View All</a>
                     </div>
                  </div>
               </div>
               <!-- Swiper -->
               <div class="favourite-slider">
                  <div  class="swiper pt-2 pt-md-4 pt-lg-4  iq-rtl-direction" data-swiper="common-slider">
                     <ul class="swiper-wrapper m-0 p-0">
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/03.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">25+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/04.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/05.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/01.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover"><i
                                          class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item ">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/02.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/10.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover"><i
                                          class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">2+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item ">
                           <div class="block-images position-relative ">
                              <div class="img-box">
                                 <img src="images/video/06.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/07.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">25+</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/08.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li class="swiper-slide slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img src="images/video/09.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="movie-details.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="movie-details.html" role="button" class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Play Now
                                    </a>
                                 </div>
                              </div>
                              <div class="block-social-info">
                                 <ul class="list-inline p-0 m-0 music-play-lists">
                                    <li class="share">
                                       <span><i class="ri-share-fill"></i></span>
                                       <div class="share-box">
                                          <div class="d-flex align-items-center">
                                             <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-facebook-fill"></i></a>
                                             <a href="https://twitter.com/intent/tweet?text=Currentlyreading"
                                                target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i
                                                   class="ri-twitter-fill"></i></a>
                                             <a href="#"
                                                data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/"
                                                class="share-ico iq-copy-link" tabindex="0"><i
                                                   class="ri-links-fill"></i></a>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <span><i class="ri-heart-fill"></i></span>
                                       <span class="count-box">0</span>
                                    </li>
                                    <li><span><i class="ri-add-line"></i></span></li>

                                 </ul>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      @endsection
      