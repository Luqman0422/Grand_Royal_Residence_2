    <?php
    include "../connectdb.php";
    $Type = $_GET['dat'];
    $query = "SELECT * FROM data_rumah WHERE Type='".$Type."'";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($conn,$sql); 
    if(is_file("../images/".$data['Foto']))
    	unlink("../images/".$data['Foto']);
    $query2 = "DELETE FROM data_rumah WHERE Type='".$Type."'";
    $sql2 = mysqli_query($conn, $query2);
    if($sql2){
    header("location: ../index.php?mod=datarumah");
    }else{  
    	echo "Data gagal dihapus. <a href='editdt.php'>Kembali</a>";}
    ?>