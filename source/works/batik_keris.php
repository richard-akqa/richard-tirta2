
<?php include '../includes/web-interactive.php'; ?>

<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">
    
        <h3 class="margintop10">WEB + INTERACTIVE</h3>
            
        <h3 class="margintop20"><strong>Batik Keris</strong><br/>
        Flash Website</h3>
            
        <p class="margintop10">BatikKeris has a lot of beautiful Batik patterns, and I can not let these beautiful patterns go into static pages. I made this website in Flash to put all those patterns into motions and add interactivity to the web.</p>
        <p><a href="http://richardtirta.com/work/batikkeris/" target="_new">Go to website</a></p>
            
            <div class="gallery_icons">
            <img  src="../images/ui/fl_icon.png" width="25" height="25" alt="Flash" title="Flash"><br/>
        	<img  src="../images/ui/as_icon.png"  alt="ActionScript"  title="ActionScript">
            <div class="clear"></div>
            
            </div>
            
            
            
             <p class="margintop20"><a href="statefarm_w.php"  >Next Project</a></p>
    </div>
    
<div class="left">
<div class="gallery_image margintop20">
	<p>Website Landing page</p>
	<img src="../images/gallery/batik/01.jpg" alt="Batik Keris">
    <p>Website Content</p>
  	<img src="../images/gallery/batik/02.jpg" alt="Batik Keris">    
</div>

<div class=" gallery_video margintop20 marginbot20">
	<p>Website documentation</p>
    <iframe src="http://player.vimeo.com/video/42265679?byline=0&amp;portrait=0" width="960" height="540" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
    
      <div class="clear"></div>

</div> <!--project end-->
</div>
</section>
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
