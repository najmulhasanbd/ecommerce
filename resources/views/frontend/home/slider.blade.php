<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="home-slide-cover mt-30">
            <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                @foreach ($banners as $banner)
                    <div class="single-hero-slider single-animation-wrap"
                        style="background-image: url('{{ asset("storage/banner/{$banner->banner}") }}')">
                    </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </div>
    </div>
</section>