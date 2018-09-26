@extends('main.master')
@section('content')
 

   <body class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-105">
      <div class="rh_wrap">
         <div id="rh_progress"></div>
         <!-- /#rh_progress -->
         <!-- /.rh_header -->
         <!-- Slider -->
         <section id="rh_slider__home" class="rh_slider rh_slider_mod clearfix">
		 
		 
            <div class="flexslider loading">
               <ul class="slides">
                

                     @foreach($slider as $slider_val)


				<li>
                     <a class="slide" href="#"
                        style="background: url('{{ URL::to('/').'/images/'.$slider_val->single_photo}}') 50% 50% no-repeat;
                        background-size: cover;">
                     </a>
                 </li> 
				   
				     @endforeach
				   
				   
                </ul>
            </div>
			
			
			
            <div class="rh_flexslider__nav_main">
               <a href="#" class="flex-prev rh_flexslider__prev">
                  <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="71" height="71" viewBox="0 0 71 71">
                     <defs>
                        <style>
                           .cls-1 {
                           fill: #c6141f;
                           filter: url(#filter);
                           }
                           .cls-2 {
                           fill: #fff;
                           fill-rule: evenodd;
                           filter: url(#filter-2);
                           }
                        </style>
                        <filter id="filter" x="0" y="0" width="71" height="71" filterUnits="userSpaceOnUse">
                           <feOffset result="offset" dy="4" in="SourceAlpha"/>
                           <feGaussianBlur result="blur" stdDeviation="3.464"/>
                           <feFlood result="flood" flood-opacity="0.06"/>
                           <feComposite result="composite" operator="in" in2="blur"/>
                           <feBlend result="blend" in="SourceGraphic"/>
                        </filter>
                        <filter id="filter-2" x="828" y="5055" width="25" height="21" filterUnits="userSpaceOnUse">
                           <feOffset result="offset" dy="2" in="SourceAlpha"/>
                           <feGaussianBlur result="blur" stdDeviation="2"/>
                           <feFlood result="flood" flood-opacity="0.1"/>
                           <feComposite result="composite" operator="in" in2="blur"/>
                           <feBlend result="blend" in="SourceGraphic"/>
                        </filter>
                     </defs>
                     <circle data-name="Ellipse 7 copy 2" class="cls-1" cx="35" cy="31" r="24"/>
                     <path data-name="Ellipse 6 copy 24" class="cls-2" d="M832.5,5064.55l7.5,0.78V5070l9-7-9-7v4.67l-7.5.77A1.472,1.472,0,0,0,831,5063,1.5,1.5,0,0,0,832.5,5064.55Z" transform="translate(-805 -5032)"/>
                  </svg>
               </a>
               <!-- /.rh_flexslider__prev -->
               <a href="#" class="flex-next rh_flexslider__next">
                  <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="71" height="71" viewBox="0 0 71 71">
                     <defs>
                        <style>
                           .cls-1 {
                           fill: #c6141f;
                           filter: url(#filter);
                           }
                           .cls-2 {
                           fill: #fff;
                           fill-rule: evenodd;
                           filter: url(#filter-2);
                           }
                        </style>
                        <filter id="filter" x="0" y="0" width="71" height="71" filterUnits="userSpaceOnUse">
                           <feOffset result="offset" dy="4" in="SourceAlpha"/>
                           <feGaussianBlur result="blur" stdDeviation="3.464"/>
                           <feFlood result="flood" flood-opacity="0.06"/>
                           <feComposite result="composite" operator="in" in2="blur"/>
                           <feBlend result="blend" in="SourceGraphic"/>
                        </filter>
                        <filter id="filter-2" x="828" y="5055" width="25" height="21" filterUnits="userSpaceOnUse">
                           <feOffset result="offset" dy="2" in="SourceAlpha"/>
                           <feGaussianBlur result="blur" stdDeviation="2"/>
                           <feFlood result="flood" flood-opacity="0.1"/>
                           <feComposite result="composite" operator="in" in2="blur"/>
                           <feBlend result="blend" in="SourceGraphic"/>
                        </filter>
                     </defs>
                     <circle data-name="Ellipse 7 copy 2" class="cls-1" cx="35" cy="31" r="24"/>
                     <path data-name="Ellipse 6 copy 24" class="cls-2" d="M832.5,5064.55l7.5,0.78V5070l9-7-9-7v4.67l-7.5.77A1.472,1.472,0,0,0,831,5063,1.5,1.5,0,0,0,832.5,5064.55Z" transform="translate(-805 -5032)"/>
                  </svg>
               </a>
               <!-- /.rh_flexslider__next -->
            </div>
         </section>
         <!-- End Slider -->
         <section class="rh_section rh_section--props_padding diagonal-border">
            <div class="rh_section__head">
               <h2 class="rh_section__title">  مشروعات حالية </h2>
               <!-- /.rh_section__title -->
                
               <!-- /.rh_section__desc -->
            </div>
            <!-- /.rh_section__head -->
            <div class="rh_section__properties">
			
			
			       @foreach($Products_26 as $Products_val)
               <article class="rh_prop_card post-45 property type-property status-publish has-post-thumbnail hentry property-feature-2-stories property-feature-home-theater property-feature-lawn property-feature-marble-floors property-type-single-family property-city-miami property-status-for-sale">
                  <div class="rh_prop_card__wrap">
                     <div class="rh_label rh_label__property">
                        <div class="rh_label__wrap">مشروعات حالية <span></span>
                        </div>
                     </div>
                     <!-- /.rh_label -->
                     <figure class="rh_prop_card__thumbnail">
                        <a href="#">
                        <img width="680" height="510" src="{{ URL::to('/').'/images/'.$Products_val->single_photo}}" 
						class="attachment-modern-property-child-slider size-modern-property-child-slider wp-post-image" 
						alt="" srcset=" {{ URL::to('/').'/images/'.$Products_val->single_photo}} 680w,  {{ URL::to('/').'/images/'.$Products_val->single_photo}} 
						400w" sizes="(max-width: 680px) 100vw, 680px" />			</a>
                        <div class="rh_overlay"></div>
                        <div class="rh_overlay__contents rh_overlay__fadeIn-bottom">
                           <a href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">تفاصيل  </a>
                        </div>
                        <!-- /.rh_overlay__contents -->
                        
                        <!-- /.rh_prop_card__btns -->
                     </figure>
                     <!-- /.rh_prop_card__thumbnail -->
                     <div class="rh_prop_card__details">
                        <h3>
                           <a href="#"> {{$Products_val->name}}     </a>
                        </h3>
                        <p class="rh_prop_card__excerpt">  {{$Products_val->body}}   	</p>
                        <!-- /.rh_prop_card__excerpt -->
                        <div class="rh_prop_card__meta_wrap">
                           <div class="rh_prop_card__meta">
                              <h4>غرف </h4>
                              <div>
                                 <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                    </defs>
                                    <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"/>
                                 </svg>
                                 <!-- <img src="php" alt="" /> -->
                                 <span class="figure">{{$Products_val->id}}   </span>
                              </div>
                           </div>
                           <!-- /.rh_prop_card__meta -->
                           <div class="rh_prop_card__meta">
                              <h4>
                                 حمام						
                              </h4>
                              <div>
                                 <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                    <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"/>
                                 </svg>
                                 <!-- <img src="php" alt="" /> -->
                                 <span class="figure">{{$Products_val->id}} </span>
                              </div>
                           </div>
                           <!-- /.rh_prop_card__meta -->
                           <div class="rh_prop_card__meta">
                              <h4>
                                 المساحه						
                              </h4>
                              <div>
                                 <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g>
                                       <circle cx="2" cy="2" r="2"/>
                                    </g>
                                    <g>
                                       <circle cx="2" cy="22" r="2"/>
                                    </g>
                                    <g>
                                       <circle cx="22" cy="2" r="2"/>
                                    </g>
                                    <rect x="1" y="1" width="2" height="22"/>
                                    <rect x="1" y="1" width="22" height="2"/>
                                    <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
                                       c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"/>
                                 </svg>
                                 <!-- <img src="php" alt="" /> -->
                                 <span class="figure"> {{$Products_val->id}}  </span>
                                 <span class="label">
                              متر							</span>
                              </div>
                           </div>
                           <!-- /.rh_prop_card__meta -->
                        </div>
                        <!-- /.rh_prop_card__meta_wrap -->
                        <div class="rh_prop_card__priceLabel">
                            
                           <!-- /.rh_prop_card__type -->
                           <p class="rh_prop_card__price">      <a style="color: #86151c;" href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">تفاصيل  </a> </p>
                           <!-- /.rh_prop_card__price -->
                        </div>
                        <!-- /.rh_prop_card__priceLabel -->
                     </div>
                     <!-- /.rh_prop_card__details -->
                  </div>
                  <!-- /.rh_prop_card__wrap -->
               </article>
          
		  	     @endforeach
		  
              </div>
            <!-- /.rh_section__properties -->
         </section>
         <!-- /.rh_section -->
         <section class="rh_section rh_section--featured diagonal-border ">
            <div class="rh_section__head">
                
               <!-- /.rh_section__subtitle -->
               <h2 class="rh_section__title">
مشاريع سابقة               </h2>
               <!-- /.rh_section__title -->
               
               <!-- /.rh_section__desc -->
            </div>
            <!-- /.rh_section__head -->
            <div id="rh_section__featured_slider" class="rh_section__featured clearfix">
               <div class="flexslider loading">
                  <ul class="slides">
				  
				  			       @foreach($Products_27 as $Products_val)

				  
                     <li class="rh_prop_card post-45 property type-property status-publish has-post-thumbnail hentry property-feature-2-stories property-feature-home-theater property-feature-lawn property-feature-marble-floors property-type-single-family property-city-miami property-status-for-sale">
                        <figure class="rh_prop_card__thumbnail">
                           <a href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">
                           <img width="818" height="417" src="{{ URL::to('/').'/images/'.$Products_val->single_photo}}" 
						   class="attachment-property-detail-video-image size-property-detail-video-image wp-post-image" alt="" />		</a>
                        </figure>
                        <!-- /.rh_prop_card__thumbnail -->
                        <div class="rh_prop_card__details rh_prop_card__featured">
                           <div class="rh_label rh_label__featured">
                              <div class="rh_label__wrap">مشاريع سابقة   <span></span>
                              </div>
                           </div>
                           <!-- /.rh_label -->
                           <h3>
                              <a href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">  {{$Products_val->name}}    </a>
                           </h3>
                           <p class="rh_prop_card__excerpt">   {{$Products_val->body}}  </p>
                           <!-- /.rh_prop_card__excerpt -->
                           <div class="rh_prop_card__meta_wrap">
                              <div class="rh_prop_card__meta">
                                 <h4>
                                    غرف					
                                 </h4>
                                 <div>
                                    <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <defs>
                                       </defs>
                                       <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"/>
                                    </svg>
                                    <!-- <img src="php" alt="" /> -->
                                    <span class="figure">  {{$Products_val->id}} </span>
                                 </div>
                              </div>
                              <!-- /.rh_prop_card__meta -->
                              <div class="rh_prop_card__meta">
                                 <h4>
                                    حمام					
                                 </h4>
                                 <div>
                                    <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                       <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"/>
                                    </svg>
                                    <!-- <img src="php" alt="" /> -->
                                    <span class="figure"> {{$Products_val->id}} </span>
                                 </div>
                              </div>
                              <!-- /.rh_prop_card__meta -->
                              <div class="rh_prop_card__meta">
                                 <h4>
                                    مساحه 					
                                 </h4>
                                 <div>
                                    <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                       width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                       <g>
                                          <circle cx="2" cy="2" r="2"/>
                                       </g>
                                       <g>
                                          <circle cx="2" cy="22" r="2"/>
                                       </g>
                                       <g>
                                          <circle cx="22" cy="2" r="2"/>
                                       </g>
                                       <rect x="1" y="1" width="2" height="22"/>
                                       <rect x="1" y="1" width="22" height="2"/>
                                       <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
                                          c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"/>
                                    </svg>
                                    <!-- <img src="php" alt="" /> -->
                                    <span class="figure"> {{$Products_val->id}} </span>
                                    <span class="label">
                         متر						</span>
                                 </div>
                              </div>
                              <!-- /.rh_prop_card__meta -->
                           </div>
                           <!-- /.rh_prop_card__meta_wrap -->
                           <div class="rh_prop_card__priceLabel">
                              
                              <!-- /.rh_prop_card__type -->
                              <p class="rh_prop_card__price">    <a style="color: #86151c;" href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">تفاصيل  </a> 		
                              </p>
                              <!-- /.rh_prop_card__price -->
                           </div>
                           <!-- /.rh_prop_card__priceLabel -->
                        </div>
                        <!-- /.rh_prop_card__details -->
                     </li>
					 
					 
					 
					 	     @endforeach
					 
					 
					 
                     <!-- /.rh_prop_card -->
                      <!-- /.rh_prop_card -->
                   </ul>
                  <!-- /.slides -->
               </div>
               <!-- /.flexslider loading -->
               <div class="rh_flexslider__nav">
                  <a href="#" class="flex-prev rh_flexslider__prev">
                     <svg height="40" viewBox="0 0 48 48" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.83 32.67l-9.17-9.17 9.17-9.17-2.83-2.83-12 12 12 12z"/>
                        <path d="M0-.5h48v48h-48z" fill="none"/>
                     </svg>
                  </a>
                  <!-- /.rh_flexslider__prev -->
                  <a href="#" class="flex-next rh_flexslider__next">
                     <svg height="40" viewBox="0 0 48 48" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.17 32.92l9.17-9.17-9.17-9.17 2.83-2.83 12 12-12 12z"/>
                        <path d="M0-.25h48v48h-48z" fill="none"/>
                     </svg>
                  </a>
                  <!-- /.rh_flexslider__next -->
               </div>
               <!-- /.rh_flexslider__nav -->
            </div>
            <!-- /.rh_section__properties -->
         </section>
         <!-- /.rh_section -->
          <section class="rh_section rh_section__cta rh_cta--featured diagonal-border">
            <div class="rh_cta">
            </div>
            <!-- /.rh_cta -->
            <div class="rh_cta__wrap">
               
               <!-- /.rh_cta__title -->
               <h3 class="rh_cta__quote" style="    background: #00000045;"> {{ site_settings("quote")  }}   </h3>
               <!-- /.rh_cta__quote -->
               <div class="rh_cta__btns">
                 
                  <a href="#" class="rh_btn rh_btn--greyBG"> تواصل معنا </a>
               </div>
               <!-- /.rh_cta__btns -->
            </div>
            <!-- /.rh_cta__wrap -->
         </section>
         <!-- /.rh_section rh_section__cta -->
         <section class="rh_section rh_section__agents diagonal-border">
           
          
 
 
  <div class="rh_section__head">
               <h2 class="rh_section__title"> مشروعات تحت الانشاء					</h2><br><br>
               <!-- /.rh_section__title -->
                
               <!-- /.rh_section__desc -->
            </div>
            <!-- /.rh_section__head -->
            <div class="rh_section__properties">
         
   @foreach($Products_32 as $Products_val)
               <article class="rh_prop_card post-45 property type-property status-publish has-post-thumbnail hentry property-feature-2-stories property-feature-home-theater property-feature-lawn property-feature-marble-floors property-type-single-family property-city-miami property-status-for-sale">
                  <div class="rh_prop_card__wrap">
                     <div class="rh_label rh_label__property">
                        <div class="rh_label__wrap">  تحت الانشاء  <span></span>
                        </div>
                     </div>
                     <!-- /.rh_label -->
                     <figure class="rh_prop_card__thumbnail">
                        <a href="#">
                        <img width="680" height="510" src="{{ URL::to('/').'/images/'.$Products_val->single_photo}}" 
						class="attachment-modern-property-child-slider size-modern-property-child-slider wp-post-image" 
						alt="" srcset=" {{ URL::to('/').'/images/'.$Products_val->single_photo}} 680w,  {{ URL::to('/').'/images/'.$Products_val->single_photo}} 
						400w" sizes="(max-width: 680px) 100vw, 680px" />			</a>
                        <div class="rh_overlay"></div>
                        <div class="rh_overlay__contents rh_overlay__fadeIn-bottom">
                           <a href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">تفاصيل  </a>
                        </div>
                        <!-- /.rh_overlay__contents -->
                        
                        <!-- /.rh_prop_card__btns -->
                     </figure>
                     <!-- /.rh_prop_card__thumbnail -->
                     <div class="rh_prop_card__details">
                        <h3>
                           <a href="#"> {{$Products_val->name}}     </a>
                        </h3>
                        <p class="rh_prop_card__excerpt">  {{$Products_val->body}}   	</p>
                        <!-- /.rh_prop_card__excerpt -->
                        <div class="rh_prop_card__meta_wrap">
                           <div class="rh_prop_card__meta">
                              <h4>غرف </h4>
                              <div>
                                 <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <defs>
                                    </defs>
                                    <path d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z" transform="translate(-1108 -593)"/>
                                 </svg>
                                 <!-- <img src="php" alt="" /> -->
                                 <span class="figure">{{$Products_val->id}}   </span>
                              </div>
                           </div>
                           <!-- /.rh_prop_card__meta -->
                           <div class="rh_prop_card__meta">
                              <h4>
                                 حمام						
                              </h4>
                              <div>
                                 <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
                                    <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"/>
                                 </svg>
                                 <!-- <img src="php" alt="" /> -->
                                 <span class="figure">{{$Products_val->id}} </span>
                              </div>
                           </div>
                           <!-- /.rh_prop_card__meta -->
                           <div class="rh_prop_card__meta">
                              <h4>
                                 المساحه						
                              </h4>
                              <div>
                                 <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <g>
                                       <circle cx="2" cy="2" r="2"/>
                                    </g>
                                    <g>
                                       <circle cx="2" cy="22" r="2"/>
                                    </g>
                                    <g>
                                       <circle cx="22" cy="2" r="2"/>
                                    </g>
                                    <rect x="1" y="1" width="2" height="22"/>
                                    <rect x="1" y="1" width="22" height="2"/>
                                    <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
                                       c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"/>
                                 </svg>
                                 <!-- <img src="php" alt="" /> -->
                                 <span class="figure"> {{$Products_val->id}}  </span>
                                 <span class="label">
                              متر							</span>
                              </div>
                           </div>
                           <!-- /.rh_prop_card__meta -->
                        </div>
                        <!-- /.rh_prop_card__meta_wrap -->
                        <div class="rh_prop_card__priceLabel">
                            
                           <!-- /.rh_prop_card__type -->
                           <p class="rh_prop_card__price">      <a style="color: #86151c;" href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">تفاصيل  </a> </p>
                           <!-- /.rh_prop_card__price -->
                        </div>
                        <!-- /.rh_prop_card__priceLabel -->
                     </div>
                     <!-- /.rh_prop_card__details -->
                  </div>
                  <!-- /.rh_prop_card__wrap -->
               </article>
          
		  	     @endforeach
		  

		 </div>
            <!-- /.rh_section__properties -->
        
		
		</section>
         <!-- /.rh_section rh_section__agents -->
       
         <section class="rh_section rh_section__partners diagonal-border">
            <div class="rh_section__head">
            
               <!-- /.rh_section__subtitle -->
               <h2 class="rh_section__title">  العملاء </h2>
               <!-- /.rh_section__title -->
               
               <!-- /.rh_section__desc -->
            </div>
            <!-- /.rh_section__head -->
            <div class="rh_section__partners_wrap">
			
			
			
					   @foreach($clients as $clients_val)

			
			
               <div class="rh_partner post-118 partners type-partners status-publish has-post-thumbnail hentry">
                 
                  <img width="137" height="117" src="{{ URL::to('/').'/images/'.$clients_val->single_photo}}"
				  class="attachment-partners-logo size-partners-logo wp-post-image" alt="Codecanyon" title="Codecanyon" />					 
               </div>
			   
			      @endforeach
			   
			   
			   
                   </div>
            <!-- /.rh_section__partners_wrap -->
         </section>
         <!-- /.rh_section rh_section__partners -->
         <section class="rh_section rh_section__cta rh_cta--contact">
            <div class="rh_cta">
               <div class="rh_cta__overlay"></div>
               <!-- /.rh_cta__overlay -->
            </div>
            <!-- /.rh_cta -->
            <div class="rh_cta__wrap">
               
               <!-- /.rh_cta__title -->
               <h3 class="rh_cta__quote">     {{ site_settings("quote")  }} </h3>
               <!-- /.rh_cta__quote -->
               <div class="rh_cta__btns">
                  <a href="#" class="rh_btn rh_btn--blackBG">
               تواصل معنا 				</a>
                  <a href="#" class="rh_btn rh_btn--whiteBG">من نحن  	</a>
               </div>
               <!-- /.rh_cta__btns -->
            </div>
            <!-- /.rh_cta__wrap -->
         </section>
      </div>


@endsection