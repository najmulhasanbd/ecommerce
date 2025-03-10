@extends('admin.layouts.admin_master')

@section('admin_content')
    <style>
        h5 {
            margin: 0;
            padding: 0;
        }
    </style>
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Product</h4>
            </div>
        </div>
        <div class="page-container">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('product.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <h3 class="card-header bg-success text-white">
                        Basic Information
                    </h3>
                    <div class="row p-3">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="name"><strong>Name</strong></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $data->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="category_id"><b>Category</b></label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $data->category_id ? 'selected' : '' }}>
                                            {{ ucwords($item->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="subcategory_id"><b>SubCategory</b></label>
                                <select class="form-control" name="subcategory_id" id="subcategory_id">
                                    <option value="">Select SubCategory</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="name"><b>Brand</b></label>
                                <select class="form-control" name="brand_id" data-choices data-choices-sorting-false>
                                    <option value="">Select Brand</option>
                                    @foreach ($brands as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $data->brand_id ? 'selected' : '' }}>{{ ucwords($item->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="code"><b>Code</b></label>
                                <input type="text" name="code" id="code" class="form-control"
                                    value="{{ $data->code }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="tags"><b>Tags</b></label>
                                <input class="form-control" name="tags" id="choices-text-unique-values" data-choices
                                    data-choices-text-unique-true type="text" value="{{ $data->tags }}" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="color"><b>Color</b></label>
                                <input class="form-control" name="colors" id="choices-colors" data-choices
                                    data-choices-text-unique-true type="text" value="{{ $data->colors }}" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="size"><b>Size</b></label>
                                <input class="form-control" name="sizes" id="choices-sizes" data-choices
                                    data-choices-text-unique-true type="text" value="{{ $data->sizes }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="productPriceStock">
                    <h3 class="card-header bg-success text-white">
                        Pricing & Stock
                    </h3>
                    <div class="row p-3">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="selling_price"><b>Selling Price</b></label>
                                <input type="number" name="selling_price" id="selling_price" class="form-control"
                                    value="{{ $data->selling_price }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="discount_price"><b>Discount Price</b></label>
                                <input type="number" name="discount_price" id="discount_price" class="form-control"
                                    value="{{ $data->discount_price }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="quantity"><b>Quantity</b></label>
                                <input type="text" name="quantity" id="quantity" class="form-control"
                                    value="{{ $data->quantity }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header bg-success text-white">
                        Description
                    </h3>
                    <div class="row p-3">
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="short_description"><b>Short Description</b></label>
                                <textarea name="short_description" id="short_description" cols="30" rows="10" class="form-control"
                                    placeholder="enter shor description">{{ $data->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="long_description"><b>Long Description</b></label>
                                <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control"
                                    placeholder="enter shor description">{{ $data->long_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="singleImage">
                    <h3 class="card-header bg-success text-white">
                        Product Image
                    </h3>
                    <div class="row p-3">
                        <div class="col-md-3 col-12">
                            <div class="form-group py-1">
                                <label for="thumbnail" style="width: 100%; text-align: start;"><b>Thumbnail</b></label>
                                <input type="file" name="thumbnail" class="form-control" id="thumbnail"
                                    onchange="previewImage(event)">

                                <div id="imagePreviewContainer" style="margin-top: 10px;">
                                    <img id="imagePreview" src="#" alt="New Image Preview"
                                        style="max-width: 100px; display: none;" />

                                    @if ($data->thumbnail)
                                        <img src="{{ asset('storage/thumbnail/' . $data->thumbnail) }}"
                                            alt="Existing Thumbnail" style="max-width: 100px; margin-top: 10px;" />
                                    @endif
                                </div>

                                @error('thumbnail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group py-1">
                                <label for="gallery" style="width: 100%; text-align: start;"><b>Gallery</b></label>
                                <!-- Multiple File Input -->
                                <input type="file" name="gallery[]" class="form-control" id="gallery"
                                    onchange="previewImages(event)" multiple>

                                <!-- Gallery Preview Container -->
                                <div id="galleryPreviewContainer"
                                    style="margin-top: 10px; display: flex; gap: 10px; flex-wrap: wrap;">
                                    @if (!empty($data->gallery))
                                        @foreach (json_decode($data->gallery, true) as $image)
                                            <img src="{{ asset('storage/gallery/' . $image) }}" alt="Gallery Image"
                                                style="max-width: 100px; height: auto; margin-top: 10px; border: 1px solid #ccc;" />
                                        @endforeach
                                    @endif
                                </div>

                                <!-- Validation Error -->
                                @error('gallery')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" card">
                    <h3 class="card-header bg-success text-white">
                        Others Information
                    </h3>
                    <div class="row p-3">
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Status</b></h5>
                                            <input type="hidden" name="status" value="0" />
                                            <input type="checkbox" name="status" id="status" data-switch="bool"
                                                value="1" {{ $data->status == 1 ? 'checked' : '' }} />
                                            <label for="status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Special Deals</b></h5>
                                            <input type="hidden" name="special_deals" value="0" />
                                            <input type="checkbox" id="special_deals" name="special_deals"
                                                data-switch="bool" value="1"
                                                {{ $data->special_deals == 1 ? 'checked' : '' }} />
                                            <label for="special_deals" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Special Offer</b></h5>
                                            <input type="hidden" name="special_offer" value="0" />
                                            <input type="checkbox" id="special_offer" name="special_offer"
                                                data-switch="bool" value="1"
                                                {{ $data->special_offer == 1 ? 'checked' : '' }} />
                                            <label for="special_offer" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Featured</b></h5>
                                            <input type="hidden" name="featured" value="0" />
                                            <input type="checkbox" id="featured" name="featured" data-switch="bool"
                                                value="1" {{ $data->featured == 1 ? 'checked' : '' }} />
                                            <label for="featured" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Hot Deals</b></h5>
                                            <input type="hidden" name="hot_deals" value="" />
                                            <input type="checkbox" id="hot_deals" name="hot_deals" data-switch="bool"
                                                value="1" {{ $data->hot_deals == 1 ? 'checked' : '' }} />
                                            <label for="hot_deals" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-success btn mb-3">Update</button>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle Product Variation
            $('#isVariant').change(function() {
                if ($(this).is(':checked')) {
                    $('#productVariation').removeClass('d-none');
                    $('#productPriceStock').addClass('d-none');
                    $('#singleImage').addClass('d-none');
                } else {
                    $('#productVariation').addClass('d-none');
                    $('#productPriceStock').removeClass('d-none');
                    $('#singleImage').removeClass('d-none');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Preselect the subcategory if editing
            var selectedSubcategoryId = "{{ $data->subcategory_id ?? '' }}";

            $('#category_id').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('admin/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').empty().append(
                                '<option value="">Select SubCategory</option>'
                            );
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '"' +
                                    (value.id == selectedSubcategoryId ?
                                        ' selected' : '') +
                                    '>' + value.name + '</option>'
                                );
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', xhr.responseText);
                        }
                    });
                } else {
                    $('select[name="subcategory_id"]').empty().append(
                        '<option value="">Select SubCategory</option>'
                    );
                }
            });

            if ($('#category_id').val()) {
                $('#category_id').trigger('change');
            }
        });
    </script>

    <script>
        function previewImages(event) {
            const galleryPreviewContainer = document.getElementById('galleryPreviewContainer');
            galleryPreviewContainer.innerHTML = ''; // Clear previous previews

            const files = event.target.files;

            if (files) {
                Array.from(files).forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '100px';
                        img.style.height = 'auto';
                        img.style.marginTop = '10px';
                        img.style.border = '1px solid #ccc';
                        galleryPreviewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                });
            }
        }
    </script>

    <script>
        function previewImages(event) {
            const files = event.target.files;
            const galleryPreviewContainer = document.getElementById('galleryPreviewContainer');

            galleryPreviewContainer.innerHTML = '';

            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();
                const file = files[i];

                reader.onload = function() {
                    const imageDiv = document.createElement('div');
                    imageDiv.style.display = 'inline-block';
                    imageDiv.style.marginRight = '10px';
                    imageDiv.style.position = 'relative';

                    const image = document.createElement('img');
                    image.src = reader.result;
                    image.style.width = '100px';
                    image.style.height = '60px';
                    image.style.display = 'block';

                    const removeButton = document.createElement('button');
                    removeButton.textContent = 'X';
                    removeButton.style.position = 'absolute';
                    removeButton.style.top = '0';
                    removeButton.style.right = '0';
                    removeButton.style.backgroundColor = 'red';
                    removeButton.style.color = 'white';
                    removeButton.style.border = 'none';
                    removeButton.style.cursor = 'pointer';
                    removeButton.onclick = function() {
                        imageDiv.remove();
                    };

                    imageDiv.appendChild(image);
                    imageDiv.appendChild(removeButton);

                    galleryPreviewContainer.appendChild(imageDiv);
                };

                if (file) {
                    reader.readAsDataURL(file);
                }
            }
        }
    </script>
@endsection
