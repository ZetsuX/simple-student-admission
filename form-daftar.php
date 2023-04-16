<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PPDB Form | Jayasu High School</title>
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
                <a class="nav-link active" aria-current="page" href="#">Register</a>
                <a class="nav-link" href="list-siswa.php">Admin</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container w-50 mt-4 py-3 border rounded">
        <h2 class="mb-4 text-center">New Student Registration</h2>
        <form action="proses-pendaftaran.php" method="POST">
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="nama" placeholder="Enter your full name.." required>
            </div>

            <div class="mb-3">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="alamat" placeholder="Enter your home address.." required>
            </div>

            <label for="jenis_kelamin" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="maleRadio" checked>
                <label class="form-check-label" for="maleRadio">
                    Male
                </label>
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="femaleRadio">
                <label class="form-check-label" for="femaleRadio">
                    Female
                </label>
            </div>

            <label for="agama">Religion</label>
            <select class="mb-3 form-select" name="agama">
                <option selected>Atheis</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
                <option>Konghucu</option>
            </select>

            <div class="mb-4">
                <label for="inputSekolahAsal" class="form-label">Previous School</label>
                <input type="text" class="form-control" id="inputSekolahAsal" name="sekolah_asal" placeholder="Enter your previous school name.." required>
            </div>

            <button type="submit" class="btn btn-success" name="daftar">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>