@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section class="page-content">
    <div class="container">
        @php the_content() @endphp
    </div>
  </section>
  <section id="services">
      <div class="container">
    <div class="services-menu text-center">
      <span class="active" data-tab="commercialization">Commercialization</span>
      <span data-tab="development">Product Development </span>
      <span data-tab="incubation">Incubation</span>
    </div>
    <div class="services-wrap">
      <div class="service active" id="commercialization">
        <div class="steps">
          @if($data['commercialization_steps'])
          @foreach($data['commercialization_steps'] as $step)
              <div class="step row">
                <div class="col-md-4">
                  <div class="image" style="background-image: url({{ $step['image']['url'] }})"></div>
                </div>
                <div class="col-md-2 col-2">
                  <div class="number">{{$loop->iteration}}</div>
                  <img class="icon" src="{{ $step['icon']['url'] }}" />
                </div>
                <div class="col-md-6 col-10">
                  <h4>{{ $step['name'] }}</h4>
                  <div class="description">{!! $step['description'] !!}</div>
                </div>
              </div>
          @endforeach
          @endif
        </div>
      </div>
      <div class="service" id="development">
        @if($data['product_development_steps'])
          @foreach($data['product_development_steps'] as $step)
              <div class="step row">
                <div class="col-md-4">
                  <div class="image" style="background-image: url({{ $step['image']['url'] }})"></div>
                </div>
                <div class="col-2">
                  <div class="number">{{$loop->iteration}}</div>
                  <img class="icon" src="{{ $step['icon']['url'] }}" />
                </div>
                <div class="col-md-6 col-10">
                  <h4>{{ $step['name'] }}</h4>
                  <div class="description">{!! $step['description'] !!}</div>
                </div>
              </div>
          @endforeach
          @endif
      </div>
      <div class="service" id="incubation">
        @if($data['incubation_steps'])
          @foreach($data['incubation_steps'] as $step)
              <div class="step row">
                  <img class="icon" src="{{ $step['icon']['url'] }}" />
                  <h4>{{ $step['name'] }}</h4>
              </div>
          @endforeach
          @endif
      </div>
      </div>
    </div>
  </section>
  @endwhile
@endsection
