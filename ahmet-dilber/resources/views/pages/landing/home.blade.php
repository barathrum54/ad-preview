@extends('layouts.app')

@section('content')
    @include('pages.landing.partials.hero')
    @include('pages.landing.partials.about')
    @include('pages.landing.partials.faq')
    @include('pages.landing.partials.testimonials')
    @include('pages.landing.partials.gallery')
    @include('pages.landing.partials.ig-feed')
@endsection
