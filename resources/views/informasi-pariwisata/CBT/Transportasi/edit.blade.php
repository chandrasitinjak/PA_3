@extends('layouts.CBT.master')
​
@section('title')
    <title>Edit Transportasi</title>
@endsection
​
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Transportasi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Manajemen Informasi</a></li>
                            <li class="breadcrumb-item"><a href="#">Transportasi</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
​
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @component('components.card')
                            @slot('header')
                                Edit
                            @endslot
                            
                            @slot('body')
                            @if (session('error'))
                                @alert(['type' => 'danger'])
                                    {!! session('error') !!}
                                @endalert
                            @endif
​
                            <form role="form" action="{{ route('Transportasi.update', $transportasi->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="nama_transportasi">Nama Transportasi</label>
                                    <input type="text" name="nama_transportasi" value="{{ $transportasi->nama_transportasi}}" class="form-control {{ $errors->has('nama_transportasi') ? 'is-invalid':'' }}" id="nama_transportasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_transportasi">Jenis Transportasi</label>
                                    <input type="text" name="jenis_transportasi" value="{{ $transportasi->jenis_transportasi}}" class="form-control {{ $errors->has('jenis_transportasi') ? 'is-invalid':'' }}" id="jenis_transportasi" required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_akhir">Alamat</label>
                                    <input type="text" name="alamat" value="{{ $transportasi->alamat}}" class="form-control {{ $errors->has('alamat') ? 'is-invalid':'' }}" id="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="ckeditor"  name="deskripsi" id="ckedtor" cols="5" rows="5" class="form-control {{ $errors->has('deskripsi') ? 'is-invalid':'' }}" required=""> {{$transportasi->deskripsi}} </textarea>
                                </div>
                                @endslot
                            @slot('footer')
                                <div class="card-footer">
                                    <button class="btn btn-info"><i class="fa fa-edit"></i> Update</button>
                                </div>
                            </form>
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection