<?php
include 'config/controller.php';
$data_pasien = select("SELECT * FROM pasien");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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



<body>


    <div class="container">
        <!-- header -->
        <div class="text-center">
            <img src="assets/uhamakasehat.png" alt="" style="width: 150px;">
            <h1>Data Pasien</h1>
        </div>

        <!-- buttons -->
        <div class="text-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inputData"><i
                    class="fa-solid fa-plus pe-2"></i>Tambah data</button>
        </div>
        <!-- <div class="text-end pt-4">
            <form action="" method="POST">
                <input type="text" name="searchNama" placeholder="masukan nama" id="inputDelete">
                <button type="" name="delete" id="delete" onclick="simpanData()" class="btn btn-success"><i class="fa-solid fa-magnifying-glass pe-2"></i>Cari
                    data</button>
            </form>
        </div> -->

        <!-- TABLE START -->
        <div class="pt-4">
            <table id="data_pasien" class="table table-dark table-hover table-bordered border-white">
                <thead>
                    <tr class="table-active">
                        <th scope="col">ID Pasien</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">TGL CheckUp</th>
                        <th scope="col">Pelayanan</th>
                        <th scope="col">Domisili</th>
                        <th scope="col"><i class="fa-solid fa-gear"></i> Ubah/Hapus</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_pasien as $pasien): ?>
                        <tr class="table-active">
                            <td>
                                <?= $pasien['id_pasien'] ?>
                            </td>
                            <td>
                                <?= $pasien['nama_pasien'] ?>
                            </td>
                            <td>
                                <?= $pasien['jenis_kelamin'] ?>
                            </td>
                            <td>
                                <?= $pasien['tgl_checkup'] ?>
                            </td>
                            <td>
                                <?= $pasien['pelayanan'] ?>
                            </td>
                            <td>
                                <?= $pasien['domisili'] ?>
                            </td>
                            <td class="text-center">

                                <a href="update.php?no=<?= $pasien['no']; ?>" class="btn btn-primary"><i
                                        class="fa-solid fa-pen-to-square pe-2"></i></a>
                                <a href="delete.php?no=<?= $pasien['no']; ?>" class="btn btn-danger"
                                    onclick="return confirm('data akan dihapus, tekan ok bila setuju')"><i
                                        class="fa-solid fa-trash pe-2"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- TABLE END -->
    </div>

    <!-- MODAL ADD START-->
    <div class="modal fade" id="inputData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <!-- <label for="">nama</label>
                        <input type="text" name="nama" id="nama">
                        <label for="">kelas</label>
                        <input type="text" name="kelas" id="kelas">
                        <input type="submit" id="tambah" name="tambah" placeholder="simpan"> -->

                        <!-- <form action="" method="POST"> -->
                        <table>
                            <tr>
                                <td>ID Pasien : </td>
                                <td> <input type="text" id="nama" name="idPasien" class="form-control" placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama : </td>
                                <td><input type="text" id="nama" name="nama" class="form-control" placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin : </td>
                                <td>

                                    <input type="radio" id="cowok" class="form-check-input" name="kelamin"
                                        value="Laki-laki">
                                    <label for="cowok" class="form-check-label">laki-laki</label>


                                    <input type="radio" id="cewek" class="form-check-input" name="kelamin"
                                        value="Perempuan">
                                    <label for="cewek">perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal CheckUp : </td>
                                <td><input type="date" name="tanggalLahir" class="form-control" id="tanggal-lahir">
                                </td>
                            </tr>

                            <tr>
                                <td>Pelayanan : </td>
                                <td>
                                    <!-- <input type="radio" id="cowok" class="form-check-input" name="pelayanan"
                                        value="konsultasi dokter">
                                    <label for="cowok" class="form-check-label">Konsultasi Dokter</label>


                                    <input type="radio" id="cewek" class="form-check-input" name="pelayanan"
                                        value="pelayanan obat">
                                    <label for="cewek">Pelayanan Obat</label> -->

                                    <input type="checkbox" id="konsultasiDokter" name="pelayanan[]"
                                        value="Konsultasi Dokter">
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
                        <input class="btn btn-primary" type="submit" name="tambah" id="tambah" placeholder="simpan">
                        <!-- </form> -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <!-- <button type="" name="tambah" class="btn btn-primary">Simpan</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL ADD END -->

    <!-- MODAL UPDATE START -->
    <div class="modal fade" id="updateData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Input Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">

                        <table>

                            <tr>
                                <td>ID Pasien : </td>
                                <td> <input type="text" id="nama" name="idPasien" value="" class="form-control"
                                        placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama : </td>
                                <td><input type="text" id="nama" name="nama" class="form-control" placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin : </td>
                                <td>

                                    <input type="radio" id="cowok" class="form-check-input" name="kelamin"
                                        value="Laki-laki">
                                    <label for="cowok" class="form-check-label">laki-laki</label>


                                    <input type="radio" id="cewek" class="form-check-input" name="kelamin"
                                        value="Perempuan">
                                    <label for="cewek">perempuan</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal CheckUp : </td>
                                <td><input type="date" name="tanggalLahir" class="form-control" id="tanggal-lahir">
                                </td>
                            </tr>

                            <tr>
                                <td>Pelayanan : </td>
                                <td>
                                    <input type="checkbox" id="konsultasiDokter" name="pelayanan[]"
                                        value="Konsultasi Dokter">
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
                        <input class="btn btn-primary" type="submit" name="tambah" id="tambah" placeholder="simpan">
                        <!-- </form> -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL UPDATE END -->

    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
        
    <script type="text/javascript" src="datatables/datatables.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#data_pasien').DataTable();
        });
    </script>
</body>

</html>