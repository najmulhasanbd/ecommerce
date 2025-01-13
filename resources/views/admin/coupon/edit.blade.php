@extends('admin.layouts.admin_master')

@section('admin_content')
    <div class="page-content">
        <div class="page-title-head d-flex align-items-center ">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-bold mb-0">Cateogry</h4>
            </div>

            <div class="text-end">

            </div>
        </div>
        <div class="page-container">
            <div class="row">
                <div class="col-12 col-md-10 card p-3 mx-auto">
                    <form action="{{ route('coupon.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="code" style="width: 100%;text-align:start">Code </label>
                                    <input type="text" name="code" id="code" class="form-control"
                                        value="{{ old('code', $data->code) }}">
                                    @error('code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="type" style="width: 100%;text-align:start">Discount Type</label>
                                    <select name="type" id="type" class="form-select">
                                        <option value="1" @if ($data->type == 1) selected @endif>Fixed
                                        </option>
                                        <option value="2" @if ($data->type == 2) selected @endif>Percent
                                        </option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="amount" style="width: 100%;text-align:start">Discount Amount</label>
                                    <input type="text" name="amount" id="amount" class="form-control"
                                        value="{{ old('amount', $data->amount) }}">
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="expireDate" style="width: 100%; text-align: start;">Expire Date</label>
                                    <input type="date" name="expireDate" id="expireDate" class="form-control"
                                    value="{{ old('expireDate', $data->expireDate ?? '') }}">                             
                                    @error('expireDate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
