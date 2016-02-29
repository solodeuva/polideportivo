
<!--
<div id="slider-wrapper">
<div id="slider">
<a href="URL_ENLACE1"><img src="<?php echo base_url(); ?>assets/img/galeria/slider/1.jpg"/><p>TEXTO1</p></a>
<a href="URL_ENLACE2"><img src="<?php echo base_url(); ?>assets/img/galeria/slider/2.jpg"/><p>TEXTO2</p></a>
<a href="URL_ENLACE3"><img src="<?php echo base_url(); ?>assets/img/galeria/slider/3.jpg"/><p>TEXTO3</p></a>
</div>
<a href="javascript:void();" class="mas">&rsaquo;</a>
<a href="javascript:void();" class="menos">&lsaquo;</a></div>

<script>
$(function(){
$('#slider a:gt(0)').hide();
var interval = setInterval(changeDiv, 6000);
function changeDiv(){
$('#slider a:first-child').fadeOut(1000).next('a').fadeIn(1000).end().appendTo('#slider');
};
$('.mas').click(function(){
changeDiv();
clearInterval(interval);
interval = setInterval(changeDiv, 6000);
});
$('.menos').click(function(){
$('#slider a:first-child').fadeOut(1000);
$('#slider a:last-child').fadeIn(1000).prependTo('#slider');
clearInterval(interval);
interval = setInterval(changeDiv, 6000);
});
});
</script>

<style>
/* Contenedor general */
#slider-wrapper {
position: relative;
width: 800px;
max-width: 100%;
margin: 0 auto;
padding: 0 10px;
font-family: arial, sans-serif;
font-size: 0;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
/* Contenedor slider */
#slider { 
position: relative;
width: 100%;
padding-bottom: 50%; /* Aspect ratio */
overflow: hidden;
border:10px solid #333;
border-radius: 5%/10%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
#slider > a {
position:absolute;
top:0;
left:0;
width: 100%;
min-height: 100%;
}
/* Ajuste de las imágenes */
#slider img {
width: 100%;
min-height: 100%;
position: absolute;
margin:0;
padding:0; 
border:0;
}
/* Texto que acompaña a cada imagen */
#slider p {
position: absolute;
bottom: 5%;
left: 0;
display: block;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
width: 80%;
height: 18px;
margin:0;
padding: 5px 0;
border-radius: 0 20px 20px 0;
color: #eee;
background: #333;
font-size: 18px;
line-height: 18px;
text-align:center;
}
/* Flechas de navegación */
a.mas, a.menos {
position: absolute;
top: 50%;
left: 10px;
z-index: 10;
width: 30px;
height: 30px;
text-align: center;
line-height: 30px;
font-size: 30px;
color: white;
background: #333;
text-decoration: none;
}
a.mas {
left: 100%;
margin-left: -40px;
}
</style>
<div id="c-slider">
            <div id="slider">
                <section>
                    <img src="http://welltechnically.com/wp-content/uploads/2013/08/android-wallpapers-700x300.jpg" alt="">
                </section>
                <section>
                    <img src="http://pgembeddedsystems.org/images/vlsifront.png" alt="">
                </section>
                <section>
                    <img src="http://welltechnically.com/wp-content/uploads/2013/09/android-widescreen-wallpaper-14165-hd-wallpapers-700x300.jpg" alt="">
                </section>
                <section>
                    <img src="http://youghaltennisclub.ie/wp-content/uploads/2014/06/Tennis-Wallpaper-High-Definition-700x300.jpg" alt="">
                </section>
            </div>
            <div id="btn-prev">&#60;</div>
            <div id="btn-next">&#62;</div>
        </div>
</section>-->

<!--
<div class="slider">
		<ul>
			<li><img src="<?php echo base_url(); ?>assets/img/galeria/slider/1.jpg"></li>
			<li><img src="<?php echo base_url(); ?>assets/img/galeria/slider/2.jpg"></li>
			<li><img src="<?php echo base_url(); ?>assets/img/galeria/slider/3.jpg"></li>
		</ul>
	</div>
-->
<section class="contenido">
<!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/camera.css">
    <style>
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 956px;
			width: 90%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
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
            <div data-thumb="<?php echo base_url(); ?>assets/img/galeria/slider/thumbs/2.jpg" data-src="<?php echo base_url(); ?>assets/img/galeria/slider/2.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>
            <div data-thumb="../images/slides/thumbs/leaf.jpg" data-src="../images/slides/leaf.jpg">
               
            </div>
            <div data-thumb="../images/slides/thumbs/road.jpg" data-src="../images/slides/road.jpg">
               
            </div>
            <div data-thumb="../images/slides/thumbs/sea.jpg" data-src="../images/slides/sea.jpg">
                
            </div>
            <div data-thumb="../images/slides/thumbs/shelter.jpg" data-src="../images/slides/shelter.jpg">
                
            </div>
            <div data-thumb="../images/slides/thumbs/tree.jpg" data-src="../images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->
    </div><!-- .fluid_container -->

</section>