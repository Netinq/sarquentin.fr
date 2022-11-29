<section id="clients">
    <div class="container-text">
        <span class="pre">{!! $contents->clients->pre !!}</span>
        <h2>{!! $contents->clients->title !!}</h2>
        <p>{!! $contents->clients->description !!}</p>
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
