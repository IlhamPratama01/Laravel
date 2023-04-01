<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


  <body>
    <center>
    <div cclass="container-fluid">    
    <h3 style="margin-top: 20px;">Operasi CRUD </h3>
    <h3>Sistem Informasi Akademik</h3>
    <h3>Universitas Duta Bangsa</h3><br><br>
</center>
    </div>
<div class="my-3 p-3 bg-body rounded shadow-sm">

        <div class="btn-group">
            <a href="/tambah" class="btn btn-primary" style="margin-left: 10px;"> + Mahasiswa Baru</a><br>
            <a href="/mahasiswa/cetak_pdf" class="btn btn-primary" style="margin-left: 5px;" target="blank">Cetak PDF</a>
            <a href="/mahasiswa/export_excel" class="btn btn-primary" style="margin-left: 5px;" target="blank">Export EXCEL</a>
        </div>
                <br><br> 

        <table class="table table-dark table-striped" >
            <thead>
                 <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th> 
                    <th>Nomor HP</th>
                    <th>Opsi</th>
                 </tr>
             </thead>
              @foreach ($data as $mahasiswa)
        <tr>
            <tbody>
            <td>{{ $mahasiswa->nim }}</td> 
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->hp }}</td>
            <td>
                <a class="btn btn-success" href='/mahasiswa/ubah/{{ $mahasiswa->nim }}'>Edit</a> |

                    @method('delete')
                    {{ csrf_field() }}
                <a class= "btn btn-danger" onClick="return confirm('Anda yakin ingin menghapus data ini ?')" href="/hapus/{{ $mahasiswa->nim }}"><i class="fa fa-trash"></i>Hapus</a>
            </td>
        </tr> 
            @endforeach
        </tbody>
        </body>
        </table>
</div>
</html>