@extends('layouts.rentloop_dashboard')

@section('content')
<div class="m-content">
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-12">
            <!--begin:: Widgets/Finance Stats-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Bitcoin Price
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#price_usd" role="tab">
                                    USD
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#price_eur" role="tab">
                                    EUR
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#price_aud" role="tab">
                                    AUD
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget1 m-widget1--paddingless">
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        Current Price
                                    </h3>
                                </div>
                                <div class="tab-content col m--align-right">
									<span id="price_usd" class="tab-pane active show m-widget1__number"></span>
                                    <span id="price_eur" class="tab-pane m-widget1__number"></span>
                                    <span id="price_aud" class="tab-pane m-widget1__number"></span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        % Change - 1 Hour
                                    </h3>
                                </div>
                                <div class="col m--align-right">
														<span id="percent_change_1h" class="m-widget1__number">

														</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        % Change - 1 day
                                    </h3>
                                </div>
                                <div class="col m--align-right">
														<span id="percent_change_24h" class="m-widget1__number">

														</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        % Change - 7 Days
                                    </h3>
                                </div>
                                <div class="col m--align-right">
														<span id="percent_change_7d" class="m-widget1__number">

														</span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        % Change - Since last logged in
                                    </h3>
                                </div>
                                <div class="col m--align-right">
														<span id="percent_change_last" class="m-widget1__number">

														</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Finance Stats-->
        </div>
    </div>
    <!--End::Section-->
</div>
@endsection
