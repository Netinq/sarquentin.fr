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
    <section id="guideline" class="stickyContainer">
        <img id="tube_reverse" src="{{ asset('svg/tube2_reverse.svg') }}" alt="Illustration">
        <div class="container-text reverse">
            <span class="pre">Ensemble</span>
            <h2>Notre ligne directrice.</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
            <a href="" class="btn btn-tertiary">Contactez-nous</a>
        </div>
        <div class="box-content">
            <div class="box">
                <span>1.</span>
                <p>Echanger pour définir vos besoins.</p>
            </div>
            <div class="box">
                <span>2.</span>
                <p>Concevoir un design pour votre site.</p>
            </div>
            <div class="box">
                <span>3.</span>
                <p>Coder votre site internet.</p>
            </div>
            <div class="box">
                <span>4.</span>
                <p>Mettre en ligne et référencer votre site.</p>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container-text">
            <span class="pre">Des prestations</span>
            <h2>Pour tous vos besoins<span>.</span></h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
        </div>
        <div class="content">
            @svg('line', 'line')
            <div class="box">
                <div class="box-icon">
                    @svg('lightbulb', 'lightbulb')
                </div>
                <h3>Création et refonte de site internet.</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
            </div>
            <div class="box">
                <div class="box-icon">
                    @svg('pen', 'pen')
                </div>
                <h3>Webdesign UX & UI design.</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
            </div>
            <div class="box">
                <div class="box-icon">
                    @svg('gear', 'gear')
                </div>
                <h3>Maintenance et déploiement.</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
            </div>
        </div>
    </section>
    <section id="clients">
        <div class="container-text">
            <span class="pre">Nous avons</span>
            <h2>travaillé ensemble<span>.</span></h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
        </div>
        <div class="carousel">
            <div class="scroller">
                @foreach($clients as $client)
                    <img src="{{ asset('images/clients/' . $client . '.png') }}" alt="Client">
                @endforeach
                @foreach($clients as $client)
                    <img src="{{ asset('images/clients/' . $client . '.png') }}" alt="Client">
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite('resources/js/sticky.js')
    @vite('resources/js/scroller.js')
@endsection
