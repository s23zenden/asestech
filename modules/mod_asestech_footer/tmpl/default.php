<?php
    defined('_JEXEC') or die('Access Deny');
?>
<style>
    .bottom{
        border-top: 1px;
        background-color: #108f28;
        color: #ffffff;
    }
    div.addthis_custom_sharing.pull-right > div > a.addthis_button_linkedin.asestech_icon.at300b > span {
        border-radius: 50%;
    > span {
          border-radius: 50%;
      }
    }
    a.asestech_icon > span {
         border-radius: 50%;
    }
    
    ul.asestech_icon_share {
        list-style: none;
        list-style-type: none;

    >li {

         display: inline-block;
         text-align: -webkit-match-parent;
         margin: 0px 0px;
         border-radius: 50%;
     }
    }
</style>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55bfbd79787649af" async="async"></script>

<div class="row">
    <div class="col-md-3 text-center">
        <p><?php echo $copyright_text; ?></p>
    </div>
    <div class="col-md-3 text-center">
        <p><?php echo $street; ?></p>
        <p><?php echo $postcode; ?></p>
    </div>
    <div class="col-md-3 text-center">
        <p><?php echo $email; ?></p>
        <p><?php echo $telephone_number; ?></p>
    </div>
    <div class="col-md-3 text-center">
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <div class="">
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style comAddthisViewIntraacp">
                <ul class="asestech_icon_share">
                    <li><a class="addthis_button_linkedin asestech_icon"></a></li>
                    <li><a class="addthis_button_facebook asestech_icon"></a></li>
                    <li><a class="addthis_button_twitter asestech_icon"></a></li>
                    <li><a class="addthis_button_google_plusone_share asestech_icon"></a></li>
                </ul>
            </div>

        </div>

    </div>
</div>