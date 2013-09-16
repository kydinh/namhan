<div class="body_wrap homepage">

<!-- header top bar -->
<div class="header_top">
    <div class="container">

        <?php if ($logo): ?>
            <div class="logo">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            </div>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
            <?php if ($site_slogan): ?>
                <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
                    <?php print $site_slogan; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- topmenu -->
        <?php if ($main_menu): ?>
            <div id="topmenu" class="navigation">
                <?php print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                        'id' => 'main-menu-links',
                        'class' => array('links', 'clearfix', 'dropdown'),
                    ),
                    'heading' => array(
                        'text' => t('Main menu'),
                        'level' => 'h2',
                        'class' => array('element-invisible'),
                    ),
                )); ?>
            </div> <!-- /#main-menu -->
        <?php endif; ?>
        <!--/ topmenu -->
    </div>
</div>
<!--/ header top bar -->

<!-- header -->
<div class="header" style="background:#000">
    <?php print render($page['header']); ?>

</div>
<!--/ header -->

<!-- middle -->
<!-- breadcrumbs -->
<?php if ($breadcrumb): ?>
    <div class="middle_row row_white breadcrumbs">
        <div class="container">
                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
        </div>
    </div>
<?php endif; ?>
<!--/ breadcrumbs -->
<?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
            <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
<?php endif; ?>
<div class="middle_row row_light_gray">
    <div class="container clearfix">
        <div class="week_offer">
            <?php print render($page['homepage_content']); ?>
        </div>
        <div class="special_offers">
            <?php print render($page['homepage_news']); ?>
        </div>
    </div>
</div>

<!-- car types -->
<div class="middle_row row_gray">
    <div class="container clearfix">

        <div class="car_types_list">
            <h2>Choose from a wide variety of vehicles</h2>
            <ul>
                <li class="type_hover cart_type_1">
                    <a href="#" class="front"><strong>SCOOTERS & BIKES</strong> <em>76 OFFERS</em></a>
                    <a href="#" class="back"><strong>SCOOTERS & BIKES</strong> <em>View more</em></a>
                </li>
                <li class="type_hover cart_type_2">
                    <a href="#" class="front"><strong>SEDANS & ESTATES</strong> <em>1354 OFFERS</em></a>
                    <a href="#" class="back"><strong>SEDANS & ESTATES</strong> <em>View more</em></a>
                </li>
                <li class="type_hover cart_type_3">
                    <a href="#" class="front"><strong>SPORTS CARS</strong> <em>68 OFFERS</em></a>
                    <a href="#" class="back"><strong>SPORTS CARS</strong> <em>View more</em></a>
                </li>
                <li class="type_hover cart_type_4">
                    <a href="#" class="front"><strong>SUVS & PICKUPS</strong> <em>512 OFFERS</em></a>
                    <a href="#" class="back"><strong>SUVS & PICKUPS</strong> <em>View more</em></a>
                </li>
                <li class="type_hover cart_type_5">
                    <a href="#" class="front"><strong>VANS & TRUCKS</strong> <em>255 OFFERS</em></a>
                    <a href="#" class="back"><strong>VANS & TRUCKS</strong> <em>View more</em></a>
                </li>
            </ul>
            <a href="#" class="link_more">SEE ALL OUR OFFERS</a>
        </div>
        <script>
            jQuery(document).ready(function($) {
                $('.type_hover').hover(function(){
                    $(this).addClass('flip');
                },function(){
                    $(this).removeClass('flip');
                });
            });
        </script>

    </div>
</div>
<!--/ car types -->

