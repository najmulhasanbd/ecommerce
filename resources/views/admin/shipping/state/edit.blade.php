@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">District</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0 fs-13">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">District</a></li>

                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="page-container">
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('state.index')}}" type="button" class="btn btn-success mb-2" >State List</a>
                    </div>

                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('state.store') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="division">Division</label>
                                    <select id="division_id" name="division_id" class="form-select">
                                        <option value="">Select Division</option>
                                        @foreach ($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="district">District</label>
                                    <select id="district_id" name="district_id" class="form-select my-2">
                                        <option value="">Select District</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="state_name">State</label>
                                    <input type="text" name="state_name" class="form-control" placeholder="Enter State Name"
                                        required>
                                </div>

                                <button type="submit" class="btn btn-success mt-2">Submit</button>
                            </form>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div> <!-- container -->
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#division_id').on('change', function() {
                var division_id = $(this).val();
                if (division_id) {
                    $.ajax({
                        url: "{{ route('ajax.district', ['division_id' => ':division_id']) }}".replace(':division_id', division_id), // সঠিক URL ব্যবহার করুন
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="district_id"]').empty().append('<option value="">Select District</option>');
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append(
                                    '<option value="' + value.id + '">' + value.district_name + '</option>'
                                );
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', xhr.responseText);
                        }
                    });
                } else {
                    $('select[name="district_id"]').empty().append('<option value="">Select District</option>');
                }
            });
        });
    </script>


@endsection
