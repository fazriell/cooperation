@extends('layouts.main')

@section('content')
    <h1>Selamat datang di E-Coop</h1>
    <p>E-Coop merupakan koperasi yang menyediakan akses terpusat dan intuitif bagi anggota koperasi untuk mengelola informasi 
    dan aktivitas mereka.</p>
    <div id="carouselExampleInterval" class="carousel slide shadow-lg p-3 mb-1 bg-body rounded" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4" style="color: black">
              <i class="me-3"></i>E-Coop
            </h6>
            <p>
              Dibuat untuk memenuhi tugas UAS Web Frameworks.
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="fw-bold mb-4" style="color: black">Kontak</h6>
            <p><i class="me-3"></i>Jl.Example no.1</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              alraffi16@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +62 87895807256</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color:black" >
      © 2024 Copyright:
      <a class="fw-bold" href="#" style="color:black">ecoop.id</a>
    </div>
  </footer>
@endsection

<style>
    h1, p, a, i{
        text-align: center;
        font-family: monospace;
        color: black;
    }

    body, html {
        text-align: center;
        font-family: monospace;
        background-image: url('img/1.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
