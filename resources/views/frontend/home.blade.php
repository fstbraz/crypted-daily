@extends('layouts.master')

@section('title', App\Library\SeoHelper::title())

@section('content')
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-12">

            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-bookmark ribbon-vertical-r ribbon-danger"><i class="fa fa-heart-o"></i></div>
                <div class="card-block">
                    <h2 class="card-title text-primary">@lang('home.title')</h2>
                    <p class="text-muted">@lang('home.sub_title_1')  {{ number_format($coins_approx) }}@lang('home.sub_title_2')</p>
                    <p class="card-text">
                        {{ $app_name }} @lang('home.text_sub_title_1') {{ number_format($coins_approx) }}@lang('home.text_sub_title_2')
                    </p>
                    <a href="{{ route('home.market') }}" class="btn btn-rounded btn-outline-success">@lang('home.title_button')</a>
                </div>
            </div>

            @if(isset($adsense_pub_id, $adsense_slot1_id))
                @include('frontend.partials.adsense', ['slot_id' => $adsense_slot1_id])
            @endif

            <div class="card">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="p-20">
                            <h4 class="card-subtitle">@lang('home.card_subtitle')</h4>
                            <div class="message-box m-t-30">
                                <div class="message-widget">
                                    @foreach($top_coins as $symbol => $c)
                                        <a class="coin_list" href="#" data-attr="{{ $symbol }}">
                                            <div class="user-img">
                                                <img src="{{ asset('asset/images/coins/tn/' . $c['logo']) }}" alt="user"
                                                     class="img-circle">
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>{{ $c['name'] }} ({{ $symbol }})</h5>
                                                <span class="mail-desc">@lang('home.price'): {{ $c['price'] }}</span>
                                                <span class="time">@lang('home.change'): {{ $c['change'] }}%</span>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 b-l">
                        <div id="chart-div" class="card-block">
                            <h4 class="font-medium text-inverse">&nbsp;</h4>
                            <div class="price-chart" style="height: 420px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->

    @if(isset($adsense_pub_id, $adsense_slot2_id))
        @include('frontend.partials.adsense', ['slot_id' => $adsense_slot2_id])
    @endif


    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-block bg-light-success">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="m-b-0">@lang('home.daily_top_gainers')</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    @include('frontend.partials.table-list', ['items' => $gainers, 'text_class' => 'text-success'])
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-block bg-light-warning">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="m-b-0">@lang('home.daily_top_losers')</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    @include('frontend.partials.table-list', ['items' => $losers, 'text_class' => 'text-danger'])
                </div>
            </div>
        </div>

    </div>
@endsection

@push('after-styles')
    <link href="{{ asset('asset/vendor/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendor/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}"
          rel="stylesheet">
@endpush

@push('before-scripts')
    <script>
        var AJAX_URL = "{{ route('api.history') }}";
    </script>
@endpush

@push('after-scripts')
    <script src="{{ asset('asset/vendor/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('asset/js/home.js') }}"></script>
@endpush