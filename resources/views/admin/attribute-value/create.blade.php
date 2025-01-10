@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Attribute Value</h4>
            </div>

            <div class="text-end">

            </div>
        </div>
        <div class="page-container">
            <div class="row-2">
                <div class="col-12 col-md-5 mx-auto card p-3">
                    <div class="form-group">
                        <h4>Attribute Value : <strong>{{ ucwords($attribute->name) }}</strong></h4>
                    </div>
                </div>
                <div class="col-12 col-md-5 mx-auto card p-3">
                    <form action="{{ route('attribute-value.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name" style="width: 100%;text-align:start">Value Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="enter unit name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ ucwords($item->name) }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <a href="{{ route('attribute-value.inactive', $item->id) }}"
                                                        id="inactive" class="btn btn-sm btn-success">Active</a>
                                                @else
                                                    <a href="{{ route('attribute-value.active', $item->id) }}"
                                                        id="active" class="btn btn-sm btn-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('attribute-value.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                                <a href="{{ route('attribute-value.delete', $item->id) }}" id="delete"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div>
    </div>
@endsection
