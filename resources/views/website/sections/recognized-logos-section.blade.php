@php
    $recognizedLogos = App\Models\RecognizedLogo::where('is_active', '1')->orderByRaw('CAST(position AS UNSIGNED) ASC')->get();
@endphp

@if(isset($recognizedLogos) && count($recognizedLogos) > 0)
<div class="space-extra-bottom ">
    <div class="container text-center">
        <span class="sec-subtitle2">	Recognized by  </span>
        <div class="row vs-carousel wow fadeInUp responsive" data-wow-delay="0.4s" data-slide-show="5" data-lg-slide-show="4"
            data-md-slide-show="3" data-sm-slide-show="2">
            @foreach($recognizedLogos as $recognizedLogo)
                <div class="col-auto">
                    <img src="{{ asset($recognizedLogo->image) }}" alt="{{ $recognizedLogo->title }}" style="width: 100px; height: 100px;">
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif