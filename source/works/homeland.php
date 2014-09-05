

<?php include '../includes/photography.php'; ?>


<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">
    
        <h3 class="margintop10">PHOTOGRAPHY</h3>
            
        <h3 class="margintop20"><strong>Tanah Air (Homeland)</strong><br/>
        Photography Compilation</h3>
            
        <p class="margintop10">Tanah Air (Homeland in Indonesian) is an image collection taken in Indonesia. <br/>It is an archipelago of rich cultures, colorful biodiversity <br/>and exotic places.</p>
            
            <div class="gallery_icons">
           <img src="../images/ui/photo_icon.png" width="35" height="25" alt="Photography" title="Photography">
            </div>
            
            <div class="gallery_thumbs nobullet margintop20">
            <li><a href="../images/gallery/homeland/01.jpg"><img src="../images/gallery/homeland/01_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/homeland/02.jpg"><img src="../images/gallery/homeland//02_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/homeland/03.jpg"><img src="../images/gallery/homeland//03_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/homeland/04.jpg"><img src="../images/gallery/homeland//04_thumb.jpg"/></a></li>
            <li><a href="../images/gallery/homeland/05.jpg"><img src="../images/gallery/homeland//05_thumb.jpg"/></a></li>
            </div>
            
             <p class="margintop20"><a href="corning.php"  >Next Project</a></p>
    </div>
    
    

    <div class="left gallery_image">
        <img src="../images/gallery/homeland/02.jpg"/>
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
