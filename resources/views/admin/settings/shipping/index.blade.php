@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Shipping</h4>
            </div>

            <div class="text-end">
                <a href="{{ route('setting.shipping.create') }}" class="btn btn-sm btn-success">Shipping Create</a>
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
                                        <th>Location</th>
                                        <th>Charge</th>
                                        <th>Time</th>
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
                                                @if ($item->location == 1)
                                                    Inside Dhaka
                                                @else($item->location==2)
                                                    Outside Dhaka
                                                @endif
                                            </td>
                                            <td>{{ $item->charge }}</td>
                                            <td>{{ $item->time }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    Active
                                                @else($item->status==1)
                                                    Inactive
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('setting.shipping.edit', $item->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                                <a href="{{ route('setting.shipping.destroy', $item->id) }}" id="delete"
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
        </div> <!-- container -->
    </div>
@endsection
