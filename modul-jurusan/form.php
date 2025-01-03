<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
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
                    Data Jurusan
                </h3>
                <span>
                    <a href="" class="btn btn-primary float-end">
                        <i class="fa-solid fa-circle-plus"></i> Tambah Data
                    </a>
                </span>
            </div>
            <div class="card-body">
                <form action="proses.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Jurusan</label>
                        <input type="text" name="kode" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>