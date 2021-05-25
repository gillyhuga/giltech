@extends('admin.layouts.master')
@section('title', 'Add Author')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambakan Authors</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambakan Authors</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="{{ route('authors.store') }}" method="POST" enctype="multipart/form-data">
                            @CSRF
                            <div class="card-body">
                            <div class="row">
                            <div class="col-8">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name')
                            is-invalid @enderror" placeholder="Masukkan nama" >
                            <small class="text-danger">@error('name') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                                <label for="picture">Foto</label>
                                <input id="picture" type="file" name="picture" class="form-control-file @error('picture') is-invalid @enderror"  >
                                <small class="text-danger">@error('picture') {{$message}} @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="address" class="form-control @error('address')
                            is-invalid @enderror" placeholder="Masukkan alamat" >
                            <small class="text-danger">@error('alamat') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            </div>
                            </div>
                            <!-- /.row -->
                            <div class="card-footer">
                            <div class="d-flex justify-content-end">
                            <a href="{{ route('authors.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Tambahkan</button>
                            </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection