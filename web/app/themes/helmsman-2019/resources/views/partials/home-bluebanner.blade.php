@php $banner = $data['blue_banner'] @endphp
<section id="blue-banner" style="background-image: url({{ $banner['background_photo']['url'] }})">
    <div class="background"></div>
    <div class="container">
          <h2>{{ $banner['title']}}</h2>
          <p>{{ $banner['text'] }}</p>
          <a class="btn light" href="{{ $banner['link']['url']}}">{{ $banner['link']['title']}}</a>
    </div>
</section>
