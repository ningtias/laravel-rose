<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rosita Website</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
    .banner {
  background: url("baground.JPG")
    no-repeat center center;
  background-size: cover;
  padding-top: 20%;
  padding-bottom: 20%;
  color: #fff;
}

.lingkaran {
  display: inline-block;
  border-radius: 50%;
  width: 150px;
  margin: auto;
  height: 150px;
  color: #fff;
  background-color: grey;
}

.lingkaran i {
  position: relative;
  top: 30px;
}

.crop-img {
  object-fit: cover;
}

.tim img {
  width: 250px;
  border: 10px solid #cccccc;
}

a.social {
  display: inline-block;
  width: 40px;
  height: 40px;
  color: #fff;
  border-radius: 50%;
  background-color: #333;
  line-height: 40px;
}

.client img {
  height: auto;
  max-height: 50px;
}

.kontak {
  background: url("baground.JPG") no-repeat
    center center;
  background-size: cover;
  padding-bottom: 20%;
  padding-top: 20%;
  color: #fff;
}
</style>
  </head>
  <body>
    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Profile Rosita</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#layanan">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tentang">Fav</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#staff">BF</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">Selamat Datang di Website Rosita</h4>
        <h3 class="display-1">Annyeonghaseyo</h3>
        <a href="#layanan">
          <button type="button" class="btn btn-danger btn-lg">
            Cek Beranda
          </button>
        </a>
      </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan"></h2>
        <p>
          
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-home fa-5x"></i></span>
            <h3 class="mt-3">Rumah</h3>
            <p>
              Karangsono-Sukorejo
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-laptop fa-5x"></i></span>
            <h3 class="mt-3">Hoby</h3>
            <p>
              Nonton Drakor & KPOP
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-school fa-5x"></i
            ></span>
            <h3 class="mt-3">Sekolah</h3>
            <p>
              SMKN 1 PURWOSARI
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="portofolio">Me and My Friends</h2>
        <p>
          
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="me.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Rose Rosita</h5>
                <p class="card-text">

                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="babi.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">M Syachrul R</h5>
                <p class="card-text">

                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="bestie.JPG"
                "
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Siti Aisyah</h5>
                <p class="card-text">

                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="tias.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Wahyuning Tias</h5>
                <p class="card-text">

                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="nabila.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Nabila Aulia</h5>
                <p class="card-text">
.
                </p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="kocor.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Rinda Lestari</h5>
                <p class="card-text">

                </p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="bibil.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Nabila Dwi S</h5>
                <p class="card-text">

                </p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="rena.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Cicha Ayu R</h5>
                <p class="card-text">

                </p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="malika.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Riska Adinda D</h5>
                <p class="card-text">

                </p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="neli.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Cornelia Tamaya F</h5>
                <p class="card-text">

                </p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="cika.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Ishikana Erika Y</h5>
                <p class="card-text">

                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="gladis.JPG"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Gladis Aura N</h5>
                <p class="card-text">

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
      <h2 class="display-3 text-center" id="tentang">TREASURE</h2>
        <p class="text-center">
          My Favorite Boyband Group
        </p>
        <div class="clearfix pt-5">
          <img
            src="trejo.JPG"
            class="col-md-6 float-md-end mb-3 crop-img"
            width="300"
            height="300"
          />
        </div>
      </div>
    </div>
    <!-- tim -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="staff">Introducing My Boyfriend</h2>
        <p>
          
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img
              src="asahi.JPG"
              class="rounded-circle mb-3"
            />
            <h4>Hamada Asahi</h4>
            <p>Boyfriend Pertama</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="jaehyuk.JPG"
              class="rounded-circle mb-3"
            />
            <h4>Yoon Jaehyuk</h4>
            <p>Boyfriend Kedua</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="haruto.jpg"
              class="rounded-circle mb-3"
            />
            <h4>Watanabe Haruto</h4>
            <p>Boyfriend Ketiga</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Client -->
    <div class="container-fluid client pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          <div class="col">
            <img
              src="yg.PNG"
            />
          </div>
          <div class="col">
            <img
              src="treasure.JPG"
            />
          </div>
          <div class="col">
            <img src="ikonic.JPG" />
          </div>
          <div class="col">
            <img
              src="weverse.PNG"
            />
          </div>
          <div class="col">
            <img
              src="vlive.JPG"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Saya</h2>
        <p class="text-center">
          Silahkan Isi Kolom Yang Tersedia Untuk Meninggalkan Pesan
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Nama"
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Email"
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="No. Phone"
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <button type="button" class="btn btn-danger btn-lg">
            Kirim Pesan
          </button>
        </div>
      </div>
    </div>
    <div class="container text-center pt-5 pb-5">
      All Rights Reserved &copy; 2021
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
