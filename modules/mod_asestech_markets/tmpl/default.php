<?php defined('_JEXEC') or die('Access Deny'); ?>


<div class="row" id="asestech_markets">
    <div class="col-md-4">
        <?php if($market_1_image):?>
            <div class="col-md-4">
                <a href="<?php echo $market_1_link; ?>"><img src="<?php echo JURI::base()?><?php echo $market_1_image; ?>" class="img-responsive img-rounded"></a>
            </div>
            <div class="col-md-8">
                <h4 style="margin-top: 0px;"><?php echo $market_1_heading;?></h4>
                <p><?php echo $market_1_intro; ?></p>
                <a href="<?php echo $market_1_link; ?>"><p>Read more</p></a>
            </div>
        <?php endif;?>
    </div>
    <div class="col-md-4">
        <?php if($market_2_image):?>
            <div class="col-md-4">
                <a href="<?php echo $market_2_link; ?>"><img src="<?php echo JURI::base()?><?php echo $market_2_image; ?>" class="img-responsive img-rounded"></a>
            </div>
            <div class="col-md-8">
                <h4 style="margin-top: 0px;"><?php echo $market_2_heading;?></h4>
                <p><?php echo $market_2_intro; ?></p>
                <a href="<?php echo $market_2_link; ?>"><p>Read more</p></a>
            </div>
        <?php endif;?>
    </div>
    <div class="col-md-4">
        <?php if($market_3_image):?>
            <div class="col-md-4">
                <a href="<?php echo $market_3_link; ?>"><img src="<?php echo JURI::base()?><?php echo $market_3_image; ?>" class="img-responsive img-rounded"></a>
            </div>
            <div class="col-md-8">
                <h4 style="margin-top: 0px;"><?php echo $market_3_heading;?></h4>
                <p><?php echo $market_3_intro; ?></p>
                <a href="<?php echo $market_3_link; ?>"><p>Read more</p></a>
            </div>
        <?php endif;?>
    </div>
</div>