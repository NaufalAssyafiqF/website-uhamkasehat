<?php
include 'config/controller.php';

$no = (int)$_GET['no'];

    function delete_pasien($no){
    global $db;

    $query = "DELETE FROM pasien WHERE no=$no;";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

    }


    if (delete_pasien($no)>0){
        echo "<script>
        alert('data pasien berhasil dihapus');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('data pasien gagal dihapus');
        document.location.href = 'index.php';
        </script>";
    }
?>