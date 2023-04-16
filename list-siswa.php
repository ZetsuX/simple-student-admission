<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PPDB | Jayasu High School</title>
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

    <div class="container w-75 mt-4 py-3">
        <h2 class="mb-4 text-center">Registered Students List</h2>
        <a class='mb-4 btn btn-success text-decoration-none' href='form-daftar.php'>Register New Student</a>
        <table class="table border-success">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Religion</th>
                <th scope="col">Previous School</th>
                <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = mysqli_query($db, "SELECT * FROM calon_siswa");

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo '<th scope="row">'.$siswa['id'].'</th>';
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";

                    echo "<td>";
                    echo "<a class='btn btn-primary text-decoration-none mx-1' href='form-edit.php?id=".$siswa['id']."'>Edit</a>";
                    echo "<a class='btn btn-danger text-decoration-none' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <h4 class="text-center text-success rounded">Total: <?php echo mysqli_num_rows($query) ?></h4>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>