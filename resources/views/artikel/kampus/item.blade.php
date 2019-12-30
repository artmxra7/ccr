@foreach ($artikel as $initArtikel)
<div class="blog-page blog-content-1">
    <div class="blog-post-lg bordered blog-container">
        <div class="blog-img-thumb">
            <a href="javascript:;">
                <img src="{{ asset('normal_images/news/'.$initArtikel->artikels_images) }}">
            </a>
        </div>
        <div class="blog-post-content">
            <h2 class="blog-title blog-post-title">
                <a href="{{ strtolower($initArtikel->artikels_category_name) }}/{{$initArtikel->artikels_slug}}" id="'.$initArtikel->noartikels.'"  >{{$initArtikel->artikels_title}}</a>
            </h2>
            <p class="blog-post-desc">
                {!! str_limit(strip_tags($initArtikel->artikels_content, ''), 200) !!}
                @if (strlen(strip_tags($initArtikel->artikels_content)) > 200)
                  ... <a href="{{ strtolower($initArtikel->artikels_category_name) }}/{{$initArtikel->artikels_slug}}" id="'.$initArtikel->noartikels.'"  >Read More</a>
                @endif</p>
            <div class="blog-post-foot">
                <ul class="blog-post-tags">
                    @if ($initArtikel->artikels_category_id == 4)
                    <li class="uppercase">
                        <a href="{{ route('artikel.bumn') }}">{{$initArtikel->artikels_category_name}}</a>
                    </li>
                    @else


                    <li class="uppercase">
                        <a href="{{ route('artikel.kampus') }}">{{$initArtikel->artikels_category_name}}</a>
                    </li>

                    @endif
                </ul>
                <div class="blog-post-meta">
                    <i class="icon-calendar font-blue"></i>
                    <a href="javascript:;"> Carbon\Carbon::parse($initArtikel->created_at)->format('d F Y')</a>
                </div>
            </div>
        </div>
    </div>
   </div>
   @endforeach
