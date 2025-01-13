@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Coupon</h4>
            </div>

            <div class="text-end">

            </div>
        </div>
        <div class="page-container">
            <div class="row">
                <div class="col-12 col-md-6 card p-3 mx-auto">
                    <form action="{{ route('coupon.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" style="width: 100%;text-align:start">Category Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="enter category name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group py-1">
                            <label for="image" style="width: 100%; text-align: start;">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                onchange="previewImage(event)">

                            <!-- Display the preview image here -->
                            <div id="imagePreviewContainer" style="margin-top: 10px;">
                                <img id="imagePreview" src="#" alt="Image Preview"
                                    style="max-width: 100px; display: none;" />
                            </div> @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const file = event.target.files[0];

            reader.onload = function() {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
