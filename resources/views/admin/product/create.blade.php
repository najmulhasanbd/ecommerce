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
                                <input type="text" name="name" id="name" class="form-control"
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
                                <label for="name"><b>Supplier</b></label>
                                <select class="form-control" name="supplier_id" data-choices data-choices-sorting-false>
                                    <option value="">Select Supplier</option>
                                    @foreach ($suppliers as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="code"><b>Code</b></label>
                                <input type="text" name="code" id="code" class="form-control"
                                    placeholder="enter product code">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="tags"><b>Tags</b></label>
                                <input class="form-control" name="tags[]" id="choices-text-unique-values" data-choices
                                    data-choices-text-unique-true type="text" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="unit"><b>Unit</b></label>
                                <select class="form-control" name="unit" data-choices data-choices-sorting-false>
                                    <option value="">Select Unit</option>
                                    @foreach ($units as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-2">
                    <div class="d-flex gap-1 align-items-center">
                        <h5><b>Product Variation</b></h5>
                        <input type="checkbox" id="isVariant" data-switch="bool" />
                        <label for="isVariant" data-on-label="On" data-off-label="Off"></label>
                    </div>
                </div>
                <br>
                <div class="card d-none" id="productVariation">
                    <h3 class="card-header bg-success text-white">
                        Product Variation
                    </h3>
                    <div class="row p-3">
                        <div class="col-12" id="attributeList">
                            <p class="mb-1 fw-bold text-muted">Attributes</p>
                            <select class="select2 form-control select2-multiple" id="attributes" name="attributes[]"
                                data-toggle="select2" multiple="multiple" data-placeholder="Choose attributes">
                                <optgroup label="Choose attributes">
                                    @foreach ($attributes as $item)
                                        <option value="{{ $item->id }}" data-name="{{ $item->name }}">
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>

                        <div class="col-12 mt-2 d-none" id="valueOfAttribute">
                            <p class="mb-1 fw-bold text-muted">Attribute Values</p>
                            <div id="attributeValuesContainer"></div>
                        </div>

                        <div class="col-12 mt-2 d-none" id="priceVariation">
                            <h4>Price Variation</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-success">
                                    <thead>
                                        <tr>
                                            <th>Variant</th>
                                            <th>Price</th>
                                            <th>SKU</th>
                                            <th>Quantity</th>
                                            <th>Photo</th>
                                        </tr>
                                    </thead>
                                    <tbody id="priceVariationBody"></tbody>
                                </table>
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
                                <label for="buying_price"><b>Buying Price</b></label>
                                <input type="number" name="buying_price" id="buying_price" class="form-control"
                                    placeholder="enter selling price">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="stock_quantity"><b>Stock Quantity</b></label>
                                <input type="number" name="stock_quantity" id="stock_quantity" class="form-control"
                                    placeholder="enter selling price">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="alert_quantity"><b>Alert Quantity</b></label>
                                <input type="number" name="alert_quantity" id="alert_quantity" class="form-control"
                                    placeholder="enter selling price">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="sku"><b>SKU</b></label>
                                <input type="text" name="sku[]" id="sku" class="form-control"
                                    placeholder="enter product sku">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="qty"><b>Quantity</b></label>
                                <input type="text" name="qty[]" id="qty" class="form-control"
                                    placeholder="enter product qty">
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
                        <div class="col-md-6 col-12">
                            <div class="form-group py-1">
                                <label for="thumbnail" style="width: 100%; text-align: start;"><b>Thumbnail</b></label>
                                <input type="file" name="thumbnail[]" class="form-control" id="thumbnail"
                                    onchange="previewImage(event)">

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
                                            <input type="checkbox" name="status" id="status" data-switch="bool" />
                                            <label for="status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Special Deals</b></h5>
                                            <input type="checkbox" id="special_deals" name="special_deals"
                                                data-switch="bool" />
                                            <label for="special_deals" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Special Offer</b></h5>
                                            <input type="checkbox" id="special_offer" name="special_offer"
                                                data-switch="bool" />
                                            <label for="special_offer" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 mb-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Featured</b></h5>
                                            <input type="checkbox" id="featured" name="featured" data-switch="bool" />
                                            <label for="featured" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                        <div class="d-flex gap-1 align-items-center">
                                            <h5 style="width: 100px"><b>Hot Deals</b></h5>
                                            <input type="checkbox" id="hot_deals" name="hot_deals" data-switch="bool" />
                                            <label for="hot_deals" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="meta_keywords"><b>Meta Keywords</b></label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                                    placeholder="enter meta Keywords">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="meta_title"><b>Meta Title</b></label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control"
                                    placeholder="enter meta Title">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group mb-2">
                                <label for="meta_description"><b>Meta Description</b></label>
                                <input type="text" name="meta_description" id="meta_title" class="form-control"
                                    placeholder="enter meta description">
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
            $('.select2').select2();

            const attributeValuesMap = @json($attributes_value->groupBy('attribute_id'));

            $('#attributes').on('change', function() {
                const selectedAttributes = $(this).val();
                const $valueOfAttribute = $('#valueOfAttribute');
                const $attributeValuesContainer = $('#attributeValuesContainer');
                const $priceVariation = $('#priceVariation');
                const $priceVariationBody = $('#priceVariationBody');

                if (selectedAttributes && selectedAttributes.length > 0) {
                    $valueOfAttribute.removeClass('d-none');
                    $attributeValuesContainer.empty(); // Reset attributes

                    // Create attribute-value dropdowns
                    selectedAttributes.forEach(attributeId => {
                        const attributeName = $(`#attributes option[value="${attributeId}"]`).data(
                            'name');
                        const values = attributeValuesMap[attributeId] || [];

                        const attributeRow = `
                    <div class="mb-3" id="attribute-row-${attributeId}">
                        <label class="fw-bold">${attributeName} Values:</label>
                        <select class="select2 form-control select2-multiple attribute-values" 
                            name="attributes[${attributeId}][]" data-attribute-id="${attributeId}" 
                            multiple="multiple">
                            ${values.map(value => `<option value="${value.id}" data-name="${value.name}">${value.name}</option>`).join('')}
                        </select>
                    </div>
                `;
                        $attributeValuesContainer.append(attributeRow);
                    });

                    $('.attribute-values').off('change').on('change', function() {
                        const selectedValuesByAttribute = {}; // Store selected values per attribute

                        // Gather selected values
                        $('.attribute-values').each(function() {
                            const attributeId = $(this).data('attribute-id');
                            selectedValuesByAttribute[attributeId] = $(this).val() || [];
                        });

                        // Generate all combinations of attributes
                        const combinations = generateCombinations(selectedValuesByAttribute);

                        $priceVariation.removeClass('d-none');
                        $priceVariationBody.empty(); // Reset price rows

                        // Add rows for each combination
                        combinations.forEach(combination => {
                            const combinationName = combination.map(item => item.name).join(
                                ' + ');
                            const rowId = combination.map(item =>
                                `${item.attributeId}-${item.valueId}`).join('-');

                            const priceRow = `
                        <tr id="price-row-${rowId}">
                            <td>${combinationName}</td>
                            <td><input style="width:150px" type="text" name="selling_price[]" class="form-control" placeholder="Price"></td>
                            <td><input style="width:150px" type="text" name="sku[]" class="form-control" placeholder="SKU"></td>
                            <td><input style="width:150px" type="text" name="qty[]" class="form-control" placeholder="Quantity"></td>
                            <td><input style="width:150px" type="file" name="thumbnail[]" class="form-control"></td>
                        </tr>
                    `;
                            $priceVariationBody.append(priceRow);
                        });
                    });

                    $('.select2').select2();
                } else {
                    $valueOfAttribute.addClass('d-none');
                    $priceVariation.addClass('d-none');
                    $attributeValuesContainer.empty();
                    $priceVariationBody.empty();
                }
            });

            // Function to generate all combinations of selected attributes
            function generateCombinations(selectedValuesByAttribute) {
                const attributes = Object.keys(selectedValuesByAttribute);
                if (attributes.length === 0) return [];

                const combinations = [];

                function combine(current, depth) {
                    if (depth === attributes.length) {
                        combinations.push(current);
                        return;
                    }

                    const attributeId = attributes[depth];
                    selectedValuesByAttribute[attributeId].forEach(valueId => {
                        combine([...current, {
                            attributeId,
                            valueId,
                            name: $(`#attribute-row-${attributeId} option[value="${valueId}"]`)
                                .data('name')
                        }], depth + 1);
                    });
                }

                combine([], 0);
                return combinations;
            }
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
