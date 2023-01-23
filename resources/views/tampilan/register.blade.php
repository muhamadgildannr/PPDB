@extends('layout')

@section('content')

<style>
    body {
        background-image: url('assets/img/ppdb/gedungwk.jpg');
        }
</style>

<div class="container">
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        @if (Session::get('success'))
                        <div class="alert alert-success w-75">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        {{-- {{ route('print',$ppdb->nodaftar) }} --}}
                        {{-- {{ route('store') }} --}}
                        <form method="POST" action="{{ route('store') }}">
                            @csrf
                            
                            <h3 align="center" class="landing py-3 "><b>Form Pendaftaran PPDB</b></h3>
                            <p  align="center" class="py-0">SMK Wikrama Bogor TP. 2023-2024</p>
                            <hr>

                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">NISN</label>
                                            <input id="form_name" type="number" name="nisn" class="form-control"
                                                required="required" data-error="Firstname is required." placeholder="Masukan NISN">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Jenis Kelamin</label>
                                            <select name="jk" class="form-control w-100" id="jk" value="" >
                                                <option name="jk" hidden="">Jenis Kelamin</option>
                                                <option name="jk" value="perempuan">Perempuan</option>
                                                <option name="jk" value="laki-laki">Laki-Laki</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Nama</label>
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                 data-error="Firstname is required." placeholder="Nama Lengkap">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Asal Sekolah</label>
                                            <select name="asal_sekolah" class="select2 form-control w-100 ml-0" onchange='checkvalue(this.value)' >
                                                <option name="asal_sekolah" hidden disabled selected>Pilih Asal Sekolah</option>
                                                <option name="asal_sekolah" value="SMPN 1 Ciawi">SMPN 1 Ciawi</option>
                                                <option name="asal_sekolah" value="SMPN 2 Megamendung">SMPN 2 Megamendung</option>
                                                <option name="asal_sekolah" value="Fathan Mubina">Fathan Mubina</option>
                                                <option name="asal_sekolah" value="PGRI 1 Ciawi">PGRI 1 Ciawi</option>
                                                <option name="asal_sekolah" value="SMPN 1 Megamendung">SMPN 1 Megamendung</option>
                                                <option name="asal_sekolah" value="SMPN 1 Bogor">SMPN 1 Bogor</option>
                                                <option name="asal_sekolah" value="SMPN 3 Bogor">SMPN 3 Bogor</option>
                                                <option name="asal_sekolah" value="SMPN 25 Bogor">SMPN 25 Bogor</option>
                                                <option name="asal_sekolah" value="SMPN 9 Bogor">SMPN 9 Bogor</option>
                                                <option name="asal_sekolah" value="SMPN 10 Bogor">SMPN 10 Bogor</option>
                                                <option name="asal_sekolah" value="others">LAINNYA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="other_text" style="display: none">
                                        <div class="form-group">
                                            <label for="asal_sekolah_text">Nama Sekolah</label>
                                            <input type="text" name="asal_sekolah_text" id="asal_sekolah_text" class="form-control"
                                                placeholder="Masukkan Asal Sekolah">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Email</label>
                                            <input id="form_name" type="text" name="email" class="form-control"
                                                required="required" data-error="Firstname is required." placeholder="Masukkan Email" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telp">Nomor Handphone</label>
                                            <input type="text" name="no_hp" id="telp" class="form-control"
                                                placeholder="Contoh : +62---------" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telp-ayah">Nomor HP Ayah</label>
                                            <input type="text" name="no_hp_ayah" class="form-control" id="telp-ayah"
                                                placeholder="Contoh : +62---------" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telp-ibu">Nomor HP Ibu</label>
                                            <input type="text" name="no_hp_ibu" class="form-control" id="telp-ibu"
                                                placeholder="Contoh : +62---------" required>
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                            <div class="form-group"><br>
                                            <button type="submit" id="contactus-submit" class="btn-success btn-lg btn">Submit</button>
                                            <span>Sudah Punya akun? Klik <a class="logres" href="/login" style="text-decoration: underline;">Login</a></span>
                                            <a href="/" class="btn-dark btn-lg btn m-3">Cancel</a>
                                            </div>
                                        </div><br><br>
                                        
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
</div>
