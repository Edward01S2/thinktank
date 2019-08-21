<article @php post_class() @endphp>
  <div class="blog-list">
    <div class="flex flex-col lg:flex-row">
      <div class="w-full lg:w-5/12 xl:w-4/12">
        <img class="w-full h-auto md:object-cover md:object-center md:h-64 lg:object-cover lg:h-full" src="{!! get_the_post_thumbnail_url() !!}" />
      </div>
      <div class="w-full p-8 flex flex-col justify-center border-b border-tt-brown md:p-12 lg:w-7/12 xl:w-8/12">
        <header>
          <h2 class="entry-title font-oswald font-semibold text-2xl text-tt-darkblue pb-2"><a class="hover:text-tt-gold" href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
          <p class="byline author vcard text-tt-gold font-muli font-black">
            {{ __('By', 'sage') }} <a class="hover:text-tt-darkblue" href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
              {{ get_the_author() }}
            </a>
            <span class="text-tt-darkblue font-bold">|</span>
            <time class="updated font-semibold" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
          </p>
        </header>
        <div class="entry-summary leading-loose">
          <div class="md:hidden">
            @php echo wp_trim_words(get_the_content(), 17, '...'); @endphp
          </div>
          <div class="hidden md:block lg:hidden xl:block">
              @php echo wp_trim_words(get_the_content(), 40, '...'); @endphp
            </div>
          <div class="hidden lg:block xl:hidden">
            @php echo wp_trim_words(get_the_content(), 30, '...'); @endphp
          </div>
          <div class="pt-8 pb-2 text-center md:pb-0 md:text-left lg:pt-8">
            <a class="bg-tt-darkblue text-tt-sand py-2 px-8 text-lg uppercase hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block" href="{!!get_permalink(); !!}">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
