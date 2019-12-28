@foreach ($artikel as $initArtikel)
<div class="blog-page blog-content-1">
    <div class="blog-post-lg bordered blog-container">
        <div class="blog-img-thumb">
            <a href="javascript:;">
                <img src="{{ asset('thumbnail_images/'.$initArtikel->artikels_images) }}">
            </a>
        </div>
        <div class="blog-post-content">
            <h2 class="blog-title blog-post-title">
                <a href="artikel/{{$initArtikel->artikels_category_name}}/{{$initArtikel->artikels_title}}/edit" id="'.$initArtikel->noartikels.'"  >{{$initArtikel->artikels_title}}</a>
            </h2>
            <p class="blog-post-desc">{{$initArtikel->artikels_short}} </p>
            <div class="blog-post-foot">
                <ul class="blog-post-tags">
                    <li class="uppercase">
                        <a href="javascript:;">Bootstrap</a>
                    </li>
                    <li class="uppercase">
                        <a href="javascript:;">Sass</a>
                    </li>
                    <li class="uppercase">
                        <a href="javascript:;">HTML</a>
                    </li>
                </ul>
                <div class="blog-post-meta">
                    <i class="icon-calendar font-blue"></i>
                    <a href="javascript:;">Oct 24, 2015</a>
                </div>
            </div>
        </div>
    </div>
   </div>
   @endforeach
