@extends('layouts.app')

@section('content')
             




<div class="container">
    <div class="justify-content-center">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h4 class="alert-heading"><strong>Selamat! Anda berhasil login sebagai admin</strong></h4>
            <hr>
            Pada halaman ini Anda bisa mengubah beberapa data yang telah ditampilan pada homepage. Diantaranya adalah: <br><br>
            <strong>Halaman About :</strong> Mengubah paragraf yang berada di section About <br>
            <strong>Halaman Service :</strong> Mengubah Judul, Keterangan, dan Gambar yang berada di section Service <br>
            <strong>Halaman Perusahaan :</strong> Mengubah data pribadi perusahaan, seperti: Lokasi, No Telp, Fax, Mail, Visi, dan Misi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-sm-6">
            <div class="card mb-5" style="width: 100%;">
                <img src="image/dashboard_about.png" class="card-img-top" alt="Dashboard About">
                <div class="card-body">
                    <h3 class="card-title">About</h3>
                    <p class="card-text">Pilih About untuk mengubah semua isi di sertion/halaman about.</p>
                    <a href="/about" class="btn btn-primary">Edit Halaman</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-5" style="width: 100%;">
                <img src="image/dashboard_service.png" class="card-img-top" alt="Dashboard Service">
                <div class="card-body">
                    <h3 class="card-title">Service</h3>
                    <p class="card-text">Pilih service untuk menghubah semua isi data dari section Service.</p>
                    <a href="/service" class="btn btn-primary">Edit Halaman</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card mb-5" style="width: 100%;">
                <img src="image/dashboard_gallery.png" class="card-img-top" alt="Dashboard About">
                <div class="card-body">
                    <h3 class="card-title">Gallery</h3>
                    <p class="card-text">Pilih Gallery untuk mengubah semua gambar di sertion/halaman Gallery.</p>
                    <a href="/gallery" class="btn btn-primary">Edit Halaman</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-5" style="width: 100%;">
                <img src="image/dashboard_data.png" class="card-img-top" alt="Dashboard Service">
                <div class="card-body">
                    <h3 class="card-title">Perusahaan</h3>
                    <p class="card-text">Pilih Perusahaan untuk menghubah semua isi data dari section Perusahaan.</p>
                    <a href="/data" class="btn btn-primary">Edit Halaman</a>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
