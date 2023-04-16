<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PPDB Edit | Jayasu High School</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" data-bs-theme="dark" style="background-color: #19543E;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="./assets/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                PPDB Jayasu High School
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-right ms-auto flex-nowrap">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="form-daftar.php">Register</a>
                <a class="nav-link active" aria-current="page" href="#">Admin</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container w-50 mt-4 py-3 border rounded">
        <h2 class="mb-4 text-center">Student Data Edit</h2>
        <form action="proses-edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="nama" placeholder="Enter your full name.." value="<?php echo $siswa['nama'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="alamat" placeholder="Enter your home address.." value="<?php echo $siswa['alamat'] ?>" required>
            </div>

            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="maleRadio" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? "checked": "" ?>>
                <label class="form-check-label" for="maleRadio">
                    Male
                </label>
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="femaleRadio" <?php echo ($siswa['jenis_kelamin'] == 'perempuan') ? "checked": "" ?>>
                <label class="form-check-label" for="femaleRadio">
                    Female
                </label>
            </div>

            <label for="agama">Agama</label>
            <select class="mb-3 form-select" name="agama">
                <option <?php echo ($siswa['agama'] == 'Atheis') ? "selected": "" ?>>Atheis</option>
                <option <?php echo ($siswa['agama'] == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($siswa['agama'] == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($siswa['agama'] == 'Katolik') ? "selected": "" ?>>Katolik</option>
                <option <?php echo ($siswa['agama'] == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($siswa['agama'] == 'Buddha') ? "selected": "" ?>>Buddha</option>
                <option <?php echo ($siswa['agama'] == 'Konghucu') ? "selected": "" ?>>Konghucu</option>
            </select>

            <div class="mb-4">
                <label for="inputSekolahAsal" class="form-label">Previous School</label>
                <input type="text" class="form-control" id="inputSekolahAsal" name="sekolah_asal" placeholder="Enter your previous school name.." value="<?php echo $siswa['sekolah_asal'] ?>" required>
            </div>

            <button type="submit" class="btn btn-success" name="simpan">Save</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>