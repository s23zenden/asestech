<?php
    defined('_JEXEC') or die('Access Deny');
?>

<div class="row">
    <div class="col-md-3">
        <p><?php echo $copyright_text; ?></p>
    </div>
    <div class="col-md-3">
        <p><?php echo $street; ?></p>
        <p><?php echo $postcode; ?></p>
    </div>
    <div class="col-md-3">
        <p><?php echo $email; ?></p>
        <p><?php echo $telephone_number; ?></p>
    </div>
    <div class="col-md-2 col-md-offset-1">
        <ul class="list-inline">
            <?php if($facebook_image): ?>
                <li><a href="<?php echo $facebook_link;?>"><img src="<?php echo JURI::base()?><?php echo $facebook_image; ?>" alt="facebook"></a></li>
            <?php endif; ?>
            <?php if($twitter_image): ?>
                <li><a href="<?php echo $twitter_link;?>"><img src="<?php echo JURI::base()?><?php echo $twitter_image; ?>" alt="twitter"></a></li>
            <?php endif; ?>
            <?php if($linkedin_image): ?>
                <li><a href="<?php echo $linkedin_link;?>"><img src="<?php echo JURI::base()?><?php echo $linkedin_image; ?>" alt="linkedin"></a></li>
            <?php endif; ?>
            <?php if($googleplus_image): ?>
                <li><a href="<?php echo $googleplus_link;?>"><img src="<?php echo JURI::base()?><?php echo $googleplus_image; ?>" alt="googleplus"></a></li>
            <?php endif; ?>

        </ul>
    </div>
</div>