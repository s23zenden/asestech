<?php defined('_JEXEC') or die('Access Deny'); ?>

<style>
    .nav-pills{
        color: #000101;
    }
    .nav-pills > li > a:hover{
        color: #FFFFFF;
        background-color:#108F28 !important;
    }

    .nav-pills > li.active > a{
        background-color: #108F28 !important;
    }
</style>

    <div class="row" style="border-radius: 1em; padding: 5px; background-color: #EEE;">
        <ul class="nav nav-pills nav-stacked">
            <?php if($menu_item_1):?>
                <li><a href="<?php echo $menu_item_1_url?>"><?php echo $menu_item_1;?></a></li>
            <?php endif;?>
            <?php if($menu_item_2):?>
                <li><a href="<?php echo $menu_item_2_url?>"><?php echo $menu_item_2?></a></li>
            <?php endif;?>
            <?php if($menu_item_3):?>
                <li><a href="<?php echo $menu_item_3_url?>"><?php echo $menu_item_3?></a></li>
            <?php endif;?>
            <?php if($menu_item_4):?>
                <li><a href="<?php echo $menu_item_4_url?>"><?php echo $menu_item_4?></a></li>
            <?php endif;?>
            <?php if($menu_item_5):?>
                <li><a href="<?php echo $menu_item_5_url?>"><?php echo $menu_item_5?></a></li>
            <?php endif;?>
            <?php if($menu_item_6):?>
                <li><a href="<?php echo $menu_item_6_url?>"><?php echo $menu_item_6?></a></li>
            <?php endif;?>
            <?php if($menu_item_7):?>
                <li><a href="<?php echo $menu_item_7_url?>"><?php echo $menu_item_7?></a></li>
            <?php endif;?>
            <?php if($menu_item_8):?>
                <li><a href="<?php echo $menu_item_8_url?>"><?php echo $menu_item_8?></a></li>
            <?php endif;?>
            <?php if($menu_item_9):?>
                <li><a href="<?php echo $menu_item_9_url?>"><?php echo $menu_item_9?></a></li>
            <?php endif;?>

        </ul>
    </div>


<script>
    $(document).ready(function () {

        // Set BaseURL
        var baseURL = 'http://asestech.com/';


        // Get current URL and replace baseURL
        var href = window.location.href.replace(baseURL, '');

        // Remove trailing slash
        href = href.substr(-1) == '/' ? href.substr(0, href.length - 1) : href;


        // Select link based on href attribute and set it's closest 'li' to 'active'.
        // .siblings('.active').removeClass() is only needed if you have a default 'active li'.
        $('a[href="' + href +'"]', '.nav li').closest('li').addClass('active').siblings('.active').removeClass();

    });
</script>