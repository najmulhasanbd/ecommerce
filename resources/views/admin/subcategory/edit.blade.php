@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Sub Cateogry</h4>
            </div>

            <div class="text-end">

            </div>
        </div>
        <div class="page-container">
            <div class="row">
                <div class="col-12 col-md-6 card p-3 mx-auto">
                    <form action="{{ route('subcategory.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                                <option value="">Select Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $data->category_id ? 'selected' : '' }}>
                                        {{ ucwords($item->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group pt-1">
                            <label for="name" style="width: 100%;text-align:start">Sub Category Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $data->name }}" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group py-1">
                            <label for="image" style="width: 100%; text-align:start">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                onchange="previewImage(event)">

                            <!-- Display the preview image here -->
                            <img class="py-2" id="imagePreview" src="{{ asset('storage/subcategories/' . $data->image) }}"
                                width="100px" height="100px" style="object-fit: cover" alt="Image Preview">

                            @error('image')
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
