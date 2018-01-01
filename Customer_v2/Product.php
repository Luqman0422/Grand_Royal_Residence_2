s<?php
$qry = "SELECT * FROM data_rumah where Cluster = '$_GET[cluster]'";
$do = mysqli_query($conn, $qry);

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	.city {display:none}
</style>
<style type="text/css">
	.mat {
		width: 300px;
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




<div align="center" style="margin-top: 50px;">
	<h2>CLUSTER <?php echo "$_GET[cluster]"; ?></h2>
	<hr width="100%">
</div>

<section class="listings">
	<div class="wrapper">
		<ul class="properties_list">
			<?php
			while ($data = mysqli_fetch_array($do)) {
				?>
				
				<li class="mat">
					<a href="#">
						<img src="../Admin/images/<?php echo "$data[Foto]";?>" alt="" title="" class="property_img"/>
					</a>
					<span class="price"><?php echo "Rp.$data[Harga]";?></span>
					<div class="property_details" style="width: 100%">
						<button style="float: right;" class="w3-button w3-brown"><a href="index.php?page=Detail&tipe=<?php echo "$data[Type]"; ?>">Details</a></button>
						<h1>
							<a href="#" name="tipe"><?php echo "$data[Type]";?></a>
						</h1>

					</div>

				</li>

				<?php
			}
			?>
		</ul>
	</section>	
	