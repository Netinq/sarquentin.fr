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
