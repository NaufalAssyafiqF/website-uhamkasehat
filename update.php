<?php
include 'config/controller.php';
//mengambil id_pasien dari url
$no = (int) $_GET['no'];

$data = select("SELECT * FROM pasien WHERE no = $no")[0];

function update_pasien($post)
{
    global $db;

    $no = $_POST['no'];
    $id_pasien = $_POST['idPasien'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $tanggalLahir = $_POST['tanggal_checkup'];
    $pelayanan = implode(", ", $_POST['pelayanan']);
    $domisili = $_POST['domisili'];

    $query = "UPDATE pasien SET id_pasien='$id_pasien', nama_pasien='$nama', jenis_kelamin='$kelamin',
     tgl_checkup='$tanggalLahir', pelayanan='$pelayanan', domisili='$domisili' WHERE no='$no          '";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

if (isset($_POST['update'])) {
    
    if (update_pasien($_POST) > 0) {
        echo "<script>
        alert('data pasien berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data pasien gagal diubah');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UHAMKA SEHAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header -->
    <div class="text-center">
        <img src="assets/uhamakasehat.png" alt="" style="width: 150px;">
        <h1>Update Data Pasien</h1>
    </div>

    <!-- FORM UPDATE START -->
    <div class="container pt-3">
        <form action="" method="POST">

            <table>
                <input type="hidden" name="no" value="<?= $data['no']; ?>">

                <tr>
                    <td>ID Pasien : </td>
                    <td> <input type="text" id="nama" name="idPasien" value="<?= $data['id_pasien']; ?>"
                            class="form-control" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" id="nama" name="nama" class="form-control" placeholder=""
                            value="<?= $data['nama_pasien'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>

                        <input type="radio" id="cowok" class="form-check-input" name="kelamin" value="Laki-laki">
                        <label for="cowok" class="form-check-label">laki-laki</label>


                        <input type="radio" id="cewek" class="form-check-input" name="kelamin" value="Perempuan">
                        <label for="cewek">perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal CheckUp : </td>
                    <td><input type="date" name="tanggal_checkup" class="form-control" id="tanggal-lahir"
                            value="<?= $data['tgl_chekup'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>Pelayanan : </td>
                    <td>
                        <input type="checkbox" id="konsultasiDokter" name="pelayanan[]" value="Konsultasi Dokter">
                        <label for="html">konsultasi Dokter</label>
                        <input type="checkbox" id="PelayananObat" name="pelayanan[]" value="Pelayanan Obat">
                        <label for="CSS">Pelayanan Obat</label>
                        <input type="checkbox" id="RawatInap" name="pelayanan[]" value="Rawat Inap">
                        <label for="javascript">Rawat Inap</label>
                    </td>
                </tr>
                <tr>
                    <td>Domisili : </td>
                    <td>
                        <select name="domisili" id="domisili">
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Depok">Depok</option>
                            <option value="tanggerang">Tanggerang</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Luar JABODETABEK">Luar JABODETABEK</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="text-center">

                <input class="btn btn-primary" type="submit" name="update" id="update" placeholder="simpan">
            </div>


        </form>


    </div>
    <!-- FORM UPDATE END -->

    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>