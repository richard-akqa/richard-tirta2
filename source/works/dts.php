

<?php include '../includes/motion-audio.php'; ?>


<div class="project_wrapper margintop100">
<div class="left gallery_desc">

    
        <h3 class="margintop10">MOTION + AUDIO</h3>
            
            <h3 class="margintop20"><strong>DTS Theater</strong><br/>
            Motion Teaser</h3>
            
        <p class="margintop10">The goal of this project is to demonstrate an under­standing of 3D motion using Cinema 4D. DTS is being featured in this project for its theater intro that would appear in cinemas using DTS Surround System</p>
            
            <div class="gallery_icons">
            <img class="left marginright10" src="../images/ui/c4d_icon.png" width="25" height="25" alt="Cinema 4D" title="Cinema 4D">
            <img class="left marginright10" src="../images/ui/ae_icon.png" width="25" height="25" alt="After Effects" title="After Effects">
            <div class="clear"></div>
            </div>
            
             <p class="margintop20"><a href="vimeo.php"  >Next Project</a></p>
            
    
    </div>


    <div class="left gallery_video">
    
    <iframe src="http://player.vimeo.com/video/24505650?byline=0&amp;portrait=0" width="900" height="506" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    
    </div>
</div> <!--project end-->
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
var imageWidth = $(".fluid-width-video-wrapper").width();



if ( windowWidth >= 1300 ){
$(".project_wrapper").css('width', imageWidth+300);
};

function setSizes() {
var projectWidth = $(".project_wrapper").width();
$(".gallery_video").css('width', projectWidth-250);
}

var projectWidth = $(".project_wrapper").width();
$(".gallery_video").css('width', projectWidth-250);



$(window).resize(function() { setSizes(); });




});


	

</script>    
</body>
</html>
