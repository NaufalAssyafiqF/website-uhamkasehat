<?php
include 'config/controller.php';
$data_dokter = select("SELECT * FROM dokter");

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
        <div class="text-center">
            <img src="assets/uhamakasehat.png" alt="" style="width: 150px;">
            <h1>Data Dokter</h1>
        </div>

        <!-- TABLE START -->
        <div class="pt-4">
            <table id="data_dokter" class="table table-dark table-hover table-bordered border-white">
                <thead>
                    <tr class="table-active">
                        <th scope="col">ID Dokter</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Domisili</th>
                        <th scope="col">Spesialis</th>
                        <th scope="col">Waktu Praktik</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_dokter as $dokter): ?>
                        <tr class="table-active">
                            <td><?= $dokter['id_dokter'] ?></td>
                            <td>
                                <?= $dokter['nama_dokter'] ?>
                            </td>
                            <td><?= $dokter['domisili'] ?></td>
                            <td>
                                <?= $dokter['speasilis'] ?>
                            </td>
                            <td><?= $dokter['praktik'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- TABLE END -->
    </div>
    </div>
    
    <script type="text/javascript" src="datatables/datatables.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#data_dokter').DataTable();
        });
    </script>
    
</body>

</html>