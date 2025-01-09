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
                            <label for="name">Business Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ $data->name }}">
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="copyright">Copyright</label>
                            <input type="text" id="copyright" name="copyright" class="form-control"
                                value="{{ $data->copyright }}">
                        </div>
                    </div><!-- end col-->
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
                        <div class="form-group py-1">
                            <label for="logo" style="width: 100%; text-align: start;">Image</label>
                            <input type="file" name="logo" class="form-control" id="logo"
                                onchange="previewImage(event)">
                            <img src="{{ asset('storage/logo/' . $data->logo) }}" width="100px" alt="">
                            <div style="margin-top: 10px;">
                                <img id="imagePreview" src="#" alt="Image Preview"
                                    style="max-width: 100px; display: none;" />
                            </div> @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div><!-- end col-->
                    <div class="col-12 col-md-6">
                        <div class="form-group py-1">
                            <label for="favicon" style="width: 100%; text-align: start;">Favicon</label>
                            <input type="file" name="favicon" class="form-control" id="favicon"
                                onchange="previewFavicon(event)">
                            <img src="{{ asset('storage/favicon/' . $data->favicon) }}" width="100px" alt="">
                            <div style="margin-top: 10px;">
                                <img id="faviconPreview" src="#" alt="Image Preview"
                                    style="max-width: 100px; display: none;" />
                            </div> @error('favicon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div><!-- end col-->
                    <button type="submit" class="btn btn-success">Update</button>
                </div> <!-- end row-->
            </form>
        </div> <!-- container -->
    </div>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const file = event.target.files[0];

            reader.onload = function() {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function previewFavicon(event) {
            const reader = new FileReader();
            const file = event.target.files[0];

            reader.onload = function() {
                const faviconPreview = document.getElementById('faviconPreview');
                faviconPreview.src = reader.result;
                faviconPreview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
