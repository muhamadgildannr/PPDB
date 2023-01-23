@extends('main')

@section('content')

@if (Auth::user()->role == 'admin')
    <div class="container">
        <div class=" text-center mt-5 ">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card mt-2 mx-auto bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <div class="controls">
                                    <div class="row">
                                        <div class="d-flex">
                                            <div class="kiri">
                                                <h4>Admin</h4>
                                            </div>
                            
                                            <div class="kanan" style="margin-left: 875px;">
                                                <p>Dashboard</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>

    <div class="justify">
        <i style="font-size: 35px;"  class="fa-solid fa-minus"></i>
    </div>

    <div class="dustify">
    <h5>Hi, {{ Auth::user()->name }}!</h5>
        <p class="text-secondary">Selamat Datang</p>
    </div>

    <div class="row" style="margin-top: 20px; margin-right: 20px;">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-bodyx">
                    <div class="rounded shadow p-1 bg-dark"></div><br>
                          <div class="nav-user-profile text-center">
                            <div class="app-card alert alert-dismissible shadow-sm mb-4 " style="margin-top: 50px; width:500px; margin-left:50px">
                                <p>Detail Pendaftaran siswa: {{$detailUser->nama_lengkap}}</p>
                                <div>
                                    <div class="app-card-body p-3 p-lg-4">
                                        <div class="row gx-5 gy-3">
                                            <div class="col-12 col-lg-9">
                                               <ul>
                                                <li>NISN: {{$detailUser->nisn}}</li>
                                                <li>Nama Siswa: {{$detailUser->name}}</li>
                                                <li>Jenis Kelamin: {{$detailUser->jk}}</li>
                                                <li>Asal Sekolah:{{$detailUser->asal_sekolah}}</li>
                                                <li>Email: {{$detailUser->email}}</li>
                                                <li>No HP:{{$detailUser->no_hp}}</li>
                                                <li>No HP Ayah:{{$detailUser->no_hp_ayah}}</li>
                                                <li>No HP Ibu:{{$detailUser->no_hp_ibu}}</li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                          <div class="=ml-md-2">
                            <a href="{{'/dashboard/pembayaran'}}"><i class="fa-solid fa-arrow-left mr-2"></i>Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endif

{{-- admin penutup --}}

@endsection
