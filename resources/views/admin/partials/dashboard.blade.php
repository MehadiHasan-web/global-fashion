@extends('admin.master.master');
@section('title')
    Dashboard
@endsection
@section('subtitle')
    Welcome to dashboard
@endsection
@section('content')
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <div class="stats-widget-header">
                            <div class="info-graph">
                                <span id="barOne"></span>
                            </div>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-sm-6 col">
                                    <h6 class="title">Total Products</h6>
                                </li>
                                <li class="col-sm-6 col">
                                    <h4 class="total">{{ $total_products ?? '' }}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <div class="stats-widget-header">
                            <div class="info-graph">
                                <i class="fa-solid fa-hourglass-end"></i>
                            </div>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-sm-6 col">
                                    <h6 class="title">New Order</h6>
                                </li>
                                <li class="col-sm-6 col">
                                    <h4 class="total">{{ $new_order ?? '' }}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <a href="#" class="stats-label" data-toggle="tooltip" data-placement="top"
                            title="New Followers">{{ $cancel_order ?? '' }}</a>
                        <div class="stats-widget-header">
                            <i class="fa-solid fa-ban"></i>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-sm-6 col">
                                    <h6 class="title">Cancel Order</h6>
                                </li>
                                <li class="col-sm-6 col">
                                    <h4 class="total">{{ $cancel_order ?? '' }}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stats-widget">
                        <a href="#" class="stats-label" data-toggle="tooltip" data-placement="top"
                            title="New Posts">{{ $complete_order ?? '' }}</a>
                        <div class="stats-widget-header">
                            <i class="fa-regular fa-circle-check"></i>
                        </div>
                        <div class="stats-widget-body">
                            <!-- Row start -->
                            <ul class="row no-gutters">
                                <li class="col-sm-6 col">
                                    <h6 class="title">Complete order</h6>
                                </li>
                                <li class="col-sm-6 col">
                                    <h4 class="total">{{ $complete_order ?? '' }}</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->


    <!-- Row start -->
    <div class="row gutters">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Income</div>
                <div class="card-body p-0">
                    <div class="row gutters">
                        <div class="col-lg-4 col-sm-6 col">
                            <div class="income-stats">
                                <h4 class="total">ট {{ $total ?? '' }}</h4>
                                <p class="income-title"><span class="income-label"></span>Overall
                                    Income</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col">
                            <div class="income-stats">
                                <h4 class="total">ট {{ $pending_income ?? '' }}</h4>
                                <p class="income-title"><span class="income-label secondary">
                                    </span>Up comming income</p>
                            </div>
                        </div>
                    </div>
                    <div class="chartist custom-two">
                        <div class="income-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
@endsection
