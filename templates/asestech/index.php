<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<jdoc:include type="head" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="--><?php //echo $this->baseurl;?><!--/templates/--><?php //echo $this->template; ?><!--/less/bootstrap.less" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/carousel.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/simplyscroll.css" rel="stylesheet" media="all">
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
<!--    <script src="--><?php //echo $this->baseurl;?><!--/templates/--><?php //echo $this->template; ?><!--/js/less.js"></script>-->
<!--    <script src="--><?php //echo $this->baseurl;?><!--/templates/--><?php //echo $this->template; ?><!--/js/simplyscroll.min.js"></script>-->

      <script type="text/javascript">
          (function($) {
              $(function() { //on DOM ready
                  $("#scroller").simplyScroll();
              });
          })(jQuery);
      </script>

  </head>

  <body>
    <!--Main Module Position-->
    <?php if($this->countModules('menu')): ?>
        <div class="container" style="margin-bottom: -19px">
            <jdoc:include type="modules" name="menu" style="none" />
        </div>
    <?php endif; ?>
    <!--Carousel Module position-->
    <?php if($this->countModules('carousel')): ?>
        <div class="container fill">
            <jdoc:include type="modules" name="carousel" style="none" />
        </div>
    <?php endif; ?>


<!--    <div class="container">-->
        <div class="marketing container">

            <?php if($this->countModules('core1') || $this->countModules('core2') || $this->countModules('core3')):?>
                <div class="container ">
                    <div class="row">
                        <!--Core1 Module position-->
                        <div class="col-lg-4">
                            <?php if($this->countModules('core1')): ?>
                                <jdoc:include type="modules" name="core1" style="none" />
                            <?php endif; ?>
                        </div>
                        <!--Core2 Module position-->
                        <div class="col-lg-4">
                            <?php if($this->countModules('core2')): ?>
                                <jdoc:include type="modules" name="core2" style="none" />
                            <?php endif; ?>
                        </div>
                        <!--Core3 Module position-->
                        <div class="col-lg-4">
                            <?php if($this->countModules('core3')): ?>
                                <jdoc:include type="modules" name="core3" style="none" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endif;?>
            <?php if($this->countModules('core4')):?>
                <div class="container">
                    <div class="row">
                        <jdoc:include type="modules" name="core4" style="none" />
                    </div>
                </div>
            <?php endif;?>
            <!-- Asestech Market -->


            <?php if($this->countModules('core5')):?>
                <div class="container">
                    <hr>
                    <header>
                        <h2>Solutions</h2>
                    </header>
                    <jdoc:include type="modules" name="core5" style="none" />
                    <jdoc:include type="modules" name="core6" style="none" />
                    <jdoc:include type="modules" name="core7" style="none" />
                    <hr>
                </div>
            <?php endif; ?>
            
            <!-- Partners -->

            <?php if($this->countModules('partners')): ?>
                <div class="container">
                    <jdoc:include type="modules" name="partners" style="" />
                </div>
            <?php endif; ?>
            
            
            <!-- Main Content -->
            <div class="container">
                <div class="row">
                    <? if($this->countModules('left') > 0) : ?>
                        <div class="col-md-2 left" style="padding-top: 50px">
                            <jdoc:include type="modules" name="left" style="none" />
                        </div>
                    <? endif; ?>
                    <? if($this->countModules('left') === 0) : ?>
                    <div class="col-md-12">
                        <? else: ?>
                        <div class="col-md-10">
                            <? endif; ?>
                            <jdoc:include type="message" />
                            <jdoc:include type="component" />
                        </div>
                    </div>
                </div>

                <!-- FOOTER -->

            </div>

        </div><!-- /.container -->
        <div class="">
            <footer class="panel-footer bottom" style="">
                <jdoc:include type="modules" name="footer"/>
            </footer>
        </div>
<!--    </div>-->

  </body>

</html>
