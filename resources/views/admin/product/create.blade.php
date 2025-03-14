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

            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <h3 class="card-header bg-success text-white">
                        Basic Information
                    </h3>
                    <div class="row p-3">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="name"><strong>Name</strong></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"
                                    placeholder="enter product name">
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
                                        <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
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
                                        <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="code"><b>Code</b></label>
                                <input type="text" name="code" id="code" class="form-control" value="{{old('code')}}"
                                    placeholder="enter product code">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="tags"><b>Tags</b></label>
                                <input class="form-control" name="tags" id="choices-text-unique-values" data-choices
                                    data-choices-text-unique-true type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="color"><b>Color</b></label>
                                <input class="form-control" name="colors" id="choices-colors" data-choices
                                    data-choices-text-unique-true type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="size"><b>Size</b></label>
                                <input class="form-control" name="sizes" id="choices-sizes" data-choices
                                    data-choices-text-unique-true type="text" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header bg-success text-white">
                        Pricing & Stock
                    </h3>
                    <div class="row p-3">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="selling_price"><b>Selling Price</b></label>
                                <input type="number" name="selling_price" id="selling_price" class="form-control"
                                    placeholder="enter selling price">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="discount_price"><b>Discount Price</b></label>
                                <input type="number" name="discount_price" id="discount_price" class="form-control"
                                    placeholder="enter selling price">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="quantity"><b>Quantity</b></label>
                                <input type="text" name="quantity" id="quantity" class="form-control"
                                    placeholder="enter stock quantity">
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
                                    placeholder="enter shor description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group mb-2">
                                <label for="long_description"><b>Long Description</b></label>
                                <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control"
                                    placeholder="enter shor description"></textarea>
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
                                    <img id="imagePreview" src="#" alt="Image Preview"
                                        style="max-width: 100px; display: none;" />
                                </div>

                                @error('thumbnail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group py-1">
                                <label for="gallery" style="width: 100%; text-align: start;"><b>Gallery</b></label>
                                <input type="file" name="gallery[]" class="form-control" id="gallery"
                                    onchange="previewImages(event)" multiple>

                                <div id="galleryPreviewContainer" style="margin-top: 10px;">
                                </div>

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
                                                value="1" />
                                            <label for="status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Special Deals</b></h5>
                                            <input type="hidden" name="special_deals" value="0" />
                                            <input type="checkbox" id="special_deals" name="special_deals"
                                                data-switch="bool" value="1" />
                                            <label for="special_deals" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Special Offer</b></h5>
                                            <input type="hidden" name="special_offer" value="0" />
                                            <input type="checkbox" id="special_offer" name="special_offer"
                                                data-switch="bool" value="1" />
                                            <label for="special_offer" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Featured</b></h5>
                                            <input type="hidden" name="featured" value="0" />
                                            <input type="checkbox" id="featured" name="featured" data-switch="bool"
                                                value="1" />
                                            <label for="featured" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Hot Deals</b></h5>
                                            <input type="hidden" name="hot_deals" value="0" />
                                            <input type="checkbox" id="hot_deals" name="hot_deals" data-switch="bool"
                                                value="1" />
                                            <label for="hot_deals" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-success btn mb-3">Submit</button>
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
            $('#category_id').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('admin/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="subcategory_id"]').empty().append(
                                '<option value="">Select SubCategory</option>');
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>'
                                );
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', xhr.responseText);
                        }
                    });
                } else {
                    $('select[name="subcategory_id"]').empty().append(
                        '<option value="">Select SubCategory</option>');
                }
            });
        });
    </script>
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const file = event.target.files[0];

            reader.onload = function() {
                // Get the corresponding preview image element based on the input ID
                const previewId = event.target.id === 'thumbnail' ? 'imagePreview' : 'imageBackPreview';
                const imagePreview = document.getElementById(previewId);

                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
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
