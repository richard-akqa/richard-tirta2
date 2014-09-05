

<?php include '../includes/photography.php'; ?>

<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">

    <h3 class="margintop10">PHOTOGRAPHY</h3>
        
        <h3 class="margintop20">Vincent and His Thoughts<br/>
        Photo Project</h3>
        
    <p class="margintop10">Vincent loves to talk about humanities. Therefore, I think it will be wonderful if I can capture his moment of thought. As a result, this picture reflects a lot about him and his thought.</p>
        
        <div class="gallery_icons">
        <img src="../images/ui/photo_icon.png" width="35" height="25" alt="Photography" title="Photography">
        </div>
        
        <div class="gallery_thumbs nobullet">
        </div>
        
         <p class="margintop20"><a href="venus.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
  	<img src="../images/gallery/photo/vincent01.jpg"> 
    
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

