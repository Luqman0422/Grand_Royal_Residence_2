    <?php
    include "../connectdb.php";
    $id = $_GET['dat'];
    $query = "SELECT * FROM fasilitas WHERE ID_Fasilitas='".$id."'";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($conn,$sql); 
    if(is_file("../Foto_Fasilitas/".$data['Foto']))
    	unlink("../Foto_Fasilitas/".$data['Foto']);
    $query2 = "DELETE FROM fasilitas WHERE ID_Fasilitas='".$id."'";
    $sql2 = mysqli_query($conn, $query2);
    if($sql2){
    header("location: ../index.php?mod=datarumah");
    }else{  
    	echo "Data gagal dihapus. <a href='editfas.php'>Kembali</a>";}
    ?>