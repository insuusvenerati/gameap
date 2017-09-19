@php($title = "Create Game")

@extends('layouts.main')

@section('breadclumbs')
    <ol class="breadcrumb">
        <li><a href="/">GameAP</a></li>
        <li><a href="{{ route('admin.games.index') }}">Games</a></li>
        <li>Create</li>
    </ol>
@endsection

@section('content')
    @include('components.form.errors_block')

    {!! Form::open(['url' => route('admin.games.index')]) !!}
        <div class="col-md-6">
            {{ Form::bsText('code') }}
            {{ Form::bsText('start_code') }}
            {{ Form::bsText('name') }}
        </div>

        <div class="col-md-6">
            {{ Form::bsText('engine') }}
            {{ Form::bsText('engine_version') }}
        </div>

        <div class="col-md-12">
            <div class="form-group">
                {{ Form::submit('Create', ['class' => 'btn btn-success']) }}
            </div>
        </div>

    {!! Form::close() !!}
@endsection