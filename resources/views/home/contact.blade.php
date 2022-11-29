<section id="contact">
    <div class="container-text reverse">
        <h2>{!! $contents->contact->title !!}</h2>
        <p>{!! $contents->contact->description !!}</p>
    </div>
    <div class="container">
        <a class="box" href="tel:0750976893">
            <div class="container-image"><img src="{{asset('svg/phone.svg')}}" alt="Phone icon"></div>
            <div class="container-text">
                <h3>{!! $contents->contact->phone !!}</h3>
                <p>{!! $contents->contact->phoneText !!}</p>
            </div>
        </a>
        <a class="box" href="mailto:pro@sarquentin.fr">
            <div class="container-image"><img src="{{asset('svg/mail.svg')}}" alt="Phone icon"></div>
            <div class="container-text">
                <h3>{!! $contents->contact->email !!}</h3>
                <p>{!! $contents->contact->emailText !!}</p>
            </div>
        </a>
    </div>
</section>
