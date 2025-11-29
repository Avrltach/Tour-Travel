@extends('layouts.app')

@section('title', 'Tentang Kami - Cakrawala')

@section('content')
    @include('about/section/hero')
    @include('about/section/detail')
    @include('home/section/faq')
    @include('home/section/cta')
@endsection
