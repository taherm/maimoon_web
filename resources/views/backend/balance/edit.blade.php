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
                                <h4>Edit Balance</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('admin.balance.update',1) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Balance</label>
                                    <input type="text" class="form-control" name="balance" id="inputEmail4" value="{{$balance->balance}}" required>
                                    @error('balance')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Edit Balance</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection