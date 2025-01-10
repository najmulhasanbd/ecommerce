@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Product</h4>
            </div>
        </div>
        <div class="page-container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="enter product name">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="name">Category</label>
                        <select class="form-control" name="category_id" data-choices data-choices-sorting-false>
                            <option value="">Select Category</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="name">SubCategory</label>
                        <select class="form-control" name="subcategory_id" data-choices data-choices-sorting-false>
                            <option value="">Select SubCategory</option>
                            @foreach ($subcategories as $item)
                                <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="name">Brand</label>
                        <select class="form-control" name="brand_id" data-choices data-choices-sorting-false>
                            <option value="">Select Brand</option>
                            @foreach ($brands as $item)
                                <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="name">Supplier</label>
                        <select class="form-control" name="supplier_id" data-choices data-choices-sorting-false>
                            <option value="">Select Supplier</option>
                            @foreach ($suppliers as $item)
                                <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" name="code" id="code" class="form-control"
                            placeholder="enter product code">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" name="code" id="code" class="form-control"
                            placeholder="enter product code">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" name="code" id="code" class="form-control"
                            placeholder="enter product code">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="text" name="qty" id="qty" class="form-control"
                            placeholder="enter product qty">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="qty">Tags</label>
                        <input class="form-control" id="choices-text-unique-values" data-choices
                            data-choices-text-unique-true type="text" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="selling_price">Selling Price</label>
                        <input type="number" name="selling_price" id="selling_price" class="form-control"
                            placeholder="enter selling price">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="discount_price">Discount Price</label>
                        <input type="number" name="discount_price" id="discount_price" class="form-control"
                            placeholder="enter selling price">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="buying_price">Buying Price</label>
                        <input type="number" name="buying_price" id="buying_price" class="form-control"
                            placeholder="enter selling price">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="stock_quantity">Stock Quantity</label>
                        <input type="number" name="stock_quantity" id="stock_quantity" class="form-control"
                            placeholder="enter selling price">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="alert_quantity">Alert Quantity</label>
                        <input type="number" name="alert_quantity" id="alert_quantity" class="form-control"
                            placeholder="enter selling price">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label for="alert_quantity">Alert Quantity</label>
                        <input type="number" name="alert_quantity" id="alert_quantity" class="form-control"
                            placeholder="enter selling price">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" id="short_description" cols="30" rows="10" class="form-control"
                            placeholder="enter shor description"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="long_description">Long Description</label>
                        <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control"
                            placeholder="enter shor description"></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group py-1">
                        <label for="thumbnail" style="width: 100%; text-align: start;">Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control" id="thumbnail"
                            onchange="previewImage(event)">

                        <!-- Display the preview image here -->
                        <div id="imagePreviewContainer" style="margin-top: 10px;">
                            <img id="imagePreview" src="#" alt="Image Preview"
                                style="max-width: 100px; display: none;" />
                        </div> @error('thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group py-1">
                        <label for="gallery" style="width: 100%; text-align: start;">Gallery</label>
                        <input type="file" name="gallery[]" class="form-control" id="gallery"
                            onchange="previewImages(event)" multiple>

                        <div id="galleryPreviewContainer" style="margin-top: 10px;">
                        </div>

                        @error('gallery')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <div class="d-flex gap-1">
                            <h5>Status</h5>
                            <input type="checkbox" id="switch1" data-switch="bool" />
                            <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                        </div>
                        <div class="form-group">
                            <div class="d-flex gap-1">
                                <h5>Special Deals</h5>
                                <input type="checkbox" id="switch2" data-switch="bool" />
                                <label for="switch2" data-on-label="On" data-off-label="Off"></label>
                            </div>
                            <div class="form-group">
                                <div class="d-flex gap-1">
                                    <h5>Special Offer</h5>
                                    <input type="checkbox" id="switch3" data-switch="bool" />
                                    <label for="switch3" data-on-label="On" data-off-label="Off"></label>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex gap-1">
                                        <h5>Featured</h5>
                                        <input type="checkbox" id="switch4" data-switch="bool" />
                                        <label for="switch4" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex gap-1">
                                            <h5>Hot Deals</h5>
                                            <input type="checkbox" id="switch5" data-switch="bool" />
                                            <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12 ">
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
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
                </div> --}}
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
