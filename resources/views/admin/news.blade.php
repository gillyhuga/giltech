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
                                                <th>Author</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>Foto</td>
                                                <td>
                                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                                </td>
                                                <td><span class="badge badge-success">Success</span></td>
                                                <td>Gilly</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-warning">Edit</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection
         
        