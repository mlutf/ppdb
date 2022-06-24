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
                <h2>Formulir Pendaftaran PPDB <br> SMK Semangat 45 <br>2022/2023</h2>
            </div>
            <div class="mb-5">
                <a href="{{url('register')}}" class="btn btn-warning">Kembali</a>
            </div>
            <div class="card">
            <div class="card-body shadow-lg">
                
           
            <div class="col-10">
            <form action="{{ route('register.update',$register->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama Lengkap</strong>
                    <input type="text" name="namalengkap" class="form-control" value="{{$register->namalengkap}}" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Jenis kelamin</strong>
                    <select class="form-control" name="jk" id="">
                        <?php
                            $jk = $register->jk;
                            if($jk == 'P'){
                                $jk = "Perempuan";
                            }else{
                                $jk = "Laki-laki";
                            }
                        ?>
                        <option value="{{$register->jk}}">{{$jk}}</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    </div>
            </div>
           
           
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <textarea name="alamat" id=""  class="form-control" cols="5" rows="5">{{$register->alamat}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Agama</strong>
                    <select class="form-control" name="agama" id="">
                        <option disabled selected>{{$register->agama}}</option>
                       <option value="Islam">Islam</option>
                       <option value="Kristen">Kristen</option>
                       <option value="Hindu">Hindu</option>
                       <option value="Budha">Budha</option>
                       <option value="Kongucu">Kongucu</option>
                       <option value="Protestan">Protestan</option>
                   </select>
                    <!-- <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{$register->agama}}"> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Asal Sekolah</strong>
                    <input type="text" name="asalsmp" class="form-control" placeholder="Asal Sekolah" value="{{$register->asalsmp}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Jurusan</strong>
                    <select class="form-control" name="jurusan">
                             
                    @foreach($jurusan as $jurusan)
                            <option value="{{$jurusan->jurusan}}" {{$register->jurusan==$jurusan->jurusan? 'selected':null}}>{{$jurusan->jurusan}}</option>
                            @endforeach
                    </select>
                    </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center my-5">
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        
    </form>
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
  </body>
</html>