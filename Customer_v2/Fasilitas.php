<?php
  $qry = "SELECT * FROM fasilitas";
  $do = mysqli_query($conn, $qry);
  
?>
  <style type="text/css">
    .listings ul.properties_list li .fas{
    position: absolute;
    top: 10px;
    left: 160px;
    padding: 15px 20px;
    background: #e0e0eb;
    color: #514d4d;
    font-family: "lato-bold", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 1px;

    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
}

  </style>
  <div align="center">
  <h1 align="center">FACILITIES</h1>
  <hr width="1000px">
  </div>
  <section class="listings">
    <div class="wrapper">
      <ul class="properties_list">
      <?php
        while ($data = mysqli_fetch_array($do)) {
      ?>
        <li>
          <a href="#">
            <img  class="img-circle" width="150" height="150" src="../Admin/Foto_Fasilitas/<?php echo "$data[Foto_Fasilitas]";?>"  alt="" title=""/>
          </a>
          <span class="fas"><?php echo "$data[Nama_Fasilitas]";?></span>
          <div class="property_details">
            <h1>
              <a href="#"><?php echo "$data[Keterangan]";?></a>
            </h1>
          </div>
        </li>
        <?php
          }
        ?>
      </ul>
  </section>  
  