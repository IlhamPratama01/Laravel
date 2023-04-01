<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

  <body>
    
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
        </style>
        <center>
            <h5> Membuat Laporan  PDF Dengan DOMPDF Laravel </h5>
            <h5> Data Mahasiswa Universitas Duta Bangsa Surakarta</h5>
        </center>>

        <table class="table table-borded" >
            <thead>
                 <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th> 
                    <th>Alamat HP</th>
                    <th>Telepon</th>
                 </tr>
             </thead>
             <tbody>
                
                @php $i=1 @endphp
              @foreach ($mhs as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $p->nim }}</td> 
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->hp }}</td>
        </tr> 
            @endforeach
        </tbody>
        </table>
    </body>
</html>