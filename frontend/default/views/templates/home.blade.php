@layout('views/layouts/master')


@section('content')
    @if(!empty($sliders))
        <div id="main-slider" class="slider-area">
        @foreach($sliders as $slider)
            <div class="single-slide">
                <img src="{{ base_url('uploads/gallery/'.$slider->file_name) }}" alt="">
                <div class="banner-overlay">
                    <div class="container">
                        <div class="caption style-2">
                            <h2>{{ sentenceMap(htmlspecialchars_decode($slider->file_title), 17, '<span>', '</span>') }}</h2>
                            <p>{{ htmlspecialchars_decode($slider->file_description) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endif

    <section id="about" class="about-area area-padding">
    	<div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-uppercase text-center">
                        <h2>About Us</h2>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                </div>
            </div>

    		<div class="row">
        		@if(!empty($featured_image))
        			<div class="col-md-12">
                        <div class="about-content">
                            <p> {{ htmlspecialchars_decode($page->content) }} </p>
                        </div>
        			</div>
        		@else
                <?php if($featured_image){ ?>
                    <div class="col-md-6 col-md-push-6">
                        <div class="content-img">                          
                            <img src="{{ imageLinkWithDefatulImage($featured_image->file_name, 'holiday.png', 'uploads/gallery/') }}" />                         
                        </div>
                    </div>
                     <?php } ?>
        			<div class="col-md-6 col-md-pull-6">
                        <div class="about-content">
                            <p> {{ htmlspecialchars_decode($page->content) }} </p>
                        </div>
        			</div>
        		@endif
    		</div>
    	</div>
    </section>
@endsection
