<article @php post_class() @endphp>
    <div class="blog-list">
      <div class="flex">
        <div class="p-8 flex flex-col justify-center border-b border-tt-brown md:p-12 lg:py-12 xl:px-0">
          <header>
            <h2 class="entry-title font-semibold font-oswald text-2xl text-tt-darkblue pb-2"><a class="hover:text-tt-gold" href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
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
            <div class="hidden md:block lg:hidden">
              @php echo wp_trim_words(get_the_content(), 40, '...'); @endphp
            </div>
            <div class="hidden lg:block xl:hidden">
              @php echo wp_trim_words(get_the_content(), 55, '...'); @endphp
            </div>
            <div class="hidden xl:block">
              @php echo wp_trim_words(get_the_content(), 80, '...'); @endphp
            </div>
            <div class="pt-8 pb-2 text-center md:text-left md:pb-0 lg:pt-8">
              <a class="bg-tt-darkblue text-tt-sand py-2 px-8 text-lg uppercase hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block" href="{!!get_permalink(); !!}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  