<!-- special offer -->
<div class="special_offers">
    <h2><?php print $title; ?></h2>

    <div id="special_offers">
        <?php if ($rows): ?>
        <div class="view-content">
            <?php print $rows; ?>
        </div>
        <?php endif; ?>

    </div>

    <div class="link_more"><a href="#">View All Special Offers</a></div>
</div>
<!--/ special offer -->