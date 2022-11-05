@extends('layouts.app')

@section('head')
    @vite('resources/css/home.css')
@endsection

@section('content')
    <section id="welcome">
        <div class="container-text">
            <h1>Créons votre site web
            <span>sur mesure.</span></h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
            <div class="btn-content">
                <a href="#" class="btn btn-primary">Découvrir</a>
                <a href="#" class="btn btn-secondary">Contactez-nous</a>
            </div>
        </div>
        <div class="container-image">
            <img id="landing" src="{{ asset('svg/landing.svg') }}" alt="Illustration">
            <img id="tube1" src="{{ asset('svg/tube1.svg') }}" alt="Illustration">
            <img id="tube2" src="{{ asset('svg/tube2.svg') }}" alt="Illustration">
            @svg('window', 'window')
        </div>
    </section>
@endsection
