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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>SubCategory</th>
                                        <th>Brand</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset('storage/thumbnail/' . $item->thumbnail) }}"
                                                 alt="{{ $item->name }}" width="50px" height="30px">
                                        </td>
                                        <td>{{ ucwords($item->name) }}</td>
                                        <td>{{ $item->selling_price }}</td>
                                        <td>{{ ucwords($item->category->name) }}</td>
                                        <td>{{ ucwords($item->subcategory->name) }}</td>
                                        <td>{{ ucwords($item->brand->name) }}</td>
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
                                            <a href="javascript:void(0)" class="btn btn-sm btn-primary"
                                               data-bs-toggle="modal" data-bs-target="#product{{$item->id}}">
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-sm btn-success">
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                            <a href="{{ route('product.delete', $item->id) }}" id="delete"
                                               class="btn btn-sm btn-danger">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                
                                        <!-- Modal -->
                                        <div class="modal fade" id="product{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{ ucwords($item->name) }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Price:</strong> {{ $item->selling_price }}</p>
                                                        <p><strong>Category:</strong> {{ ucwords($item->category->name) }}</p>
                                                        <p><strong>Subcategory:</strong> {{ ucwords($item->subcategory->name) }}</p>
                                                        <p><strong>Brand:</strong> {{ ucwords($item->brand->name) }}</p>
                                                        <p><strong>Description:</strong> {{ $item->short_description }}</p>
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
