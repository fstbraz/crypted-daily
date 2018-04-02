@extends('layouts.master')

@section('title', 'Cryptocurrency News')

@section('content')
    <div class="row">
        <div class="col-12">
            @foreach($news as $data)
                <article>
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">
                                <a href="{{ route('news.go', $data->hashid) }}" rel="nofollow"
                                   target="_blank">{{ $data->title }}</a>
                            </h4>
                            <div class="small-text">
                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;{{ $data->published_on }}
                            </div>
                            <div class="d-flex flex-row">
                                <div class="d-flex align-items-start hidden-xs-down">
                                    <a href="{{ route('news.go', $data->hashid) }}" rel="nofollow" target="_blank">
                                            {{ $data->imgUrl }}
                                            {{ $data->title }}
                                        <img src="{{ $data->imgUrl }}" class="img-responsive" style="padding-right: 9px; width:110px;" alt="{{ $data->title }}">
                                    </a>
                                </div>
                                <div>
                                     <p>{{ $data->body }}</p>
                                </div>
                            </div>
                            <div class="bottom-article">
                                <a href="{{ route('news.go', $data->hashid) }}" rel="nofollow" target="_blank"
                                   class="pull-right btn btn-sm btn-rounded">@lang('buttons.news.read_more')
                                    <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach

            <nav>{!! $news->render('vendor.pagination.simple-bootstrap-4') !!} </nav>
        </div>
    </div>
@endsection