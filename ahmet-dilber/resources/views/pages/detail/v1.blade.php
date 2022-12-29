@extends('layouts.app')
@section('assets')
    <link rel="stylesheet" href="css/pages/detail.css">
@endsection

@section('content')
    @include('pages.detail.partials.header')
    @include('pages.detail.partials.info')
    @include('pages.detail.partials.process')
    @include('pages.detail.partials.faq')
    @include('pages.detail.partials.operations-info')
@endsection
