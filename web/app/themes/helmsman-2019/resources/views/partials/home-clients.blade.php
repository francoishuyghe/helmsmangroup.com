<section id="clients">
    <div class="container">
      <h2>Select Clients</h2>
      <div class="row">
        @foreach ($data['clients'] as $client)
          <div class="col-md-2 client">
            <img src="{{ $client['url'] }}" />
          </div>
        @endforeach
      </div>
    </div>
</section>
