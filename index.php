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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="form-daftar.php">Register</a>
                <a class="nav-link" href="list-siswa.php">Admin</a>
            </div>
            </div>
        </div>
    </nav>

    <div>
        <div id="carouselio" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselio" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselio" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="./assets/curicculum.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Well-constructed Curriculum</h5>
                    <p>Our curriculum is mainly constructed to indulge students to become proactive</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="./assets/facility.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fully-facilitated Academy</h5>
                    <p>We provide top-class facilities for our student&apos;s learning experience</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="./assets/teacher.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Competent Educators</h5>
                    <p>Only the finest and competent educators are trusted to handle our students</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselio" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselio" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="text-center position-absolute start-50 top-50 translate-middle bg-dark p-5 rounded" style="--bs-bg-opacity: .5;">
        <h1 class="text-light mb-5">What are you waiting for?</h1>
        <a class="btn btn-outline-light py-2 px-4" href="form-daftar.php"><h3 class="fw-light">Register now!</h3></a>
    </div>

    <?php if(isset($_GET['status'])): 
        if($_GET['status'] == 'sukses'){
            echo '<div class="alert alert-success alert-dismissible fade show position-absolute start-50 translate-middle" style="top: 15%" role="alert">
            Student registration successful!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show position-absolute start-50 translate-middle" style="top: 15%" role="alert">
            Student registration failed..
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
    endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const carouselElement = document.querySelector('#carouselio')

        const carousel = new bootstrap.Carousel(carouselElement, {
            interval: 2000,
            touch: false
        })
    </script>
    </body>
</html>