@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
    @include('partials.team')
    @include('partials.clients')
  @endwhile
@endsection
