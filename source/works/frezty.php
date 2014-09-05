

<?php include '../includes/graphic-design.php'; ?>


<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">


    <h3 class="margintop10">GRAPHIC DESIGN</h3>
        
        <h3 class="margintop20"><strong>FREZTY</strong><br/>
        New Brand Campaign</h3>
        
    <p class="margintop10">Frezty is a new brand created for organic beverage that will be marketed in the middle-to-high social demographic. The green tree illustration conveys the message that this sparkling organic tea will be refreshing<br/> to everyone.</p>
        
        <div class="gallery_icons">
        <img class="left marginright10" src="../images/ui/id_icon.png" width="25" height="25" alt="InDesign" title="InDesign">
        <img class="left marginright10" src="../images/ui/ai_icon.png" width="25" height="25" alt="Illustrator" title="Illustrator">
        <img class="left marginright10" src="../images/ui/ps_icon.png" width="25" height="25" alt="Photoshop" title="Photoshop">
        <div class="clear"></div>
        </div>
        
        
        
        <p class="margintop20"><a href="statefarm_g.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
  	<img src="../images/gallery/frezty/01.jpg" alt="frezty">
    <img src="../images/gallery/frezty/02.jpg" alt="frezty">  
    
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
