<section id="banner">
    <div class="container">
      @php $banner = $data['banner'] @endphp
      <div class="row">
        <div class="col-md-6">
          <h2>{{ $banner['title']}}</h2>
          <p>{{ $banner['text'] }}</p>
        <a class="btn" href="{{ $banner['link']['url'] }}">{{ $banner['link']['title'] }}</a>
        </div>
        <div class="col-md-6 images">
          <img src="{{ $banner['image_1']['url'] }}"/>
          <img src="{{ $banner['image_2']['url'] }}"/>
        </div>
      </div>
    </div>
</section>
