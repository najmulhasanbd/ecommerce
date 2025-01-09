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
            <form action="{{ route('setting.smtp.update', $data->id) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <div class="form-group">
                            <label for="mailer">Mailer</label>
                            <input type="text" id="mailer" name="mailer" class="form-control"
                                value="{{ $data->mailer }}">
                        </div>
                        <div class="form-group">
                            <label for="host">Host</label>
                            <input type="text" id="host" name="host" class="form-control"
                                value="{{ $data->host }}">
                        </div>
                        <div class="form-group">
                            <label for="port">Port</label>
                            <input type="text" id="port" name="port" class="form-control"
                                value="{{ $data->port }}">
                        </div>
                        <div class="form-group">
                            <label for="user_name">User Uame</label>
                            <input type="text" id="user_name" name="user_name" class="form-control"
                                value="{{ $data->user_name }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" id="password" name="password" class="form-control"
                                value="{{ $data->password }}">
                        </div>

                        <button type="submit" class="btn btn-success mt-2">Update</button>
                    </div><!-- end col-->
                </div> <!-- end row-->
            </form>
        </div> <!-- container -->
    </div>
@endsection
