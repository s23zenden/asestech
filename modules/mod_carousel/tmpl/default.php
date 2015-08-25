<?php
/**
 * @version     1.1
 * @package     mod_carousel
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@joomdigi.com> - http://www.joomdigi.com
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<style>
    .carousel-indicators > li.active{
        background-color: #108f28 !important;
    }
    .tagline{
        color: #FFF;
        background: rgba(0, 0, 0, 0.5) none repeat scroll 0% 0%;
        width: auto;
        max-width: 980px;
        margin: 0px;
        vertical-align: middle;
        display: inline-block;
        line-height: 1.5em;
        font-size: 1em;
        padding: 2em 3em;
        white-space: normal;
        bottom: 120px;
    }
    .item > .tagline > a{
        color: #ffffff;
        text-decoration: none;
    }
</style>
 
 <div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <?php if($slide1_background_image) : ?>
        <img class="fill" src="<?php echo JURI::base(); ?><?php echo $slide1_background_image; ?>" alt="<?php echo $slide1_heading; ?>">
      <?php else : ?>
        <img data-src="holder.js/900x500/auto/#555:#5555" alt="900x500" src="mciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNTU1NTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZTo1NnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjkwMHg1MDA8L3RleHQ+PC9zdmc+">
      <?php endif; ?>
      <div class="carousel-caption tagline">
        <?php if($slide1_main_image) : ?>
          <div class="carousel-image"><img class="server" src="<?php echo JURI::base(); ?><?php echo $slide1_main_image; ?>" alt="<?php echo $slide1_heading; ?>" /></div>
        <?php endif; ?>
          <?php if($slide1_button_link != '#') : ?>
              <a href="<?php echo $slide1_button_link; ?>">
                  <h1 class="carousel-title"><?php echo $slide1_heading; ?></h1>
                  <p class="carousel-body"><?php echo $slide1_text; ?></p>
              </a>
          <?php else: ?>
              <h1 class="carousel-title"><?php echo $slide1_heading; ?></h1>
              <p class="carousel-body"><?php echo $slide1_text; ?></p>
          <?php endif; ?>
        <?php if($slide1_show_read_more) : ?>
         <p><a class="btn btn-lg btn-primary" href="<?php echo $slide1_button_link; ?>" role="button"><?php echo $slide1_button_text; ?></a></p>
        <?php endif; ?>
    </div>
    </div>
    
  <div class="item">
    <?php if($slide2_background_image) : ?>
        <img class="fill" src="<?php echo JURI::base(); ?><?php echo $slide2_background_image; ?>" alt="<?php echo $slide2_heading; ?>">
      <?php else : ?>
        <img data-src="holder.js/900x500/auto/#555:#5555" alt="900x500" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNTU1NTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZTo1NnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjkwMHg1MDA8L3RleHQ+PC9zdmc+">
      <?php endif; ?>
     <div class="carousel-caption tagline">
      <?php if($slide2_main_image) : ?>
        <div class="carousel-image"><img class="server" src="<?php echo JURI::base(); ?><?php echo $slide2_main_image; ?>" alt="<?php echo $slide2_heading; ?>" /></div>
      <?php endif; ?>
         <?php if($slide2_button_link != '#') : ?>
             <a href="<?php echo $slide2_button_link; ?>">
                 <h1 class="carousel-title"><?php echo $slide2_heading; ?></h1>
                 <p class="carousel-body"><?php echo $slide2_text; ?></p>
             </a>
         <?php else: ?>
             <h1 class="carousel-title"><?php echo $slide2_heading; ?></h1>
             <p class="carousel-body"><?php echo $slide2_text; ?></p>
         <?php endif; ?>
        <?php if($slide2_show_read_more) : ?>
         <p><a class="btn btn-lg btn-primary" href="<?php echo $slide2_button_link; ?>" role="button"><?php echo $slide2_button_text; ?></a></p>
        <?php endif; ?>
    </div>
    </div>
  
  <div class="item">
    <?php if($slide3_background_image) : ?>
        <img class="fill" src="<?php echo JURI::base(); ?><?php echo $slide3_background_image; ?>" alt="<?php echo $slide3_heading; ?>">
      <?php else : ?>
        <img data-src="holder.js/900x500/auto/#555:#5555" alt="900x500" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNTU1NTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZTo1NnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjkwMHg1MDA8L3RleHQ+PC9zdmc+">
      <?php endif; ?>
       <div class="carousel-caption tagline">
        <?php if($slide1_main_image) : ?>
          <div class="carousel-image"><img class="server" src="<?php echo JURI::base(); ?><?php echo $slide3_main_image; ?>" alt="<?php echo $slide3_heading; ?>" /></div>
        <?php endif; ?>
           <?php if($slide3_button_link != '#') : ?>
               <a href="<?php echo $slide3_button_link; ?>">
                   <h1 class="carousel-title"><?php echo $slide3_heading; ?></h1>
                   <p class="carousel-body"><?php echo $slide3_text; ?></p>
               </a>
           <?php else: ?>
               <h1 class="carousel-title"><?php echo $slide3_heading; ?></h1>
               <p class="carousel-body"><?php echo $slide3_text; ?></p>
           <?php endif; ?>
        <?php if($slide3_show_read_more) : ?>
         <p><a class="btn btn-lg btn-primary" href="<?php echo $slide3_button_link; ?>" role="button"><?php echo $slide3_button_text; ?></a></p>
        <?php endif; ?>
    </div>
    </div>
  </div>

  <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
</div>

<script>
    $('.carousel').carousel({
        interval: 4000,
        pause: 'false'
    })
</script>