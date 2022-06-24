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
        <div class="row align-items-center mt-5">
            <div class="col-12 text-center mb-5">
                <h2>Daftar siswa/siswi PPDB <br> SMK Semangat 45 <br> 2022/2023</h2>
            </div>
            <div class="col-10">
                <a href="{{route('register.create')}}" class="btn btn-success">Tambah Data</a>
                <a href="{{route('jurusan.index')}}" class="btn btn-primary">Jurusan</a>
            </div>
            <div class="col-12">
                <table class="table table-dark table-striped">
                    <tr>
                        <td>No Daftar</td>
                        <td>Nama Lengkap</td>
                        <td>Jenis Kelamin</td>
                        <td>Alamat</td>
                        <td>Agama</td>
                        <td>Asal Sekolah</td>
                        <td>Jurusan</td>
                        <td>Action</td>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->namalengkap}}</td>
                        <?php
                            $jk = $data->jk;
                            if($jk == 'P'){
                                $jk = "Perempuan";
                            }else{
                                $jk = "Laki-laki";
                            }
                        ?>
                        <td>{{$jk}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->agama}}</td>
                        <td>{{$data->asalsmp}}</td>
                        <td>{{$data->jurusan}}</td>
                        <td>
                            <a href="/register/{{$data->id}}" target="_blank" class="btn btn-secondary">Cetak</a>
                            <a href="{{ route('register.edit',$data->id) }}" class="btn btn-info">Edit</a>
                            <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$data->id}}')"> Delete</div>
                        </td>

                    </tr>
                    @endforeach
                </table>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function fcthapus(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('register/hapus/')}}" + "/" + id;
            }
        })
    }
</script>
</html>