@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section id="intro">
        <div class="container">
          <h2>{{ $data['intro_title'] }}</h2>
          <p>{{ $data['intro_paragraph'] }}</p>
          <img src="{{ $data['intro_image']['url'] }}" />
        </div>
    </section>

    <section class="about">
      <div class="container">
        {!! $data['about'] !!}
      </div>
    </section>

    <section id="image-text">
        <div class="container">
      @foreach ($data['image_text'] as $row)
          <div class="row">
            <div class="col-md-6">
              <img src="{{ $row['image']['url'] }}" />
            </div>
            <div class="col-md-6">
              {!! $row['text'] !!}
            </div>
          </div>
      @endforeach
        </div>
    </section>

    @include('partials/home-banner')
    @include('partials/home-services')
    @include('partials/home-bluebanner')
    @include('partials/clients')

  @endwhile
@endsection
