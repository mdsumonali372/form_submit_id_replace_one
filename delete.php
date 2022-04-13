<?php 
if(file_exists(dirname(__FILE__)."./config.php")){
    require_once(dirname(__FILE__)."./config.php");
};

$dlt  = $_REQUEST['id'];

$dltsqli  = "DELETE FROM reginfo WHERE ID = $dlt";

$finaldltsqli = mysqli_query($conn, $dltsqli);

if($finaldltsqli == TRUE){
    echo "Data Deleted";
    header('Location: result.php?deleted');
}else{
    echo 'Data not delete';
}


?>
