{{-- index --}}
@extends('index')

{{-- About --}}
  <section id="about">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col-md">
          <h3 style="font-family: 'Roboto', sans-serif" data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-delay="150">Tentang Saya</h3>
        </div>
      </div>
      <div class="row justify-conten-center text-center fs-5 " data-aos="fade-down" data-aos-easing="linear" data-aos-delay="50">
        <div class="col">
          <p>{{ $title }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3"  data-aos="fade-right" data-aos-delay="350">
          <div class="card">
            <img src="img/me.jpeg" class="card-img-top">
            <div class="card-body">
              <p class="card-text" style="font-family: 'Roboto', sans-serif;"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-delay="450">
          <div class="card">
            <img src="img/me2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-family: 'Roboto', sans-serif;"></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3"  data-aos="fade-right" data-aos-delay="550">
          <div class="card">
            <img src="img/pic.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-family: 'Roboto', sans-serif;"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Akhir about --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>