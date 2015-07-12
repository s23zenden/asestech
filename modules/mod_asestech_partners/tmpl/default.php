<?php defined('_JEXEC') or die('Access Deny'); ?>

<ul id="scroller">
    <?php if($partner_1_logo):?>
        <li><a href="" target="_blank"><img src="<?php echo $partner_1_logo; ?>" alt="<?php echo $partner_1_title;?>" width="250" height="100"></a></li>
    <?php endif; ?>
    <?php if($partner_2_logo):?>
        <li><a href="<?php echo $partner_2_link; ?>" target="_blank"><img src="<?php echo $partner_2_logo; ?>" alt="<?php echo $partner_2_title;?>" width="250" height="100"></a></li>
    <?php endif; ?>
    <?php if($partner_3_logo):?>
        <li><a href="<?php echo $partner_3_link; ?>" target="_blank"><img src="<?php echo $partner_3_logo; ?>" alt="<?php echo $partner_3_title;?>" width="250" height="100"></a></li>
    <?php endif; ?>
    <?php if($partner_4_logo):?>
        <li><a href="<?php echo $partner_4_link; ?>" target="_blank"><img src="<?php echo $partner_4_logo; ?>" alt="<?php echo $partner_4_title;?>" width="250" height="100"></a></li>
    <?php endif; ?>
</ul>

