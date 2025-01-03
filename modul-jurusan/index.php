<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project IS62</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <?php
        include_once('../navbar.php');
    ?>
    <div class="container mt-5 col-8">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="float-start">
                    Sistem Informasi Mahasiswa
                </h3>
                <span>
                    <a href="" class="btn btn-primary float-end">
                        <i class="fa-solid fa-circle-plus"></i> Tambah Data
                    </a>
                </span>
            </div>
            <div class="card-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a class="btn btn-info btn-sm" href=""><i class="fa fa-pen-to-square"></i></a>
                                <a class="btn btn-danger btn-sm" href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>