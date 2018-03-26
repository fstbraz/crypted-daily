
@extends('layouts.master')

@section('content')

    <div class="col-md-8 col-md-offset-2">
        <h2>@lang('labels.frontend.contact.box_title')
            <small>@lang('labels.frontend.contact.box_title_small')</small>
        </h2>
        <hr class="colorgraph">

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(['route' => 'contact.store', 'class' => 'contactForm', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label(trans('labels.frontend.contact.name')) !!}
            {!! Form::text('name', null, ['required', 'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label(trans('labels.frontend.contact.email')) !!}
            {!! Form::text('email', null, ['required', 'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label(trans('labels.frontend.contact.message')) !!}
            {!! Form::textarea('message', null,
                ['required', 'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit(trans('labels.frontend.contact.box_title'),
              ['class'=>'btn btn-primary btn-lg']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection