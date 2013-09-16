<!-- special offer -->

    <?php if ($title): ?><h2>
        <?php print $title; ?>
        </h2><?php endif; ?>

    <div id="special_offers">
        <?php print $rows; ?>
    </div>
    <a class="prev" id="special_offers_prev" href="#"></a>
    <a class="next" id="special_offers_next" href="#"></a>

    <div class="link_more"><a href="#">View All Special Offers</a></div>

    <script>
        jQuery(document).ready(function($) {
            function carSpecicalInit() {
                var car_specical = $('#special_offers');
                car_specical.carouFredSel({
                    prev : "#special_offers_prev",
                    next : "#special_offers_next",
                    infinite: true,
                    circular: false,
                    auto: false,
                    width: '100%',
                    direction: "down",
                    scroll: {
                        items : 1
                    }
                });
            }
            $(window).load(function() {
                carSpecicalInit();
            });
            var resizeTimer;
            $(window).resize(function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(carSpecicalInit, 100);
            });
        });
    </script>

<!--/ special offer -->