<!-- latest_offers -->
<div class="middle_row latest_offers">
    <div class="container clearfix">
        <h2>LATEST CARS IN SHOWROOM</h2>

        <a href="#" class="link_more">View All Latest Added</a>
    </div>

    <div id="latest_offers">
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_01.jpg" alt=""></a>
            <a href="offers-details.html">Mercedes-Benz ML 350</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_02.jpg" alt=""></a>
            <a href="offers-details.html">Porsche CAYENNE S</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_03.jpg" alt=""></a>
            <a href="offers-details.html">Infiniti FX 37 S Premium</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_04.jpg" alt=""></a>
            <a href="offers-details.html">Volvo XC60 D5 RE-Design</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_05.jpg" alt=""></a>
            <a href="offers-details.html">BMW X5 Adaptive Drive Display</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_06.jpg" alt=""></a>
            <a href="offers-details.html">Land Rover Sport SDV6 HSE</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_07.jpg" alt=""></a>
            <a href="offers-details.html">Audi Q7 S-LINE PANORAMA</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_08.jpg" alt=""></a>
            <a href="offers-details.html">Volkswagen Touareg R-Line</a>
        </div>
        <div class="latest_item">
            <a href="offers-details.html"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/prod_img_09.jpg" alt=""></a>
            <a href="offers-details.html">Alfa Romeo Brera JTDm 2008</a>
        </div>
    </div>

    <a class="prev" id="latest_offers_prev" href="#"></a>
    <a class="next" id="latest_offers_next" href="#"></a>

    <script>
        jQuery(document).ready(function($) {
            var screenRes = $(window).width();

            $('#latest_offers').carouFredSel({
                prev : "#latest_offers_prev",
                next : "#latest_offers_next",
                infinite: false,
                circular: true,
                auto: false,
                width: '100%',
                scroll: {
                    items : 1,
                    onBefore: function (data) {
                        if (screenRes > 900) {
                            data.items.visible.eq(0).animate({opacity: 0.15},300);
                            data.items.old.eq(-1).animate({opacity: 1},300);
                            data.items.visible.eq(-1).animate({opacity: 0.15},300);
                        }
                    },
                    onAfter: function (data) {
                        if (screenRes > 900) {
                            data.items.old.eq(0).animate({opacity: 1},300);
                        }
                    }
                }
            });
            if (screenRes > 900) {
                var vis_items = $("#latest_offers").triggerHandler("currentVisible");
                vis_items.eq(-1).animate({opacity: 0.15},100);
                vis_items.eq(0).animate({opacity: 0.15},100);
            }
        });
    </script>
</div>
<!--/ latest_offers -->

<!-- testimonials -->
<div class="middle_row row_white testimonials">
    <div class="container">

        <div class="slider_container clearfix" id="testimonials">
            <div class="slider-item">
                <div class="quote-text">
                    <p><a href="#">AutoTrader</a> team is very proffessional and has found for me the perfect car for my needs. I'll be sure to give them a call whenever I'll be needing a new set of wheels! Highly recommended!</p>
                </div>
                <div class="quote-author"><span>BRENT JARVIS</span>, Customer</div>
            </div>
            <div class="slider-item">
                <div class="quote-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="quote-author"><span>James Backer</span>, Buyer</div>
            </div>
            <div class="slider-item">
                <div class="quote-text">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. We have to say it has made us delighted we chose Medica.</p>
                </div>
                <div class="quote-author"><span>Mr. Smith</span>, Partner</div>
            </div>
        </div>
        <a class="prev" id="testimonials_prev" href="#"></a>
        <a class="next" id="testimonials_next" href="#"></a>
        <script>
            jQuery(document).ready(function($) {
                $('#testimonials').carouFredSel({
                    next : "#testimonials_next",
                    prev : "#testimonials_prev",
                    infinite: false,
                    items: 1,
                    auto: false,
                    scroll: {
                        items : 1,
                        fx: "crossfade",
                        easing: "linear",
                        duration: 300
                    }
                });
            });
        </script>

    </div>
</div>
<!--/ testimonials -->

