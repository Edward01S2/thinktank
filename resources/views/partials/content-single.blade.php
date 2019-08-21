<article @php post_class() @endphp>
  @if (get_the_post_thumbnail_url())
    <section id="hero">
      <div class="">
        <div class="relative z-10">
          <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-72 xl:h-76" src="{!! get_the_post_thumbnail_url() !!}" />
          <div class="absolute h-full w-full bg-tt-brown top-0 opacity-35"></div>
        </div>
      </div>
    </section>
  
    <section class="overflow-hidden relative z-20 -mt-6 md:-mt-16 lg:-mt-32 xl:-mt-48">
      <div class="relative rounded-top w-curve w-margin h-16 bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64"></div>
      <div class="relative -mt-10 z-30 lg:-mt-16 xl:-mt-40">
        <div class="xl:pt-4 xl:pb-8">
          <div class="px-4 py-6 pb-8 bg-tt-sand text-center md:pt-0 md:pb-0 xl:pb-0"> 
            <h2 class="uppercase text-2xl pb-2 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12">{!! App::title() !!}</h2>
            <p class="byline author vcard text-tt-gold font-muli font-black lg:text-left">
              {{ __('By', 'sage') }} <a class="hover:text-tt-darkblue" href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
                {{ get_the_author() }}
              </a>
              <span class="text-tt-darkblue font-bold">|</span>
              <time class="updated font-semibold" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
            </p>
          </div>
        </div>
      </div>
    </section>

  @else 
    <section>
      <header>
        <h2 class="uppercase text-2xl pb-2 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12">{!! App::title() !!}</h2>
        <p class="byline author vcard text-tt-gold font-muli font-black text-left">
          {{ __('By', 'sage') }} <a class="hover:text-tt-darkblue" href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
            {{ get_the_author() }}
          </a>
          <span class="text-tt-darkblue font-bold">|</span>
          <time class="updated font-semibold" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
        </p>
      </header>
    </section>
  @endif

  <section>
    <div class="">
      <div class="entry-content px-8 leading-loose">
        @php the_content() @endphp
      </div>
      <div class="border-t-4 border-tt-lightblue text-center">
        <p>Share This</p>
      </div>
    </div>
  </section>

  <section class="text-center">
    <h2 class="uppercase text-2xl pb-10 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">More Posts</span></h2>
  
    <?php
    $args = array( 'numberposts' => '3', 'post__not_in' => array($post->ID) );
    $recent_posts = wp_get_recent_posts( $args ); ?>
    @foreach( $recent_posts as $recent )
    <div>
      <div class="text-left">
        <div>
          <img class="w-full h-auto" src="{!! get_the_post_thumbnail_url() !!}" />
        </div>
        <div class="p-8">
          <h2 class="uppercase text-2xl pb-2 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12"><a href="{!! get_permalink($recent["ID"]) !!}">{!! get_the_title($recent["ID"]) !!}</h2>
          <p class="byline author vcard text-tt-gold font-muli font-black text-left">
              {{ __('By', 'sage') }} <a class="hover:text-tt-darkblue" href="{{ get_author_posts_url(get_the_author_meta($recent["ID"])) }}" rel="author" class="fn">
                {{ get_the_author($recent["ID"]) }}
              </a>
              <span class="text-tt-darkblue font-bold">|</span>
              <time class="updated font-semibold" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
          </p>
          <div class="font-muli text-tt-darkblue">
            {!! wp_trim_words(get_the_content($recent["ID"]), 17, '...'); !!}
          </div>
          <div class="pt-8 pb-4 text-center">
            <a class="bg-tt-darkblue text-tt-sand py-2 px-8 text-lg uppercase hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block" href="{!!get_permalink(); !!}">Read More</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <?php wp_reset_query(); ?>
  </section>

</article>
