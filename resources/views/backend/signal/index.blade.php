@extends('backend.layouts.master')
@section('content')
<div class="layout-px-spacing">
    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <h4>All Signals</h4>
                        </div>
                        @if($flash=session('message'))
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button> <strong>Success!</strong> {{$flash}} </div>
                        </div>
                        @elseif($flash=session('error'))
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button>{{$flash}}</div>

                        </div>
                        @endif
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <table id="style-3" class="table style-3  table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox-column text-center"> ID </th>
                                    <th class="text-center">Coin Name</th>
                                    <th class="text-center">Buy Price</th>
                                    <th class="text-center">Sell Price</th>
                                    <th class="text-center">Percentage</th>
                                    <th class="text-center">Date Added</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($signals as $signal)
                                <tr>
                                    <td class="checkbox-column text-center"> {{$signal->id}} </td>
                                    <td class="text-center">{{$signal->coin_name}}</td>
                                    <td class="text-center">{{$signal->buy_price}}</td>
                                    <td class="text-center">{{$signal->sell_price}}</td>
                                    <td class="text-center">{{$signal->percentage}}</td>
                                    <td class="text-center">{{$signal->created_at}}</td>
                                    <td class="text-center">
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <!-- <a class="dropdown-item" href="{{ route('admin.signal.show', $signal->id) }}">View</a> -->
                                                <a class="dropdown-item" href="{{ route('admin.signal.edit', $signal->id) }}">Edit</a>
                                                <form method="POST" action="{{ route('admin.signal.destroy', $signal->id) }}" class="dropdown-item"">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <input name=" _method" value="delete" type="hidden">
                                                    <!-- <a onclick="javascript:$('form').submit();"><i class="material-icons">delete</i></a> -->
                                                    <button class="dropdown-item" onclick="return confirm('Are you sure you want to delete this signal?');" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection