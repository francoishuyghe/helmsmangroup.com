@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
          <h2>{!! App::title() !!}</h2>
          @php the_content() @endphp
          </div>
          <div class="col-md-8">
            Contact form
          </div>
        </div>
      </div>
  </section>
  @endwhile
@endsection
