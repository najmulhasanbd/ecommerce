@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Website Setting</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0 fs-13">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Website Setting</a></li>

                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="page-container">
            <form action="{{ route('setting.website.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control"
                                value="{{ $data->phone }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ $data->email }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control"
                                value="{{ $data->address }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control"
                                value="{{ $data->facebook }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" id="twitter" name="twitter" class="form-control"
                                value="{{ $data->twitter }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input type="text" id="youtube" name="youtube" class="form-control"
                                value="{{ $data->youtube }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" id="linkedin" name="linkedin" class="form-control"
                                value="{{ $data->linkedin }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" class="form-control" rows="5">{{ $data->phone }}</textarea>
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file">
                        </div>
                        
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control"
                                value="{{ $data->phone }}">
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row-->
            </form>
        </div> <!-- container -->
    </div>
@endsection
