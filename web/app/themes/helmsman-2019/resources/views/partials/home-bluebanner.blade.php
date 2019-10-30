<section id="blue-banner">
    <div class="container">
      @php $banner = $data['blue_banner'] @endphp
          <h2>{{ $banner['title']}}</h2>
          <p>{{ $banner['text'] }}</p>
          <a class="btn light" href="{{ $banner['link']['url']}}">{{ $banner['link']['title']}}</a>
    </div>
</section>
