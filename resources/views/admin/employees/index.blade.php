@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Employee List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employee List</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                        <div class="card">
                            <div class="card-header">
                                <span class="">Employee List</span>

                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export PDF</a>
                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Export Excel</a>
                                <a href="#" class="btn btn-outline-info float-right btn-sm ml-1">Printed</a>
                                <a href="" data-toggle="modal" data-target="#add" class="btn btn-outline-primary float-right btn-sm ml-1">Add Employee</a>
                                <div class="clearfix"></div>
                            </div>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th>Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                         </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

