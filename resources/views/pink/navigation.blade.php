@if($menu)
 <div class="menu classic">
    <ul id="nav" class="menu">
        @include(env('THEME').'.customMenuItems',['items'=>$menu->roots()])
    </ul>
 </div>
@endif
  <!-- <div class="menu classic">
                            <ul id="nav" class="menu">
                                <li>
                                    <a href="#">SLIDERS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ asset(env('THEME')) }}/slider-layerslider.html">LayerSlider</a></li>
                                        <li><a href="{{ asset(env('THEME')) }}/slider-flexslider.html">FlexSlider</a></li>
                                        <li><a href="{{ asset(env('THEME')) }}/slider-elastic-slider.html">Elastic</a></li>
                                        <li><a href="{{ asset(env('THEME')) }}/slider-thumbnails.html">Thumbnails</a></li>
                                        <li><a href="{{ asset(env('THEME')) }}/slider-cycle.html">Cycle</a></li>
                                        <li><a href="{{ asset(env('THEME')) }}/slider-static-header.html">Static header</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">CORPORATE</a>
                                    <ul class="sub-menu">
                                        <li><a href="corporate-about.html">About</a></li>
                                        <li><a href="landing-page.html">Landing page</a></li>
                                        <li><a href="corporate-videogallery.html">Videogallery</a></li>
                                        <li><a href="corporate-testimonials.html">Testimonials</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">PORTFOLIO</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-filterable.html">Filterable</a></li>
                                        <li><a href="portfolio-three-columns.html">Three columns</a></li>
                                        <li><a href="project.html">Full description</a></li>
                                        <li><a href="portfolio-big-image.html">Big Image</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-big-image.html">Big image</a></li>
                                        <li><a href="blog-small-image.html">Small image</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">FEATURES</a>
                                    <ul class="sub-menu">
                                        <li><a href="features-right-sidebar.html">Right sidebar</a></li>
                                        <li><a href="features-left-sidebar.html">Left sidebar</a></li>
                                        <li><a href="features-full-width.html">Full width</a></li>
                                        <li><a href="error-404.html">404 error</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">SHORTCODES</a>
                                    <ul class="sub-menu">
                                        <li><a href="shortcodes-typography.html">Typography</a></li>
                                        <li><a href="shortcodes-icon-section.html">Icon section</a></li>
                                        <li><a href="shortcodes-alert-box-buttons.html">Alert box &#038; Buttons</a></li>
                                        <li><a href="shortcodes-tables-box-prices.html">Tables &#038; Box prices</a></li>
                                        <li><a href="shortcodes-media-widgets.html">Media &#038; Widgets</a></li>
                                        <li><a href="shortcodes-mix-various.html">Mix &#038; Various</a></li>
                                    </ul>
                                </li>
                                
                                <li class="remove-under-1024">
                                    <a href="http://themeforest.net/item/pink-rio-responsive-multipurpose-theme/3091259">PURCHASE PINK RIO</a>
                                    <ul class="sub-menu">
                                        <li><a href="http://www.yourinspirationweb.com/tf/support/forum/viewforum.php?f=27">Support forum</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div> -->