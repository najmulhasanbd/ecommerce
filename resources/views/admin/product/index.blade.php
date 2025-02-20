@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Product</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0 fs-13">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>

                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="page-container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Published</th>
                                        <th>Featured</th>
                                        <th>Hot Deals</th>
                                        <th>Special Offer</th>
                                        <th>Special Deal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($item->thumbnail)
                                                    <img src="{{ asset('storage/thumbnail/' . $item->thumbnail) }}"
                                                        alt="{{ $item->name }}" width="50px" height="30px">
                                                @else
                                                    <img src="{{ asset('no-image.jpg') }}" alt="" width="50px" height="30px">
                                                @endif
                                                {{ ucwords($item->name) }}
                                            </td>                                            
                                            <td>{{ $item->selling_price }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <a href="{{ route('product.inactive', $item->id) }}" id="inactive"
                                                        class="btn btn-sm btn-success">Active</a>
                                                @else
                                                    <a href="{{ route('product.active', $item->id) }}" id="active"
                                                        class="btn btn-sm btn-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->featured == 1)
                                                    <a href="{{ route('product.infeatured', $item->id) }}" id="inactive"
                                                        class="btn btn-sm btn-success">Active</a>
                                                @else
                                                    <a href="{{ route('product.featured', $item->id) }}" id="active"
                                                        class="btn btn-sm btn-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->hot_deals == 1)
                                                    <a href="{{ route('product.inhot_deals', $item->id) }}" id="inactive"
                                                        class="btn btn-sm btn-success">Active</a>
                                                @else
                                                    <a href="{{ route('product.hot_deals', $item->id) }}" id="active"
                                                        class="btn btn-sm btn-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->special_offer == 1)
                                                    <a href="{{ route('product.inspecial_offer', $item->id) }}"
                                                        id="inactive" class="btn btn-sm btn-success">Active</a>
                                                @else
                                                    <a href="{{ route('product.special_offer', $item->id) }}"
                                                        id="active" class="btn btn-sm btn-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->special_deals == 1)
                                                    <a href="{{ route('product.inspecial_deals', $item->id) }}"
                                                        id="inactive" class="btn btn-sm btn-success">Active</a>
                                                @else
                                                    <a href="{{ route('product.special_deals', $item->id) }}"
                                                        id="active" class="btn btn-sm btn-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#product{{ $item->id }}">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="{{ route('product.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                                <a href="{{ route('product.delete', $item->id) }}" id="delete"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>

                                            <!-- Modal -->
                                            <div class="modal fade" id="product{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                {{ ucwords($item->name) }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Category :
                                                                        </strong>{{ ucwords($item->category->name ?? '') }}
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>SubCategory :
                                                                        </strong>{{ ucwords($item->subcategory->name ?? '') }}
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Brand :
                                                                        </strong>{{ ucwords($item->brand->name ?? '') }}
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Code :
                                                                        </strong>{{ $item->code }}</h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Tags :
                                                                        </strong>
                                                                        @foreach (json_decode($item->tags) as $tag)
                                                                            <span>{{ $tag }}</span>
                                                                        @endforeach
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Colors :
                                                                        </strong>
                                                                        @foreach (json_decode($item->colors) as $color)
                                                                            <span>{{ $color }}</span>
                                                                        @endforeach
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Sizes :
                                                                        </strong>
                                                                        @foreach (json_decode($item->sizes) as $size)
                                                                            <span>{{ $size }}</span>
                                                                        @endforeach
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Selling Price :
                                                                        </strong>{{ $item->selling_price }}</h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Discount Price :
                                                                        </strong>{{ $item->discount_price ?? 'no discount' }}</h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong> Quantity :
                                                                        </strong>{{ $item->quantity }}</h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Thumbnail :
                                                                        </strong>
                                                                        <img src="{{ asset('storage/thumbnail/' . $item->thumbnail) }}"
                                                                            alt="{{ $item->name }}" width="80px"
                                                                            height="50px">
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Gallery :
                                                                        </strong>
                                                                        @foreach (json_decode($item->gallery) as $image)
                                                                            <img src="{{ asset('storage/gallery/' . $image) }}"
                                                                                alt="{{ $item->name }}" width="80px"
                                                                                height="50px">
                                                                        @endforeach
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Short Description :
                                                                        </strong>{{ $item->short_description }}</h4>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-2">
                                                                    <h4><strong>Long Description :
                                                                        </strong>{{ $item->long_description }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div> <!-- container -->
    </div>
@endsection
