

<?php include '../includes/photography.php'; ?>


<div class="project_wrapper margintop100">
<div class="left gallery_desc">

    <h3 class="margintop10">PHOTOGRAPHY</h3>
        
        <h3 class="margintop20"><strong>The Birth of Venus</strong><br/>
        Photo Project</h3>
        
    <p class="margintop10">The Birth of Venus is a part of <br/>my further exploration into a photography world, guided by the professional photographer Arden (De ardenos).
Taken at the Crissy Field (East Beach) of San Francisco, the collection of the images gain inspiration from the concept of Venus Anadyomene (Venus Rising From the Sea), a popular theme in western <br/>art history.</p>
        
        <div class="gallery_icons">
        <img class="left marginright10" src="../images/ui/photo_icon.png" width="35" height="25" alt="Photography" title="Photography">
        <img class="left marginright10" src="../images/ui/id_icon.png" width="25" height="25" alt="InDesign" title="InDesign">
         <div class="clear"></div>
        </div>
         <p class="margintop20"><a href="overseas.php"  >Next Project</a></p>
</div>




    <div class="left gallery_video">
    <object id="myWidget" type="application/x-shockwave-flash" data="http://www.blurb.com/assets/embed.swf?book_id=2455425&locale=en_US" width="1000" height="600"><param name="allowFullScreen" value="true"></param><param name="wmode" value="transparent"></param><param name="allowScriptAccess" value="always"></param><param name="movie" value="http://www.blurb.com/assets/embed.swf?book_id=2455425&locale=en_US"></param><iframe src="http://www.blurb.com/books/2455425#" width="1000" height="600" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></a></object>
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
	(".gallery_video").fitVids();
   
  });

$(window).load(function() {



var windowWidth = $(window).width();
var imageWidth = $("#myWidget").width();



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
