
<div class="blog-page blog-content-1">
    <div class="blog-post-lg bordered blog-container">
        <div class="blog-img-thumb">
            <a href="javascript:;">
                <img src="{{ asset('normal_images/news/'.$artikel->artikels_images) }}">
            </a>
        </div>
        <div class="blog-post-content">
            <h2 class="blog-title blog-post-title">
                <a href="javascript:;"  >{{$artikel->artikels_title}}</a>
            </h2>
            <p class="blog-post-desc">
                {!! $artikel->artikels_content !!}
            </p>
            <div class="blog-post-foot">
                <ul class="blog-post-tags">
                    @if ($artikel->artikels_category_id == 4)
                    <li class="uppercase">
                        <a href="{{ route('artikel.bumn') }}">{{$artikel->artikels_category_name}}</a>
                    </li>
                    @else


                    <li class="uppercase">
                        <a href="{{ route('artikel.kampus') }}">{{$artikel->artikels_category_name}}</a>
                    </li>

                    @endif
                </ul>
                <div class="blog-post-meta">
                    <i class="icon-calendar font-blue"></i>
                    <a href="javascript:;"> {{ Carbon\Carbon::parse($artikel->artikels_date_create)->format('d F Y') }}</a>
                </div>
            </div>
        </div>
    </div>
   </div>

