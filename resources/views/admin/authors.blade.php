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
                                                <th>Name</th>
                                                <th>Picture</th>
                                                <th>Total Published</th>
                                                <th>Last Modified</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
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
         
        