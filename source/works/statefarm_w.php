

<?php include '../includes/web-interactive.php'; ?>


<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">


    <h3 class="margintop10">GRAPHIC DESIGN <br/> WEB + INTERACTIVE</h3>
        
        <h3 class="margintop20"><strong>State Farm</strong><br/>
        Rebrand Campaign and Advertising</h3>
        
    <p class="margintop10">In this project, I took the challenge to transform the old looking State Farm into something new, reflecting the current growth of State Farm as a financial institution. I made the State Farm looks fresh while also keeping attention to the enduring State Farm's value that State Farm will always be there.</p>
    <p><a href="http://richardtirta.com/work/statefarm/en/index.php" target="_new">Go to website</a></p>
        
        <div class="gallery_icons">
        <img class="left marginright10" src="../images/ui/id_icon.png" width="25" height="25" alt="InDesign" title="InDesign">
        <img class="left marginright10" src="../images/ui/ai_icon.png" width="25" height="25" alt="Illustrator" title="Illustrator">
        <img class="left marginright10" src="../images/ui/ps_icon.png" width="25" height="25" alt="Photoshop" title="Photoshop">
        <img class="left marginright10" src="../images/ui/dw_icon.png" width="25" height="25" alt="Dreamweaver" title="Dreamweaver"><br/>
        <img class="left marginright5" src="../images/ui/html_icon.png"  height="25" alt="HTML/CSS" title="HTML/CSS">
        <img class="left marginright5" src="../images/ui/jquery_icon.png"  height="25" alt="jQuery" title="jQuery">
        <div class="clear"></div>
        </div>
               
         <p class="margintop20"><a href="simplybooks.php">Next Project</a></p>

</div>

<div class="left">
<div class="gallery_image margintop20">
	<p>Website Landing Page</p>
  	<img src="../images/gallery/statefarm/02.jpg" alt="statefarm">  
	<p>Poster Spread</p>
	<img src="../images/gallery/statefarm/01.jpg" alt="statefarm">
    <img src="../images/gallery/statefarm/01b.jpg" alt="statefarm">
      
</div>

<div class=" gallery_video margintop20 marginbot20">
	<p>Mobile web apps documentation</p>
    <iframe src="http://player.vimeo.com/video/42264689?byline=0&amp;portrait=0" width="500" height="234" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    
</div>

</div>    
    
    
</div> <!--project end-->
</div>
</section>

  
  <div class="clear"></div>
    

</div>
   
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/modernizr-2.5.3.js"></script>
<script type="text/javascript" src="../js/fitvids.js"></script>


<script type="text/javascript">

 $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".gallery_video").fitVids();
  });

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
