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
            <form action="{{ route('setting.seo.update', $data->id) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" class="form-control"
                                value="{{ $data->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_author">Meta Author</label>
                            <input type="text" id="meta_author" name="meta_author" class="form-control"
                                value="{{ $data->meta_author }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_tag">Meta Tag</label>
                            <input type="text" id="meta_tag" name="meta_tag" class="form-control"
                                value="{{ $data->meta_tag }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <input type="text" id="meta_description" name="meta_description" class="form-control"
                                value="{{ $data->meta_description }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" id="meta_keywords" name="meta_keywords" class="form-control"
                                value="{{ $data->meta_keywords }}">
                        </div>
                        <div class="form-group">
                            <label for="google_verification	">Google Verification </label>
                            <input type="text" id="google_verification	" name="google_verification	" class="form-control"
                                value="{{ $data->google_verification }}">
                        </div>
                        <div class="form-group">
                            <label for="google_analytics">Google Analytics</label>
                            <input type="text" id="google_analytics" name="google_analytics" class="form-control"
                                value="{{ $data->google_analytics }}">
                        </div>
                        <div class="form-group">
                            <label for="alexa_varification">Alexa Varification</label>
                            <input type="text" id="alexa_varification" name="alexa_varification" class="form-control"
                                value="{{ $data->alexa_varification }}">
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Update</button>
                    </div><!-- end col-->
                </div> <!-- end row-->
            </form>
        </div> <!-- container -->
    </div>
@endsection
