@extends('backend.layouts.master')
@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Payment</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('payment.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row mb-4">

                                <div class="col-lg-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>{{__('Date')}} <b style="color: red;">*</b></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <div class="form-group mb-0">
                                                <input id="basicFlatpickr4" name="date" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Start Date..">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12">
                                    <label for="inputState">Company Name</label>
                                    <select id="inputState" name="company_name" class="form-control" required>
                                        <option value="mailam_japanese">MAILAM JAPANESE</option>
                                        <option value="auto_1">Auto 1</option>
                                        <option value="oriental">Oriental Co.</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Payment Type</label>
                                    <input type="text" class="form-control" name="payment_type" id="inputEmail4" placeholder="" required>
                                    @error('payment_type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Amount</label>
                                    <input type="text" class="form-control" name="amount" id="inputEmail4" placeholder="" required>
                                    @error('amount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Receipt Number</label>
                                    <input type="text" class="form-control" name="receipt_number" id="inputEmail4" placeholder="" required>
                                    @error('receipt_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Person</label>
                                    <input type="text" class="form-control" name="person" id="inputEmail4" placeholder="">
                                    @error('person')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>{{__('Receipt Image')}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label>Upload Image (Size: 570 X 570px)<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*" required>
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Add Part</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('edit_subscriber')
<script>
    $("#basicFlatpickr4").flatpickr({});
</script>
@endsection