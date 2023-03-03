@extends('backend.layouts.master')
@section('content')
<div class="layout-px-spacing text-center">
    <div class="row layout-top-spacing">

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-account-invoice-one">
                <div class="widget-heading">
                    <h2 class=""><u>Statistics</u></h2>
                </div>

                <div class="widget-content">
                    <div class="invoice-box">
                        <div class="acc-total-info">
                            <h5>Total Parts</h5>
                            <p class="acc-amount"></p>
                        </div>

                        <!-- <div class="inv-detail">
                            <div class="info-detail-1">
                                <p>Monthly Plan</p>
                                <p>$ 199.0</p>
                            </div>
                            <div class="info-detail-2">
                                <p>Taxes</p>
                                <p>$ 17.82</p>
                            </div>
                            <div class="info-detail-3 info-sub">
                                <div class="info-detail">
                                    <p>Extras this month</p>
                                    <p>$ -0.68</p>
                                </div>
                                <div class="info-detail-sub">
                                    <p>Netflix Yearly Subscription</p>
                                    <p>$ 0</p>
                                </div>
                                <div class="info-detail-sub">
                                    <p>Others</p>
                                    <p>$ -0.68</p>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="inv-action">
                            <a href="#" class="btn btn-dark">Summary</a>
                            <a href="#" class="btn btn-danger">Transfer</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection