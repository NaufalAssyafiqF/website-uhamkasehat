<?php
include 'config/controller.php';
function tambah_pasien($post)
{
    global $db;

    // $nama = $_POST['nama'];
    // $kelas = $_POST['kelas'];
    $idPasien = $_POST['idPasien'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $pelayanan = implode(", ", $_POST['pelayanan']);
    $domisili = $_POST['domisili'];

    $query = "INSERT INTO pasien VALUES(NULL,'$idPasien', '$nama','$kelamin', '$tanggalLahir', '$pelayanan', '$domisili');";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

if (isset($_POST['tambah'])) {

    if (tambah_pasien($_POST) > 0) {
        echo "<script>
        alert('data pasien berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data pasien gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}

// if (isset($_POST['delete'])){
//     $searchNama = $_POST['searchNama'];
//     $data_pasien = select("SELECT * FROM pasien WHERE nama_pasien LIKE '%$searchNama%';");
//     echo "<script>
//     document.location.href = 'pasien.php';
//     </script>";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UHAMKA SEHAT</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;1,700&display=swap"
        rel="stylesheet">
    <!-- BOOTSTRAP STYLE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- DATATABLES -->
    <link rel="stylesheet" href="datatables/datatables.css">

</head>

<body onload="home();">

    <div class="container-home">
        <!-- SIDEBAR START -->
        <div class="sidebar">
            <div class="header">
                <div class="ilustration">
                    <img src="assets/uhamakasehat.png" alt="" width="200px">
                </div>
            </div>

            <div class="main">
                <div class="list-item">
                    <a onclick="home();" href="#">
                        <img src="assets/home.png" alt="" class="icon" width="25px">
                        <span class="description">Home</span>
                    </a>
                </div>
                <div class="list-item">
                    <a onclick="artikel();" href="#">
                        <img src="assets/article.png" alt="" class="icon" width="25px">
                        <span class="description">Artikel</span>
                    </a>
                </div>
                <div class="list-item">
                    <a onclick="pasien();" href="#">
                        <img src="assets/patient.png" alt="" class="icon" width="25px">
                        <span class="description">Data Pasien</span>
                    </a>
                </div>
                <div class="list-item">
                    <a onclick="dokter();" href="#">
                        <img src="assets/doctor.png" alt="" class="icon" width="25px">
                        <span class="description">Data Dokter</span>
                    </a>
                </div>
                <!-- <div class="list-item">
                    <a href="">
                        <img src="assets/logout.png" alt="" class="icon" width="25px">
                        <span class="description">Logout</span>
                    </a>
                </div> -->
            </div>
        </div>
        <!-- SIDEBAR END -->

        <!-- CONTENT START -->
        <div class="main-content" id="content">

        </div>
        <!-- CONTENT END -->
    </div>

    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script src="datatables/datatables.js"></script>
    <script>
        function home() {
            $(document).ready(function () {

                $("#content").load("home.php");
            });
        }

        function artikel() {
            $(document).ready(function () {

                $("#content").load("artikel.php");
            });
        }

        function pasien() {
            $(document).ready(function () {

                $("#content").load("pasien.php");

            });
        }

        function dokter() {
            $(document).ready(function () {

                $("#content").load("dokter.php");
            });
        }

        // $(document).ready(function () {
        //             $('#data_pasien').DataTable();
        //         });
    </script>

</body>

</html>