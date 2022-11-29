<section id="welcome">
    <img id="logo" src="{{asset('images/logo.png')}}" alt="logo">
    <div class="container-text">
        @svg('window', 'windowMobile')
        <h1>{!!  $contents->welcome->title !!}</h1>
        <p>{!! $contents->welcome->description !!}</p>
        <div class="btn-content">
            <a href="#guideline" class="btn btn-primary">Découvrir</a>
            <a href="#contact" class="btn btn-secondary">Me contacter</a>
        </div>
    </div>
    <div class="container-image">
        <img id="landing" src="{{ asset('svg/landing.svg') }}" alt="Illustration">
        <img id="tube1" src="{{ asset('svg/tube1.svg') }}" alt="Illustration">
        <img id="tube2" src="{{ asset('svg/tube2.svg') }}" alt="Illustration">
        @svg('window', 'window')
    </div>
</section>
