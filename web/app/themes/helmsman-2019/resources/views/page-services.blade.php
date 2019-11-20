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

      <h3 class="text-center">Choose a package</h3>
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
                  <div class="col-md-6 step-image">
                    <div class="image" style="background-image: url({{ $step['image']['url'] }})"></div>
                  </div>
                    {{-- <img class="icon" src="{{ $step['icon']['url'] }}" /> --}}
                  <div class="col-md-6 step-content">
                    <div class="number">{{$loop->iteration}}</div>
                    <div class="text">
                      <h4>{{ $step['name'] }}</h4>
                      <div class="description">{!! $step['description'] !!}</div>
                      </div>
                  </div>
                </div>
            @endforeach
            @endif
          </div>
        </div>

        <div class="service" id="development">
          @if($data['product_development_steps'])
            <div class="steps">
              @foreach($data['product_development_steps'] as $step)
                <div class="step row">
                  <div class="col-md-6 step-image">
                    <div class="image" style="background-image: url({{ $step['image']['url'] }})"></div>
                  </div>
                  <div class="col-md-6 step-content">
                    <div class="number">{{$loop->iteration}}</div>
                    <div class="text">
                      <h4>{{ $step['name'] }}</h4>
                      <div class="description">{!! $step['description'] !!}</div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          @endif
        </div>

        <div class="service" id="incubation">
          <h5>Includes the following steps in a holistic process.</h5>
          @if($data['incubation_steps'])
            <div class="steps">
            @foreach($data['incubation_steps'] as $step)
                <div class="step">
                  <img class="icon" src="{{ $step['icon']['url'] }}" />
                  <h4>{{ $step['name'] }}</h4>
                </div>
            @endforeach
            </div>
          @endif
        </div>

      </div>
    </div>
  </section>
  @endwhile
@endsection
