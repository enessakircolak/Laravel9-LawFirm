
@extends('layouts.admin')

@section('title' , 'Add Category')


@section('content')


    <td><a href="/admin/category/create"> <button type="button" class="btn btn-success btn-lg">Create</button></a> </td>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Keywords</th>
                <th>Description</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Show</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $data as $rs)
            <tr>
                <td>{{$rs->id}}</td>
                <td>{{$rs->title}}</td>
                <td>{{$rs->keywords}}</td>
                <td>{{$rs->description}}</td>
                <td>{{$rs->status}}</td>
                <td><a href="/admin/category/edit/{{$rs->id}}"> <button type="button" class="btn btn-primary btn-sm">Edit</button></a> </td>
                <td><a href="/admin/category/delete/{{$rs->id}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a> </td>
                   <!--     onclick="return confirm('Deleting !! Are you sure?')">Delete</a> </td>-->
                <td><a href="/admin/category/show/{{$rs->id}}"><button type="button" class="btn btn-success btn-sm">Show</button></a> </td>



                <!-- <td><label class="badge badge-danger">Pending</label></td>
                <td><label class="badge badge-warning">Pending</label></td>
                <td><label class="badge badge-success">Pending</label></td>
                <td><label class="badge badge-info">Pending</label></td>
                <td>yes</td>
                <td>no</td>
                -->
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


<!--
  partial

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-6 mb-4 mb-xl-0">
                <div class="d-lg-flex align-items-center">
                    <div>
                        <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                        <h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
                    </div>
                    <div class="ms-lg-5 d-lg-flex d-none">
                        <button type="button" class="btn bg-white btn-icon">
                            <i class="mdi mdi-view-grid text-success"></i>
                        </button>
                        <button type="button" class="btn bg-white btn-icon ms-2">
                            <i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                    <div class="pe-1 mb-3 mb-xl-0">
                        <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                            Feedback
                            <i class="mdi mdi-message-outline btn-icon-append"></i>
                        </button>
                    </div>
                    <div class="pe-1 mb-3 mb-xl-0">
                        <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                            Help
                            <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                        </button>
                    </div>
                    <div class="pe-1 mb-3 mb-xl-0">
                        <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                            Print
                            <i class="mdi mdi-printer btn-icon-append"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">

                </div>
            </div>

        </div>
-->


@endsection
