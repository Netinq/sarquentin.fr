<section id="feedback">
    <div class="container-text">
        <span class="pre">{!! $contents->feedback->pre !!}</span>
        <h2>{!! $contents->feedback->title !!}</h2>
        <p>{!! $contents->feedback->description !!}</p>
    </div>
    <div class="container">
        @foreach($reviews as $review)
        <div class="review" itemscope itemtype="https://schema.org/Review">
            <img class="authorImg" loading="lazy" src="{{ $review[0][1][4][1][2] }}" alt="" />
            <div itemprop="author" itemscope itemtype="https://schema.org/Person">
                <meta itemprop="name" content = "{{$review[0][1][4][1][1]}}}">
            </div>
            <div class="note" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                <meta itemprop="ratingValue" content = "{{$review[0][2][0][0]}}">
                @for ($i = 0; $i < (5 - $review[0][2][0][0]); $i++)
                    <img class="star" src="{{asset('svg/star.svg')}}" alt="Star icon">
                @endfor
                @for ($i = 0; $i < $review[0][2][0][0]; $i++)
                    <img class="star" src="{{asset('svg/star-filled.svg')}}" alt="Filled star icon">
                @endfor
            </div>
            <h3>{{$review[0][1][4][1][1]}}, <span>{{$review[0][0][1][6]}}</span></h3>
            <p itemprop="reviewBody" class="reviewBody">{{ $review[0][0][2][15][0][0] }}</p>
{{--            <a href="{{$review[18]}}" target="_blank">Voir l'avis</a>--}}
            <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                <meta itemprop="name" content = "MONSIEUR SAR QUENTIN">
                <meta itemprop="image" content = "{{asset('images/logo.png')}}">
            </div>
        </div>
        @endforeach
        <button id="next"><img src="{{asset('svg/arrow-right.svg')}}" alt="Arrow right"/> </button>
    </div>
    <img id="feeedbackLanding" src="{{asset('images/feedback.png')}}" alt="feedback">
</section>
