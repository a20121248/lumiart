<section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-xs-12 col-xl-preffix-1 col-xl-11">
        <p class="h3 text-white">{{ $page_title }}</p>
        <ul class="breadcrumbs-custom offset-top-10">
          @foreach ($breadcrumbs as $breadcrumb)
            @if ($loop->last)
              <li class="active">{{ $breadcrumb[0] }}</li>
            @else
              <li><a href="{{ route($breadcrumb[1]) }}">{{ $breadcrumb[0] }}</a></li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>