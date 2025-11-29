@extends('layouts.app')

@section('title', 'Kontak - Cakrawala')

@section('content')
    @include('contact/section/hero')
    @include('contact/section/contact')
    @include('contact/section/maps')
    @include('home/section/cta')
@endsection
