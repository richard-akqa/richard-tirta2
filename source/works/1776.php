

<?php include '../includes/graphic-design.php'; ?>


<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">


    <h3 class="margintop10">GRAPHIC DESIGN</h3>
        
        <h3 class="margintop20"><strong>The Seventeen Seventy Six Typeface</strong><br/>
        Typography Showcase</h3>
        
    <p class="margintop10">When reading The Consitution of the United States of America I was amazed by the detailed hand­written script being used in it. It inspired me to create a black­letter type­face based from that. As a result, a black­letter type­face called The Seventeen Seventy Six was born to enrich my type­face collection.</p>
        
        <div class="gallery_icons">
        <img class="left marginright10" src="../images/ui/id_icon.png" width="25" height="25" alt="InDesign" title="InDesign">
        <img class="left marginright10" src="../images/ui/ai_icon.png" width="25" height="25" alt="Illustrator" title="Illustrator">
        <img class="left marginright10" src="../images/ui/ps_icon.png" width="25" height="25" alt="Photoshop" title="Photoshop">
        <div class="clear"></div>
        </div>
        
    
        
         <p class="margintop20"><a href="pantone.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
  	<img src="../images/gallery/1776//01.jpg"/>
    <img src="../images/gallery/1776//02.jpg"/>
    <img src="../images/gallery/1776//03.jpg"/>
    <img src="../images/gallery/1776//04.jpg"/>

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
