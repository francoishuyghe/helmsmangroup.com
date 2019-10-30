<section id="services">
    <div class="container">
      <h2>Services</h2>
      <div class="row">
        @foreach ($data['services'] as $service)
          <div class="col-md-4 service">
            <img class="icon" src="{{ $service['icon']['url'] }}" />
            <h6>{{ $service['name'] }}</h6>
          </div>
        @endforeach
      </div>
      <p>{{ $data['services_about'] }}</p>
      <a class="btn" href="/services">Discover</a>
    </div>
</section>
