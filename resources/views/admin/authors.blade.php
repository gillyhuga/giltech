@extends('admin.layouts.master')
@section('title', 'Authors')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Authors</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Authors</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <button href="{{route('authors.create')}}" type="button" class="btn btn-success">
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
                                                <th>Name</th>
                                                <th>Picture</th>
                                                <th>Total Published</th>
                                                <th>Last Modified</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($authors as $author)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $author->name }}</td>
                                            <td>{{ $author->picture }}</td>
                                            <td>{{ $author->products->count() }}</td>
                                            <td>{{ $author->created_at }}</td>
                                            <td>
                                            <a href="{{ route('authors.edit', [$author->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                            <form class="float-left m-1"
                                            action="{{ route('authors.destroy', [$author->id]) }}" method="POST">
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
         
        