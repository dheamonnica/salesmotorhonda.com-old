<!--<section class="section page-intro pt-100 pb-100 bg-cover">-->
<!--    <div style="opacity: 0.7" class="bg-overlay"></div>-->
<!--    <div class="container">-->
<!--        <h3 class="page-intro__title">{{ $gallery->name }}</h3>-->
<!--        {!! Theme::breadcrumb()->render() !!}-->
<!--    </div>-->
<!--</section>-->
<section class="section pt-50 pb-100">
    <div class="container">
            <div class="page-content">
                <article class="post post--single">
                    <div class="post__content">
                        <!--<p>-->
                        <!--    {{ $gallery->description }}-->
                        <!--</p>-->
                        <div id="list-photo">
                            @foreach (gallery_meta_data($gallery->id, 'gallery') as $image)
                                @if ($image)
                                    <div class="item" data-src="{{ url(array_get($image, 'img')) }}" data-sub-html="{{ array_get($image, 'description') }}">
                                        <div class="photo-item">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="{{ url(array_get($image, 'img')) }}" alt="{{ array_get($image, 'description') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </article>
            </div>
    </div>
</section>