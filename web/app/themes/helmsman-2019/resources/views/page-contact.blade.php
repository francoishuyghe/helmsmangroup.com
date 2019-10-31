@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
          <h2>{!! App::title() !!}</h2>
          @php the_content() @endphp
          </div>
          <div class="col-md-6">
            {!! do_shortcode('[contact-form-7 id="67" title="Contact form"]') !!}
          </div>
        </div>
      </div>
  </section>
  @endwhile
@endsection
