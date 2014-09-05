

<?php include '../includes/photography.php'; ?>


<div class="project_wrapper margintop100">
<div class="left gallery_desc">

    <h6 class="margintop10">PHOTOGRAPHY</h6>
        
        <h6 class="margintop20">The Birth of Venus<br/>
        Photo Project</h6>
        
    <p class="margintop10">The Birth of Venus is a part of my further exploration into a photography world, guided by the professional photographer Arden (De ardenos).
Taken at the Crissy Field (East Beach) of San Francisco, the collection of the images gain inspiration from the concept of Venus Anadyomene (Venus Rising From the Sea), a popular theme in the western art history.</p>
        
        <div class="gallery_icons">
        <img class="left marginright10" src="../images/ui/photo_icon.png" width="35" height="25" alt="Photography" title="Photography">
        <img class="left marginright10" src="../images/ui/id_icon.png" width="25" height="25" alt="InDesign" title="InDesign">
         <div class="clear"></div>
        </div>
         <p class="margintop20"><a href="oudestad.php"  >Next Project</a></p>
</div>




    <div class="left gallery_video">
    <iframe id="flickr" align="center" src="http://www.flickr.com/slideShow/index.gne?group_id=&user_id=66521928@N06&set_id=&text=" frameBorder="0" width="700" height="700" scrolling="no"></iframe><br/>
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
var imageWidth = $("#flickr").width();



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
