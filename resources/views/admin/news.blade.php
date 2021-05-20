@extends('admin.layouts.master')
@section('title', 'News')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">News</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <button type="button" class="btn btn-success">
                            <i class="fas fa-plus"></i>
                                Tambahkan Data
                            </button>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Picture</th>
                                                <th>Content</th>
                                                <th>Published</th>
                                                <th>Authors</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($news  as $news)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $news->title }}</td>
                                            <td>{{ $news->picture }}</td>
                                            <td>{{ $news->content }}</td>
                                            <td>
                                            @if($news->is_published == 0)
                                            <span class="badge badge-danger">Belum</span>
                                            @else
                                            <span class="badge badge-success">Success</span>
                                            @endif
                                            </td>
                                            <td>{{ $news->authors()->first()->name}}</td>
                                            <td>{{ $news->created_at }}</td>
                                            <td>
                                            <a href="{{ route('news.edit', [$news->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                            <form class="float-left m-1"
                                            action="{{ route('news.destroy', [$news->id]) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</a>
                                            </form>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection
         
        