<section class="contenido-inicio">
<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //      Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/camera.css">
    <style>
        .fluid_container {
            margin: 0 0;
            max-width: 956px;
            width: 100%;
        }
    </style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //      Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/camera.min.js"></script>
    <script>
        jQuery(function(){
            
            jQuery('#camera_wrap_1').camera({
                thumbnails: true
            });
        });
    </script>

    <div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="<?php echo base_url(); ?>assets/img/galeria/slider/thumbs/1.png" data-src="<?php echo base_url(); ?>assets/img/galeria/slider/1.png">
                
            </div>
            <div data-thumb="<?php echo base_url(); ?>assets/img/galeria/slider/thumbs/2.png" data-src="<?php echo base_url(); ?>assets/img/galeria/slider/2.png">
               
            </div>
            <div data-thumb="<?php echo base_url(); ?>assets/img/galeria/slider/thumbs/3.jpg" data-src="<?php echo base_url(); ?>assets/img/galeria/slider/3.jpg">
               
            </div>
            <div data-thumb="<?php echo base_url(); ?>assets/img/galeria/slider/thumbs/4.jpg" data-src="<?php echo base_url(); ?>assets/img/galeria/slider/4.jpg">
               
            </div>
        </div><!-- #camera_wrap_1 -->
    </div><!-- .fluid_container -->

</section>