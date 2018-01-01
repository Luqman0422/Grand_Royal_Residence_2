<?php
	$qry = "SELECT * FROM data_rumah where Type = '$_GET[tipe]'";
	$do = mysqli_query($conn, $qry);
	$data = mysqli_fetch_array($do);
?>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.city {display:none}
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
      <img src="img/site.jpg" style="width:100%">
    </div>
  </div>
