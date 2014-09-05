

<?php include '../includes/graphic-design.php'; ?>


<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">

    <h3 class="margintop10">GRAPHIC DESIGN</h3>
        
        <h3 class="margintop20"><strong>Things Designers Should Know</strong><br/>
        Typography Showcase</h3>
        
    <p class="margintop10">"Things Designer Should Know" is a book of quotes from professional designers. I made the book to always remind myself the important design principles.</p>
        
        <div class="gallery_icons">
        <img src="../images/ui/ai_icon.png" width="25" height="25" alt="Illustrator" title="Illustrator">
        </div>
        
        
        
         <p class="margintop20"><a href="1776.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
  	<img src="../images/gallery/type/01.jpg" />
    <img src="../images/gallery/type/02.jpg" />
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
