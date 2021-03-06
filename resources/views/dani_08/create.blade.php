@extends('dani_08.layout')
 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Sekolah
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="{{ route('sekolah.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label> 
                        <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > 
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label> 
                        <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" > 
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label> 
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email" > 
                    </div>
                    <div class="form-group">
                        <label for="notelp">No Telp</label> 
                        <input type="notelp" name="notelp" class="form-control" id="notelp" aria-describedby="notelp" > 
                    </div>
                    <div class="form-group">
                        <label for="jumlahsiswa">Jumlah Siswa</label> 
                        <input type="jumlahsiswa" name="jumlahsiswa" class="form-control" id="jumlahsiswa" aria-describedby="jumlahsiswa" > 
                    </div>
                    <div class="form-group">
                        <label for="akreditasi">Akreditasi</label> 
                        <input type="akreditasi" name="akreditasi" class="form-control" id="akreditasi" aria-describedby="akreditasi" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection