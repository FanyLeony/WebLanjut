@extends('index')

   <!-- Contact -->
 <section id="kontak" data-aos="fade-up"
  data-aos-duration="13000">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Hubungi Saya!</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
        <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Nama">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="@gmail.com">
            </div>
            <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Kirim</button>
        </form>
        </div>
      </div>
    </div>
  </section>
<!-- Akhir contact -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
</body>
</html>