@extends('layouts.app')

@section('head')
    @vite('resources/css/home.css')
@endsection

@section('content')
    @include('home.welcome')
    @include('home.guideline')
    @include('home.services')
    @include('home.feedback')
    @include('home.clients')
    @include('home.contact')
@endsection

@section('scripts')
    @vite('resources/js/sticky.js')
    @vite('resources/js/scroller.js')
    @vite('resources/js/feedback.js')
@endsection
