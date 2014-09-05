<!DOCTYPE HTML>
<html class="no-js">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Richard is happy to cross communicate and visualize creative solutions</title>

<link href="../main.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include '../includes/photography.php'; ?>

<div class="project_wrapper margintop100">
<div class="project">
<div class="left gallery_desc">

    <h6 class="margintop10">PHOTOGRAPHY</h6>
        
        <h6 class="margintop20">Oude Stad van Batavia (Old City of Jakarta) Series<br/>
        Photo Project</h6>
        
    <p class="margintop10">This series of photography celebrated the old infrastructure of Jakarta in black and white. The challenge of this project is to create interesting photos from infrastructure or architectural buildings.</p>
        
        <div class="gallery_icons">
        <img class="left marginright10" src="../images/ui/photo_icon.png" width="35" height="25" alt="Photography" title="Photography">
        </div>
        
        <div class="gallery_thumbs nobullet">
        </div>
        
         <p class="margintop20"><a href="corning.php"  >Next Project</a></p>

</div>

<div class="left gallery_image">
        <img src="../images/gallery/photo/oudestad01.jpg"/>
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
