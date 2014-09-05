

<?php include '../includes/web-interactive.php'; ?>

<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">

    <h3 class="margintop10">WEB + INTERACTIVE</h3>
        
        <h3 class="margintop20"><strong>RED CLIFF</strong><br/>
        Flash Website</h3>
        
    <p class="margintop10">Red Cliff is a movie from China. While it is not a popular movie in the United States, it is a popular movie in China. I made an Interactive web for them with a cinematic look to convey the idea that their film can be as good as a Holywood blockbuster.</p>
    <p><a href="http://dragoofwater.web.id/portfolio/red_cliff/">Go to website</a></p>
        
        <div class="gallery_icons">
        <img  src="../images/ui/fl_icon.png" width="25" height="25" alt="Flash" title="Flash"> <br/>
        <img  src="../images/ui/as_icon.png" alt="ActionScript"  title="ActionScript">
        </div>
        
      
        
         <p class="margintop20"><a href="batik_keris.php"  >Next Project</a></p>

</div>
<div class="left">
<div class="gallery_image margintop20">
  	<img src="../images/gallery/redcliff/01.jpg"/>
    <img src="../images/gallery/redcliff/02.jpg"/>
</div>

<div class="gallery_video margintop20 marginbot20">
	<p>Website documentation</p>
    <iframe src="http://player.vimeo.com/video/42701226?byline=0&amp;portrait=0" width="960" height="540" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
<div class="clear"></div>
</div>

</div> <!--project end-->
</div>
       

    
	
	</section>
  
  <div class="clear"></div>
    

</div>
   
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/modernizr-2.5.3.js"></script>
<script type="text/javascript" src="../js/thumbslide.js"></script>
<script type="text/javascript" src="../js/imagesloaded.js"></script>
<script type="text/javascript" src="../js/fitvids.js"></script>


<script type="text/javascript">
 $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".gallery_video").fitVids();
  });


$(window).load(function() {



var windowWidth = $(window).width();
var imageWidth = $(".gallery_image>img").width();


if ( windowWidth >= 1300 ){
$(".project_wrapper").css('width', imageWidth+300);
};

function setSizes() {
var projectWidth = $(".project_wrapper").width();
$(".gallery_image").css('width', projectWidth-250);
}

var projectWidth = $(".project_wrapper").width();
$(".gallery_image").css('width', projectWidth-250);

$(window).resize(function() { setSizes(); });


});

</script>    
</body>
</html>
