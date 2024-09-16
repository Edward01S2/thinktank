<div class="blog-list xl:w-1/3">
  @if(get_the_post_thumbnail_url($recent["ID"]))
  <div class="flex flex-col lg:flex-row lg:items-center lg:border-b lg:border-tt-brown xl:flex-col xl:mx-8">
    <div class="w-full lg:w-5/12 xl:w-full">
      <img class="h-56 w-full object-cover object-center md:h-64 lg:object-cover lg:h-68 xl:h-64" src="{{ get_the_post_thumbnail_url($recent["ID"]) }}" />
    </div>
    <div class="bottom-border w-full p-8 flex flex-col border-b border-tt-brown md:p-12 lg:py-0 lg:w-7/12 lg:border-0 xl:w-full xl:px-4 xl:pt-4 xl:pb-12">
      <header class="text-left">
        <h2 class="entry-title font-oswald font-semibold text-2xl text-tt-darkblue pb-2 leading-relaxed"><a class="hover:text-tt-gold" href="{!! get_permalink($recent["ID"]) !!}">{!! get_the_title($recent["ID"]) !!}</a></h2>
        <p class="byline author vcard text-tt-gold font-muli font-black text-left">
          {{ __('By', 'sage') }} <a class="hover:text-tt-darkblue" href="{{ get_author_posts_url($recent["post_author"]) }}" rel="author" class="fn">
            {{ get_the_author_meta('display_name', $recent["post_author"]) }}
          </a>
          <span class="text-tt-darkblue font-bold">|</span>
          <time class="updated font-semibold" datetime="{!! date(DATE_ATOM, strtotime($recent["post_date"])) !!}">{!! date("F j, Y", strtotime($recent["post_date"])) !!}</time>
        </p>
      </header>
      <div class="entry-summary leading-relaxed font-muli text-tt-darkblue text-left">
        {!! wp_trim_words($recent["post_content"], 16, '...'); !!}
        <div class="pt-8 pb-2 text-center md:pb-0 md:text-left lg:pt-8 xl:text-center">
          <a class="bg-tt-darkblue text-tt-sand py-2 px-8 text-lg uppercase hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block" href="{!!get_permalink($recent["ID"]) !!}">Read More</a>
        </div>
      </div>
    </div>

    @else
    <div class="flex flex-col xl:mx-8">
    <div class="bottom-border bb-noimage w-full p-8 flex flex-col border-b border-tt-brown md:p-12 xl:border-t xl:px-0">
      <header class="text-left">
        <h2 class="entry-title font-oswald font-semibold text-2xl text-tt-darkblue pb-2 leading-relaxed"><a class="hover:text-tt-gold" href="{!! get_permalink($recent["ID"]) !!}">{!! get_the_title($recent["ID"]) !!}</a></h2>
        <p class="byline author vcard text-tt-gold font-muli font-black text-left">
          {{ __('By', 'sage') }} <a class="hover:text-tt-darkblue" href="{{ get_author_posts_url($recent["post_author"]) }}" rel="author" class="fn">
            {{ get_the_author_meta('display_name', $recent["post_author"]) }}
          </a>
          <span class="text-tt-darkblue font-bold">|</span>
          <time class="updated font-semibold" datetime="{!! date(DATE_ATOM, strtotime($recent["post_date"])) !!}">{!! date("F j, Y", strtotime($recent["post_date"])) !!}</time>
        </p>
      </header>
      <div class="entry-summary leading-relaxed font-muli text-tt-darkblue text-left">
        <div class="xl:hidden">
          {!! wp_trim_words($recent["post_content"], 30, '...'); !!}
        </div>
        <div class="hidden xl:block">
            {!! wp_trim_words($recent["post_content"], 16, '...'); !!}
          </div>
        <div class="pt-8 pb-2 text-center md:pb-0 md:text-left lg:pt-8 xl:text-center">
          <a class="bg-tt-darkblue text-tt-sand py-2 px-8 text-lg uppercase hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block" href="{!!get_permalink($recent["ID"]) !!}">Read More</a>
        </div>
      </div>
    </div>
    @endif

  </div>
</div>