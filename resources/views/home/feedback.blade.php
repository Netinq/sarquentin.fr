<section id="feedback">
    <div class="container-text">
        <span class="pre">parce que</span>
        <h2>vos avis comptent<span>.</span></h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
    </div>
    <div class="container">
        @foreach($reviews as $review)
        <div class="review" itemscope itemtype="https://schema.org/Review">
            <img class="authorImg" src="{{ $review[0][2] }}" alt="" />
            <meta itemprop="author" content = "{{$review[0][1]}}">
            <div class="note" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                <meta itemprop="ratingValue" content = "{{$review[4]}}">
                @for ($i = 0; $i < (5 - $review[4]); $i++)
                    <img class="star" src="{{asset('svg/star.svg')}}" alt="Star icon">
                @endfor
                @for ($i = 0; $i < $review[4]; $i++)
                    <img class="star" src="{{asset('svg/star-filled.svg')}}" alt="Filled star icon">
                @endfor
            </div>
            <h4>{{$review[0][1]}}, <span>{{$review[1]}}</span></h4>
            <p itemprop="reviewBody" class="reviewBody">{{$review[3]}}</p>
            <a href="{{$review[18]}}" target="_blank">Voir l'avis</a>
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
