@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
      <section class="content">
      <div class="row">
        <div class="col-md-4">
            <img class="portrait" src="{{ the_post_thumbnail_url() }}" />
        </div>
        <div class="col-md-8">
            <header>
                <h1 class="entry-title">{!! get_the_title() !!}</h1>
                <p>{{ the_field('title') }}</p>
              </header>
              <div class="entry-content">
                @php the_content() @endphp
              </div>
              <a class="btn" href="company#team">Back</a>
        </div>
      </div>
    </section>
    </div>
  @endwhile
@endsection
