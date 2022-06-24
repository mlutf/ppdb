<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center my-5">
                <h2>Struk Pendaftaran PPDB <br> SMK Semangat 45 <br>2022/2023</h2>
            </div>
            <div class="card">
            <div class="card-body shadow-lg">
                <div class="row">
                    <div class="col-10">
                      <table border="1">
                        <tr>
                            <td>

                              <h3>No Daftar</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>

                              <h3>{{$register->id}}</h3>
                            </td>
                        </tr>

                      </table>
                        <div class="row">
                            
                        <div class="col-4"><h3>Nama Lengkap</h3></div>
                        <div class="col-1"><h3>:</h3></div>
                        <div class="col-5"><h3><b> {{$register->namalengkap}}</b></h3></div>
                        <div class="col-4"><h3>Alamat</h3></div>
                        <div class="col-1"><h3>:</h3></div>
                        <div class="col-5"><h3><b> {{$register->alamat}}</b></h3></div>
                        <div class="col-4"><h3>Agama</h3></div>
                        <div class="col-1"><h3>:</h3></div>
                        <div class="col-5"><h3><b> {{$register->agama}}</b></h3></div>
                        <div class="col-4"><h3>Asal Sekolah</h3></div>
                        <div class="col-1"><h3>:</h3></div>
                        <div class="col-5"><h3><b> {{$register->asalsmp}}</b></h3></div>
                        <div class="col-4"><h3>Jurusan</h3></div>
                        <div class="col-1"><h3>:</h3></div>
                        <div class="col-5"><h3><b> {{$register->jurusan}}</b></h3></div>
                    
                        </div>
                    </div>
                </div>
                
           
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
        window.print();
    </script>
  </body>
</html>