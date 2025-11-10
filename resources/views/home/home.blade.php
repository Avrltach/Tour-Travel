@extends('layouts.app')

@section('title', 'Beranda - Cakrawala')

@section('content')
    @include('home/section/header')
    @include('home/section/feature')
    @include('home/section/service')
    @include('home/section/destination')
    @include('home/section/image')
@endsection
