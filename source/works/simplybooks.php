

<?php include '../includes/web-interactive.php'; ?>

<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">

    <h3 class="margintop10">WEB + INTERACTIVE</h3>
        
        <h3 class="margintop20"><strong>SimplyBooks</strong><br/>
        e-Commerce Website</h3>
        
    <p class="margintop10">The goal with this site was to create an online book store front using HTML/CSS, jQuery and PHP. This website also has features that allow visitor to register/ login and give comment to the books. The design of this web­site was inspired by a simple but elegant concept. It also has a mobile version of the website.</p>
    <p><a href="http://richardtirta.com/work/simplybooks/" target="_new">Go to website</a></p>
        
        <div class="gallery_icons">
        <img src="../images/ui/dw_icon.png" width="25" height="25" alt="Dreamweaver" title="Dreamweaver"> <br/>
        <img class="left marginright5" src="../images/ui/html_icon.png"  height="25" alt="HTML/CSS" title="HTML/CSS">
        <img class="left marginright5" src="../images/ui/jquery_icon.png"  height="25" alt="jQuery" title="jQuery">
        <img class="left " src="../images/ui/php_icon.png"  height="25" alt="PHP" title="PHP">
        <div class="clear"></div>
        </div>
        
        
        
         <p class="margintop20"><a href="workshop.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
  	<img src="../images/gallery/simplybooks/01.jpg"/>
    <img src="../images/gallery/simplybooks/02.jpg"/>
    <img src="../images/gallery/simplybooks/03.jpg"/>
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
