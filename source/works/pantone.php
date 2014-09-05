

<?php include '../includes/graphic-design.php'; ?>

<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">

    <h3 class="margintop10">GRAPHIC DESIGN</h3>
        
        <h3 class="margintop20"><strong>PANTONE</strong><br/>
        Advertising Campaign</h3>
        
    <p class="margintop10">Pantone wanted to launch an advertising campaign called "Because the World isn't Black and White". Using children's point of view, I delivered this message through the black and white illustrations with interesting colorful figures.</p>
        
        <div class="gallery_icons">
        <img class="left marginright10" src="../images/ui/id_icon.png" width="25" height="25" alt="InDesign" title="InDesign">
        <img class="left marginright10" src="../images/ui/ai_icon.png" width="25" height="25" alt="Illustrator" title="Illustrator">
        <img class="left marginright10" src="../images/ui/ps_icon.png" width="25" height="25" alt="Photoshop" title="Photoshop">
        <div class="clear"></div>
        </div>
        
        
         <p class="margintop20"><a href="frezty.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
  	<img src="../images/gallery/pantone/01.jpg" />
    <img src="../images/gallery/pantone/02.jpg" />
    <img src="../images/gallery/pantone/03.jpg" />

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
