<section id="guideline" class="stickyContainer">
    <img id="tube_reverse" src="{{ asset('svg/tube2_reverse.svg') }}" alt="Illustration">
    <div class="container-text reverse">
        <span class="pre">{!! $contents->guideline->pre !!}</span>
        <h2>{!! $contents->guideline->title !!}</h2>
        <p>{!! $contents->guideline->description !!}</p>
        <a href="#contact" class="btn btn-tertiary">Me contacter</a>
    </div>
    <div class="box-content">
        <div class="box">
            <span>1.</span>
            <p>{!! $contents->guideline->first !!}</p>
        </div>
        <div class="box">
            <span>2.</span>
            <p>{!! $contents->guideline->second !!}</p>
        </div>
        <div class="box">
            <span>3.</span>
            <p>{!! $contents->guideline->third !!}</p>
        </div>
        <div class="box">
            <span>4.</span>
            <p>{!! $contents->guideline->fourth !!}</p>
        </div>
    </div>
</section>