<!-- popular brands -->
<div class="middle_row row_light_gray brand_list">
    <div class="container">
        <h2>MOST POPULAR BRANDS:</h2>
        <ul>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_1.png" alt=""></a></li>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_2.png" alt=""></a></li>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_3.png" alt=""></a></li>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_4.png" alt=""></a></li>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_5.png" alt=""></a></li>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_6.png" alt=""></a></li>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_7.png" alt=""></a></li>
            <li><a href="#"><img src="http://namhan.example.com/sites/all/themes/namhan/images/temp/brand_logo_8.png" alt=""></a></li>
        </ul>

        <a href="#" class="link_more">View All Popular Brands</a>
    </div>
</div>
<!--/ popular brands -->

<!--/ middle -->

<div class="footer">
    <div class="container clearfix">

        <div class="f_col f_col_1">
            <h3>Vehicles:</h3>
            <ul>
                <li><a href="#"><span>Motorbikes</span></a></li>
                <li><a href="#"><span>Compacts</span></a></li>
                <li><a href="#"><span>Sedans</span></a></li>
                <li><a href="#"><span>4x4 SUVs</span></a></li>
                <li><a href="#"><span>Pickups</span></a></li>
                <li><a href="#"><span>Vans & Trucks</span></a></li>
            </ul>
        </div>
        <!--/ footer col 1 -->

        <div class="f_col f_col_2">
            <h3>Services:</h3>
            <ul>
                <li><a href="#"><span>Buy a car</span></a></li>
                <li><a href="#"><span>Sell your Car</span></a></li>
                <li><a href="#"><span>Buy Back</span></a></li>
                <li><a href="#"><span>Repair Shop </span></a></li>
            </ul>
        </div>
        <!--/ footer col 2 -->

        <div class="f_col f_col_3">
            <h3>Privacy:</h3>
            <ul>
                <li><a href="#"><span>Terms & Conditions</span></a></li>
                <li><a href="#"><span>Privacy Statement</span></a></li>
                <li><a href="#"><span>F.A.Q.</span></a></li>
                <li><a href="#"><span>Support</span></a></li>
                <li><a href="#"><span>Confidentiality</span></a></li>
            </ul>
        </div>
        <!--/ footer col 3 -->

        <div class="f_col f_col_4">
            <h3>OUR SHOWROOM</h3>
            <div class="footer_address">
                <div class="address">
                    21 Sunset Blvd, Los Angeles<br>
                    California, 90453
                </div>
                <div class="hours">
                    Mon - Fri: 9AM - 7 PM<br>
                    Sat - Sun: 9AM - 2 PM
                </div>
                <a href="contact.html" class="notice">View Bigger Map</a>
            </div>
            <div class="footer_map" style="background:url(http://namhan.example.com/sites/all/themes/namhan/images/temp/footer_map.jpg);"><a href="contact.html" class="amap"></a></div>
        </div>
        <!--/ footer col 4 -->

        <div class="clear"></div>

        <div class="footer_social">
            <div class="social_inner">
                <a href="#" class="social-google"><span>Google +1</span></a>
                <a href="#" class="social-fb"><span>Facebook</span></a>
                <a href="#" class="social-twitter"><span>Twitter</span></a>
                <a href="#" class="social-dribble"><span>Dribble</span></a>
                <a href="#" class="social-linkedin"><span>LinkedIn</span></a>
                <a href="#" class="social-vimeo"><span>Vimeo</span></a>
                <a href="#" class="social-flickr"><span>Flickr</span></a>
                <a href="#" class="social-da"><span>Devianart</span></a>
            </div>
        </div>

        <div class="footer_contacts">
            <span class="phone">555-39.84.35</span>
            <span class="email">hello@autotrader.com</span>
        </div>

        <div class="copyright">
            AutoTrader Wordpress theme by <a href="http://themefuse.com">Themefuse</a>  &nbsp;|&nbsp;  <a href="http://themefuse.com" class="link_white">Premium WordPress themes</a>
        </div>

    </div>
</div>

</div>
