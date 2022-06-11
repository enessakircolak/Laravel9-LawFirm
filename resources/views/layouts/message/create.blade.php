@extends('layouts.admin')

@section('title' , 'Add Category')


@section('content')





    <!-- partial -->

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

             <!--   <div class="row">     </div>  -->




            <form role="form" action="/admin/category/store" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">title</label>
                        <input type="text" class="form-control" id=exampleInputEmail1 name="title" placeholder="title" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keywords</label>
                        <input type="text" class="form-control" id=exampleInputPassword11 name="keywords" placeholder="Keywords" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Description</label>
                        <input type="text" class="form-control" id=exampleInputEmail2 name="description" placeholder="Description" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <div class="card-footer">
                   <!-- <button class="btn" type="submit">Send Message</button>
                    -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
            </div>
    <!--
          <div class="form-group">
               <input type="email" class="form-control" placeholder="Your Email" required="required">
           </div>

           <div class="form-group">
               <input type="text" class="form-control" placeholder="Subject" required="required">
           </div>

           <div class="form-group">
               <textarea class="form-control" placeholder="Message" required="required"></textarea>
           </div>
            -->

@endsection

 <!-- partial
                    <div class="container-fluid page-body-wrapper">
                        <div class="main-panel">
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
                                <div class="row">

                                </div>
                                <div class="row">

                                </div>
                                <div class="row">

                                </div>
                            </div>
                            <!- content-wrapper ends -->
                            <!-- partial:partials/_footer.html -->
