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
          <div class="px-4 py-6 pb-4 bg-tt-sand text-center md:pt-0 md:pb-0 lg:flex lg:flex-col xl:pb-0">
            <div class="lg:text-center"> 
              <h2 class="uppercase text-2xl pb-2 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12 lg:pb-0">{!! App::title() !!}</h2>
              <p class="byline author vcard text-tt-gold font-muli font-black lg:py-4">
                {{ __('By', 'sage') }} <a class="hover:text-tt-darkblue" href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
                  {{ get_the_author() }}
                </a>
                <span class="text-tt-darkblue font-bold">|</span>
                <time class="updated font-semibold italic" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  @else 
    <section class="pt-16 pb-8 md:pt-20 lg:pt-24 xl:pt-32">
      <header class="text-center">
        <h2 class="uppercase text-2xl pb-2 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-8">{!! App::title() !!}</h2>
        <p class="byline author vcard text-tt-gold font-muli font-black">
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
    <div class="container mx-auto">
      <div class="post-content px-8">
        @php the_content() @endphp
      </div>
      <div class="py-12 md:py-16 xl:py-24">
        <div class="w-3/4 mx-auto border-t border-tt-ltblue opacity-50 text-center lg:w-1/2"></div>
        <div class="text-center py-8">
          <div class="social-share flex items-center justify-center">
            <p class="italic font-muli font-bold mb-0">Share This:</p>
            <?php echo do_shortcode("[Sassy_Social_Share]"); ?>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="text-center">
    <div class="container mx-auto xl:pb-12">
      <h2 class="uppercase text-2xl pb-10 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">More Posts</span></h2>
      <div class="more-posts pb-12 xl:flex xl:items-center">
        <?php
        $args = array( 'numberposts' => '3', 'post__not_in' => array($post->ID) );
        $recent_posts = wp_get_recent_posts( $args ); ?>
        @foreach( $recent_posts as $recent )
          @include('partials.more-posts', $recent )
        @endforeach
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </section>

  @include('partials.get-in-touch')

</article>

