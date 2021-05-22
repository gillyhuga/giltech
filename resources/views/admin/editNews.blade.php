@extends('admin.layouts.master')
@section('title', 'Update')

@section('content')
                <main>
                
                    <div class="container-fluid">
                        <h1 class="mt-4">Update News</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Update News</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="{{ route('news.update', [$news->id]) }}" method="POST">
                            @CSRF
                            @method('put')
                            <div class="card-body">
                            <div class="row">

                            <div class="col-8">
                            <div class="form-group">
                            <label for="picture">Author</label>
                            <div class="form-group">
                            <select class="form-control" name="author"  >
                            @foreach ($authors as $author)
                            <option value="{{ $author->id }}" >{{ $author->name }}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>
                            </div>

                            <div class="col-8">
                            <div class="form-group">
                            <label for="name">Judul Berita</label>
                            <input type="text" name="title" class="form-control @error('title')
                            is-invalid @enderror" placeholder="Judul Berita" value="{{$news->title}}">
                            <small class="text-danger">@error('title') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <!-- <div class="col-8">
                            <div class="form-group">
                            <label for="picture">Foto</label>
                            <input type="text" name="picture" class="form-control @error('picture')
                            is-invalid @enderror" placeholder="Supplier Number" value="{{$news->picture}}">
                            <small class="text-danger">@error('picture') {{$message}}
                            @enderror</small>
                            </div>
                            </div> -->
                            <div class="col-8">
                            <div class="form-group">
                            <label for="picture">Foto</label>
                            <div class="form-group">
                                <img src="{{asset('/images/'.$news->picture)}}" class="rounded float-left" class="img-fluid" alt="Gambar">
                                <p></p>
                                <input id="picture" type="file" name="picture" class="form-control-file @error('picture') is-invalid @enderror"  >
                                <small class="text-danger">@error('picture') {{$message}} @enderror</small>
                            </div>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="alamat">Content</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="Content" id="exampleFormControlTextarea1" rows="3" > {{$news->content}}</textarea>
                            <small class="text-danger">@error('content') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            </div>
                            </div>
                            <!-- /.row -->
                            <div class="card-footer">
                            <div class="d-flex justify-content-end">
                            <a href="{{ route('news.index') }}" class="m-1 btn btn-outlinedanger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Update</button>
                            </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection