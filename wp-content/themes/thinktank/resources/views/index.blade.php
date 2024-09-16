@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="">
            <div class="relative z-10">
                <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-[24rem] xl:h-[30rem]"
                    src="{{ $options_page->acf_options['blog_hero_image']['url'] }}" />
                <div class="absolute top-0 w-full h-full bg-tt-brown opacity-35"></div>
            </div>
        </div>
    </section>

    <section id="specialties" class="relative z-20 -mt-6 overflow-hidden md:-mt-16 lg:-mt-32 xl:-mt-48">
        <div class="relative h-16 rounded-top w-curve w-margin bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64"></div>
        <div class="relative z-30 -mt-10 lg:-mt-16 xl:-mt-48">
            <div class="text-center xl:pt-4 xl:pb-8">
                <div class="px-4 py-6 pb-8 bg-tt-sand md:pt-0 md:pb-0 xl:pb-0">
                    <h2
                        class="pb-2 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-12">
                        <span class="title-line">{!! App::title() !!}</span></h2>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-tt-sand xl:relative xl:z-20 xl:-mt-6">
        <div class="container mx-auto">
            @if (!have_posts())
                <div class="alert alert-warning">
                    {{ __('Sorry, no results were found.', 'sage') }}
                </div>
                {!! get_search_form(false) !!}
            @endif
            <div class="blog-container">
                @while (have_posts())
                    @php the_post() @endphp
                    @if (get_the_post_thumbnail_url())
                        @include('partials.content-image')
                    @else
                        @include('partials.content')
                    @endif
                @endwhile

                <div class="py-12 text-center">
                    {!! get_the_posts_pagination([
                        'prev_text' => __('&lt;', 'textdomain'),
                        'next_text' => __('&gt', 'textdomain'),
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    @include('partials.get-in-touch')
@endsection
