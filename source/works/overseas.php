

<?php include '../includes/photography.php'; ?>


<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">
    
        <h3 class="margintop10">PHOTOGRAPHY</h3>
            
        <h3 class="margintop20"><strong>The Overseas</strong><br/>
        Photography Compilation</h3>
            
        <p class="margintop10">Overseas is an image collection taken in the United States, an overseas country from my perspective as Indonesian. Different from "Tanah Air" (Homeland) which featuring landmarks and objects, I spent most of the times taking <br/>pictures of different people.</p>
            
            <div class="gallery_icons">
           <img src="../images/ui/photo_icon.png" width="35" height="25" alt="Photography" title="Photography">
            </div>
            
            <div class="gallery_thumbs nobullet margintop20">
            <li><a href="../images/gallery/overseas/01.jpg"><img src="../images/gallery/overseas/01_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/overseas/02.jpg"><img src="../images/gallery/overseas//02_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/overseas/03.jpg"><img src="../images/gallery/overseas//03_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/overseas/04.jpg"><img src="../images/gallery/overseas//04_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/overseas/05.jpg"><img src="../images/gallery/overseas//05_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/overseas/06.jpg"><img src="../images/gallery/overseas//06_thumb.jpg"/></a></li>
            </div>
            
             <p class="margintop20"><a href="homeland.php"  >Next Project</a></p>
    </div>
    
    

    <div class="left gallery_image">
        <img src="../images/gallery/overseas/02.jpg"/>
    </div>
    
      <div class="clear"></div>

</div> <!--project end-->
</div>
</section>
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
