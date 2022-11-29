<section id="services">
    <div class="container-text">
        <span class="pre">{!! $contents->services->pre !!}</span>
        <h2>{!! $contents->services->title !!}</h2>
        <p>{!! $contents->services->description !!}</p>
    </div>
    <div class="content">
        @svg('line', 'line')
        <div class="box">
            <div class="box-icon">
                @svg('lightbulb', 'lightbulb')
            </div>
            <h3>{!! $contents->services->firstTitle !!}</h3>
            <p>{!! $contents->services->firstDescription !!}</p>
        </div>
        <div class="box">
            <div class="box-icon">
                @svg('pen', 'pen')
            </div>
            <h3>{!! $contents->services->secondTitle !!}</h3>
            <p>{!! $contents->services->secondDescription !!}</p>
        </div>
        <div class="box">
            <div class="box-icon">
                @svg('gear', 'gear')
            </div>
            <h3>{!! $contents->services->thirdTitle !!}</h3>
            <p>{!! $contents->services->thirdDescription !!}</p>
        </div>
    </div>
</section>
