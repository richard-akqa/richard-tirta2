<?php include '../includes/photography.php'; ?>

<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">

    <h3 class="margintop10">PHOTOGRAPHY</h3>
        
        <h3 class="margintop20"><strong>CORNING</strong><br/>
        Digital Imaging Project</h3>
        
    <p class="margintop10">Corning has a vision in the future where a day is made of glass. <br/>As a designer, I made that vision become a reality through this Photoshop project. As can be seen, a guy (me) is walking through in motion while holding <br/>a futuristic tablet in front of a wall of glass that showed<br/> flight information.</p>
        
        <div class="gallery_icons">
        <img src="../images/ui/photo_icon.png" width="35" height="25" alt="Photography" title="Photography">
        </div>
        
        <div class="gallery_thumbs nobullet">
        </div>
        
        <p class="margintop20"><a href="vincent.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
  	<img src="../images/gallery/photo/corning01.jpg"> 
    
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


<script type="text/javascript">

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

