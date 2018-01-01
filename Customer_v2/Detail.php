<?php
	$qry = "SELECT * FROM data_rumah where Type = '$_GET[tipe]'";
	$do = mysqli_query($conn, $qry);
	$data = mysqli_fetch_array($do);
?>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.city {display:none}
		.img-magnifier-container {
  position:relative;
}
.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 200px;
  height: 200px;
}
	</style>
	<style type="text/css">
    .mat {

  	height: auto;
  	display: block;
  	margin: 0;
  	background-color: #A67B5B;
  	background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/cardboard.jpg');
  	background-repeat: no-repeat;
	background-size: cover;
	border: 6px double #483C32;
	box-shadow: 0 0 0 50px rgba(244, 240, 236, 0.4) inset, 0 0 0 0px rgb(180, 130, 90), 0 0 30px rgba(0, 0, 0, 0.8) inset;
	outline: 2px solid #333;
	outline-offset: 0px;
	}
	</style>
	<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>

	
 	<div align="center" style="margin-top: 50px; margin-left: 15">
		<h1>TIPE <?php echo "$data[Type]"; ?></h1>
	</div>

	<section class="listings">
		<div class="wrapper">
			
			<ul class="properties_list">
				
				<li class="mat" style="margin-right: 5px; margin-left: 15px; width: 710px;">
					<img  src="../Admin/images/<?php echo "$data[Foto]";?>" alt="" title="" class="property_img"/>
				</li>
				<li class="mat" style="margin-right: 5px; margin-left: 15px;">
					<img src="../Admin/Denah/<?php echo "$data[Denah]";?>">
				</li>
			</ul>
			<ul class="properties_list">
				
			<li style="margin-right: 5px; margin-left: 15px;">

			  <button onclick="document.getElementById('modal01').style.display='block'">Lihat Siteplan</button>
			  </li>
			  </ul>

			<ul class="properties_list">
				
				<li style="margin-right: 5px; margin-left: 15px; width: 100%;">
					<h2>Harga : Rp.<?php echo "$data[Harga]"; ?>,-</h2>	
				</li>
			</ul>
			<ul class="properties_list">
				
				<li style="margin-right: 5px; margin-left: 15px; width: 100%;">
					<p style="text-decoration: none;"><?php echo "$data[Deskripsi]"; ?></p>	
				</li>
			</ul>
	</section>	

  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div style="width: 80%;" class="w3-modal-content w3-animate-zoom">
    <div class="img-magnifier-container">
      <img src="img/site.jpg" style="width:100%" id="myimage">
     </div>
    </div>
  </div>
  <script>
/* Initiate Magnify Function
with the id of the image, and the strength of the magnifier glass:*/
magnify("myimage", 3);
</script>
