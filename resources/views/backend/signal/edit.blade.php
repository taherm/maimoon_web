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
                                <h4>Edit Signal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ route('admin.signal.update', $signal->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Coin Name</label>
                                    <input type="text" class="form-control" name="coin_name" id="inputEmail4" value="{{$signal->coin_name}}" required>
                                    @error('coin_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Buy Sell</label>
                                    <input type="text" class="form-control" name="buy_price" id="inputEmail4" value="{{$signal->buy_price}}">
                                    @error('buy_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Sell Price</label>
                                    <input type="text" class="form-control" name="sell_price" id="inputEmail4" value="{{$signal->sell_price}}">
                                    @error('sell_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Percentage</label>
                                    <input type="text" class="form-control" name="percentage" id="inputEmail4" value="{{$signal->percentage}}" required>
                                    @error('percentage')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Edit Signal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection