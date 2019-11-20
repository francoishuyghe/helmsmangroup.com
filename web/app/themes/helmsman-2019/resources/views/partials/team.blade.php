<section id="team">
    <div class="container">
        <h2>Team</h2>
        <div class="row">
            
            @while($team_loop->have_posts()) @php($team_loop->the_post())
                <div class="col-md-4 person">
                    <a href="{{ the_permalink() }}">
                        <div class="portrait" style="background-image: url({{ the_post_thumbnail_url() }})"></div>
                    </a>
                    <h4>{!! get_the_title() !!}</h4>
                    <p>{{ the_field('title') }}</p>
                </div>
            @endwhile
            @php(wp_reset_postdata())
        </div>
    </div>
</section>