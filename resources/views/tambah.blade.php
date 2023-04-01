<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tambah Data Mahasiswa</title>
  </head>
    <body>
      <center>
        <h3 style="margin-top: 20px;">Halaman Tambah Data Mahasiswa<h/3>
</center>
<br>
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="/mahasiswa" class="btn btn-primary" style="margin-left: 10px;"> Kembali </a>

            <form action="/mahasiswa/store" method="post">
              {{ csrf_field() }}
              <div class="my-3 p-3 bg-body rounded shadow-sm">
                  <div class="mb-3 row">
                      <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name='nim' required="required">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name='nama' required="required">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="jurusan" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name='alamat' required="required">
                      </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label">Nomor Hp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='hp' required="required">
                    </div>
                </div>
              </div>  
            <input type="submit" onclick="alert('Input Mahasiswa Berhasil.')" class="btn btn-primary" style="margin-left: 10px;" value="Simpan Data">     
         
         </form>
</body>
</html>