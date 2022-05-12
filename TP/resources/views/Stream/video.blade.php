@extends('base')
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Header -->
   @section('header')
       <!-- Slider Start -->
   <section class="banner-container iq-rtl-direction">
      <div class="movie-banner tvshows-slider">
         <div class="swiper-banner-container "  data-swiper="banner-detail-slider">
            <div class="swiper-wrapper">
               <div class="swiper-slide show-video-banner-1 swiper-bg">
                  <div class="shows-content h-100">
                     <div class="row align-items-center h-100">
                        <div class="col-lg-7 col-md-12">
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                              data-delay-in="0.6">Jumbo Queen</h1>
                           <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                              style="opacity: 1;">
                              <div class="d-flex align-items-center movie-banner-time">
                                 <span class="badge badge-secondary p-2"><i class="fa fa-eye"></i> 875 View</span>
                                 <span class="ml-3">3hr : 10mins</span>
                                 <span class="mx-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                 <span class="trending-year">Mar 2021</span>
                              </div>
                              <p class="movie-banner-text" data-animation-in="fadeInUp" data-delay-in="1.2">
                                 Jumbo also known as Jumbo the Elephant and Jumbo the Circus Elephant, was a 19th-century male
                                 African bush elephant born in Sudan. Jumbo was exported to Jardin des Plantes, a zoo in
                                 Paris, and then transferred in 1865..
                              </p>
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
               <div class="swiper-slide show-video-banner-2 swiper-bg">
                  <div class="shows-content h-100">
                     <div class="row align-items-center h-100">
                        <div class="col-lg-7 col-md-12">
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                              data-delay-in="0.6">Shadow Warrior</h1>
                           <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                              style="opacity: 1;">
                              <div class="d-flex align-items-center movie-banner-time">
                                 <span class="badge badge-secondary p-2">521 Views </span>
                                 <span class="ml-3">1hr : 50mins</span>
                                 <span class="mx-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                 <span class="trending-year">March 2017</span>
                              </div>
                              <p class="movie-banner-text" data-animation-in="fadeInUp" data-delay-in="1.2">
                                 A shadow is a dark (real image) area where light from a light source is blocked by an opaque
                                 object. It occupies all of the three-dimensional volume behind an object with light in front
                                 of it.
                              </p>
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
               <div class="swiper-slide show-video-banner-3 swiper-bg">
                  <div class="shows-content h-100">
                     <div class="row align-items-center h-100">
                        <div class="col-lg-7 col-md-12">
                           <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                              data-delay-in="0.6">Worst Game</h1>
                           <div class="flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                              style="opacity: 1;">
                              <div class="d-flex align-items-center movie-banner-time">
                                 <span class="badge badge-secondary p-2">390 Views</span>
                                 <span class="ml-3">1hr : 44mins</span>
                                 <span class="mx-3"><i class="ri-checkbox-blank-circle-fill"></i></span>
                                 <span class="trending-year">Dec 2018</span>
                              </div>
                              <p class="movie-banner-text" data-animation-in="fadeInUp" data-delay-in="1.2">
                                 With the final Twilight film coming out this month, we found it necessary to list off the
                                 worst vampire movies of all time. Grae Drake, Senior Editor of Rotten Tomatoes, counts down
                                 the worst vampire movies ever made on The Best Movie Lists.
                              </p>
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
   <!-- Slider End -->
   @endsection
   
   <!-- Header End -->
   @section('content')
       <!-- MainContent -->
   <div class="main-content">
      <section id="iq-favorites" class="iq-rtl-direction">
         <div class="container-fluid ">
            <div class="row">
               <div class="col-sm-12 overflow-hidden">
                  <div class="iq-ltr-direction d-flex align-items-center justify-content-between">
                     <h4 class="main-title ">Popular Videos</h4>
                     <a href="view-all-video.html" class="text-primary iq-view-all">View All</a>
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
                                 <img src="images/video/01.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover"><i
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
                                 <img src="images/video/02.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                 <img src="images/video/03.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                 <img src="images/video/04.jpg" class="img-fluid" loading="lazy" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                 <img src="images/video/05.jpg" class="img-fluid" loading="lazy" alt="">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                 <img src="images/video/10.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Shadow Warrior</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 50mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover"><i
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
                                 <img src="images/video/06.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Narnia</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">3hr : 10mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                 <img src="images/video/07.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">X-Men</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                 <img src="images/video/08.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Logan</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1hr : 22mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                 <img src="images/video/09.jpg" class="img-fluid" alt="" loading="lazy">
                              </div>
                              <div class="block-description">
                                 <h6 class="iq-title"><a href="video-detail.html">Black Queen</a></h6>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    <span class="text-white">1h 45mins</span>
                                 </div>
                                 <div class="hover-buttons">
                                    <a href="video-detail.html" role="button" class="btn btn-hover">
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
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </section>
      <section id="iq-favorites" class="iq-rtl-direction">
         <div class="container-fluid ">
            <div class="row">
               <div class="col-sm-12 overflow-hidden">
                  <div class="iq-ltr-direction d-flex align-items-center justify-content-between">
                     <h4 class="main-title">Specials & Latest Videos</h4>
                     <a href="view-all-video.html" class="text-primary">View All</a>
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
                                    <img src="images/video/09.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Shadow Warrior</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 50mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover"><i
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
                                    <img src="images/video/02.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Narnia</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">3hr : 10mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/03.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">X-Men</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/04.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Logan</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 22mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/08.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Black Queen</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1h 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/01.jpg" class="img-fluid" loading="lazy" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Shadow Warrior</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 50mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover"><i
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
                                    <img src="images/video/02.jpg" class="img-fluid" loading="lazy" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Narnia</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">3hr : 10mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/03.jpg" class="img-fluid" loading="lazy" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">X-Men</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/04.jpg" class="img-fluid" loading="lazy" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Logan</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 22mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/08.jpg" class="img-fluid" loading="lazy" alt="">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Black Queen</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1h 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </section>
      <section id="iq-favorites" class="iq-rtl-direction">
         <div class="container-fluid ">
            <div class="row">
               <div class="col-sm-12 overflow-hidden">
                  <div class="iq-ltr-direction d-flex align-items-center justify-content-between">
                     <h4 class="main-title">Videos Recommended For You</h4>
                     <a href="view-all-video.html" class="text-primary">View All</a>
                  </div>
               </div>
            </div>
            <!-- Swiper -->
            <div class="favourite-slider">
                  <div class="swiper pt-2 pt-md-4 pt-lg-4 iq-rtl-direction" data-swiper="common-slider">
                        <ul class="swiper-wrapper m-0 p-0">
                           <li class="swiper-slide slide-item">
                              <div class="block-images position-relative ">
                                 <div class="img-box">
                                    <img src="images/video/01.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Shadow Warrior</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 50mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover"><i
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
                                    <img src="images/video/02.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Narnia</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">3hr : 10mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/03.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">X-Men</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/04.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Logan</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 22mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/08.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Black Queen</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1h 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/01.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Shadow Warrior</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 50mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover"><i
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
                                    <img src="images/video/02.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Narnia</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">3hr : 10mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/03.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">X-Men</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/04.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Logan</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1hr : 22mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
                                    <img src="images/video/08.jpg" class="img-fluid" alt="" loading="lazy">
                                 </div>
                                 <div class="block-description">
                                    <h6 class="iq-title"><a href="video-detail.html">Black Queen</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                       <span class="text-white">1h 45mins</span>
                                    </div>
                                    <div class="hover-buttons">
                                       <a href="video-detail.html" role="button" class="btn btn-hover">
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
   <div class="rtl-box">
      <button type="button" class="btn btn-light rtl-btn">
         <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20 20" fill="white">
            <path fill-rule="evenodd"
               d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
               clip-rule="evenodd" />
         </svg>
      </button>
      <div class="rtl-panel">
         <ul class="modes">
            <li class="dir-btn" data-mode="rtl" data-active="false" data-value="ltr"><a href="#">LTR</a></li>
            <li class="dir-btn" data-mode="rtl" data-active="true" data-value="rtl"><a href="#">RTL</a></li>
         </ul>
      </div>
   </div>
   @endsection
   
   
   <!-- Footer Start -->
   