@extends('layouts.app')

@section('title', 'Beranda - Cakrawala')

@section('content')
    @include('home/section/hero')
    @include('home/section/about')
    @include('home/section/service')
    @include('home/section/destination')
    <!-- @include('home/section/image') -->
    @include('home/section/testimonial')
    @include('home/section/faq')
    @include('home/section/cta')
@endsection
