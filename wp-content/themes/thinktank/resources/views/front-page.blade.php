@extends('layouts.app')

@section('content')
    {{-- @include('partials.page-header') --}}

    <section id="hero"
        class="relative z-10 py-40 bg-bottom bg-no-repeat bg-cover sm:py-60 lg:py-80 xl:py-[25rem] xl:bg-center"
        style="background-image: url('{!! $hero->bg_image->url !!}');">
        <div class="container relative z-10 mx-auto">
            <div class="flex flex-col justify-center pb-4 md:pb-0">
                {{--                 <img class="w-1/2 py-12 mx-auto md:w-2/5 lg:w-1/4 lg:py-16 xl:w-1/5" src="{!! $hero->hero_image->url !!}" /> --}}
                <div class="flex flex-col px-8 text-center gap-28 md:gap-36 lg:gap-56 xl:gap-[24rem]">
                    {{--                     <h2 class="pb-4 text-4xl font-semibold tracking-wider uppercase text-tt-gold font-oswald xl:text-5xl">
                        {!! $hero->title !!}</h2> --}}
                    {{--                     <div class="flex justify-center md:pb-4">
                        <div class="px-4 py-2 rounded bg-opacity-70 bg-tt-sand">
                            <p class="mb-0 text-lg font-semibold leading-normal text-tt-darkblue xl:text-xl">
                                {!! $hero->content !!}</p>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 z-20 flex justify-center text-center bottom-28">
            <a href="#specialties" class="hover:opacity-50">
                <svg class="w-8 h-8 lg:h-10 lg:w-10" width="1px" height="1px" viewBox="0 0 32 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <g stroke-width="3" stroke="#C3884D" stroke-linecap="round">
                            <path d="M30 11L16 22 2 11" />
                            <path d="M30 2L16 13 2 2" />
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </section>

    <section id="specialties" class="relative z-20 -mt-24 overflow-hidden">
        <div class="h-16 rounded-top w-curve w-margin bg-tt-beige md:h-24 lg:h-32 xl:h-64"></div>
        <div class="-mt-8 lg:-mt-16 xl:-mt-48">
            <div class="text-center xl:pt-4">
                <div class="px-4 pt-4 pb-8 bg-tt-beige spec-bg md:pt-0 lg:pt-4"
                    style="background-image: linear-gradient(to bottom, #e9ddd2, #e9ddd2 10%, rgba(233, 221, 210, 0.8)), url('{!! $specialties->background->url !!}');">
                    {{--                     <h2
                        class="pb-8 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-12">
                        <span class="title-line">{!! $specialties->title !!}</span>
                    </h2> --}}
                    <h2
                        class="pb-8 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-12">
                        <span class="title-line">{!! $hero->content !!}</span>
                    </h2>
                    <p class="max-w-screen-lg pb-8 mx-auto text-lg !leading-loose text-tt-darkblue md:pb-12 lg:text-2xl">
                        {!! $specialties->content !!}</p>
                    <div class="accordion md:pb-8">
                        @foreach ($service_loop as $service)
                            <div
                                class="flex flex-col px-4 py-2 mb-6 rounded shadow-xl accordion-container bg-tt-sand md:max-w-md md:mx-auto md:py-2 lg:max-w-xl">
                                <div class="flex items-center justify-between accordion-header">
                                    <div class="flex items-center">
                                        <img class="w-12 md:w-16" src="{!! $service['image'] !!}" />
                                        <h3 class="pl-2 font-black tracking-wide text-tt-gold lg:pl-4 lg:text-lg">
                                            {!! $service['title'] !!}</h3>
                                    </div>
                                    <button class="outline-none accordion-btn hover:text-tt-gold">
                                        <svg class="w-8 h-8 open " xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-plus-square">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                            </rect>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        <svg class="hidden w-8 h-8 close" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-minus-square">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                            </rect>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="hidden accordion-content">
                                    <ul class="pb-2 pl-12 text-left text-tt-darkblue font-muli md:pl-16 lg:pl-20">
                                        @foreach ($service['specialties'] as $item)
                                            <li>{!! $item['specialty'] !!}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured" class="overflow-hidden">
        <div class="container px-4 mx-auto lg:px-8">
            <div class="py-8 text-center md:py-12 lg:py-16 xl:py-24">
                <h2
                    class="pb-8 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-12">
                    <span class="title-line">Featured On</span>
                </h2>
                <div class="pt-4 pb-6 featured-on md:pb-8 xl:pb-12">
                    @foreach ($items as $item)
                        <a href="{!! $item->link->url !!}" class="md:inline-block md:px-8" target="{!! $item->link->target !!}">
                            <img src="{!! $item->logo->url !!}" alt="{!! $item->logo->alt !!}"
                                class="object-contain w-auto mx-auto h-14 lg:h-16">
                        </a>
                    @endforeach
                </div>
                <div class="flex justify-center gap-4 text-tt-darkblue lg:gap-8">
                    <button class="prev arrow"><svg class="w-8 h-8 fill-current hover:text-tt-gold xl:w-10 xl:h-10"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm8-10a8 8 0 1 0-16 0 8 8 0 0 0 16 0zM7.46 9.3L11 5.75l1.41 1.41L9.6 10l2.82 2.83L11 14.24 6.76 10l.7-.7z" />
                        </svg></button>
                    <button class="next arrow"><svg class="w-8 h-8 fill-current hover:text-tt-gold xl:w-10 xl:h-10"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 1 0 20 10 10 0 0 1 0-20zM2 10a8 8 0 1 0 16 0 8 8 0 0 0-16 0zm10.54.7L9 14.25l-1.41-1.41L10.4 10 7.6 7.17 9 5.76 13.24 10l-.7.7z" />
                        </svg></button>
                </div>
            </div>
        </div>
    </section>

    <section id="staff">
        <div class="flex flex-col bg-tt-stone text-tt-sand md:flex-row">
            <div class="relative pt-8 md:w-1/2 xl:flex-row xl:justify-end md:py-8 xl:pt-0 xl:px-0">
                {{--                 <div class="hidden xl:block xl:w-220 2xl:w-300">
                    <img class="object-cover object-top w-40 h-40 mb-6 rounded-full md:h-32 md:w-32 xl:h-48 xl:w-48 2xl:h-64 2xl:w-64"
                        src="{!! $staff_loop[0]['image'] !!}" />
                </div> --}}
                <div
                    class="relative flex flex-col items-center xl:items-start xl:pt-12 xl:pl-4 lg:mx-auto lg:max-w-[calc(512px-2rem)] xl:max-w-[calc(640px-2rem)] xl:mr-0 2xl:max-w-[calc(720px-2rem)]">
                    <h2
                        class="pb-10 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-sand md:text-3xl md:pb-12 xl:pl-[14rem]">
                        <span class="title-line">Team Highlights</span>
                    </h2>
                    <div class="container block mx-auto feat-staff">
                        @foreach ($staff_loop as $item)
                            <div>
                                <div class="flex flex-col items-center lg:gap-8 xl:flex-row xl:items-start">
                                    <img class="object-cover object-top w-40 h-40 mx-auto mb-6 rounded-full md:h-32 md:w-32 shrink-0 lg:mb-0 xl:h-48 xl:w-48"
                                        src="{!! $item['image'] !!}" />
                                    <div class="px-8 pb-4 text-center lg:px-16 xl:text-left xl:px-0">
                                        <h3 class="pb-4 font-black tracking-wide text-tt-gold lg:text-lg xl:text-xl">
                                            {!! $item['name'] !!}@php
                                                if (!empty($item['tags'])) {
                                                    echo '<span class="text-xs">,</span>';
                                                }
                                            @endphp
                                            <span class="text-xs font-semibold">
                                                @include('partials.staff-tag', ['tags' => $item['tags']])
                                            </span>
                                        </h3>
                                        <div class="pb-4 xl:pr-16">
                                            <p class="text-center md:md:text-md xl:text-left line-clamp-4">
                                                {!! $item['content'] !!}
                                            </p>
                                        </div>
                                        <div class>
                                            <a class="px-10 py-2 mb-16 text-lg uppercase bg-tt-sand text-tt-stone hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block xl:mb-0"
                                                href="{!! $item['link'] !!}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="relative block mx-auto append-dots feat-staff-dots xl:ml-0 xl:pl-[14rem]"></div>
                    <div class="w-full text-center bg-tt-sand md:bg-tt-stone xl:static xl:text-left xl:pl-[14rem]">
                        <a class="block py-2 mx-8 my-4 text-lg uppercase bg-tt-darkblue hover:bg-tt-gold hover:text-tt-darkblue lg:inline-block lg:px-12 xl:mx-0 xl:mb-12"
                            href="/staff">Meet the Team</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 xl:py-12"
                style="background-image: url('{!! $team->background_image->url !!}'); background-size: cover; background-repeat: no-repeat;">
                <div
                    class="flex flex-col items-center justify-center w-full h-full px-8 py-8 text-center lg:px-8 xl:py-0 xl:items-start">
                    <div
                        class="w-full max-w-[calc(512px-2rem)] xl:max-w-[calc(640px-4rem)] xl:ml-0 2xl:max-w-[calc(720px-4rem)]">
                        <div class="max-w-[500px] mx-auto">
                            <h2
                                class="pb-4 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-8 lg:pb-4">
                                <span class="title-line orange">Join Our Team</span>
                            </h2>
                            <p class="pb-2 text-tt-darkblue">Looking to join our team? Contact us now.</p>
                            <div class="w-full text-center text-tt-darkblue lg:px-0">
                                @php
                                    //echo $team->form->id;
                                    gravity_form_enqueue_scripts($team->form->id, true);
                                    gravity_form($team->form->id, false, false, false, '', true, 1);
                                @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.get-in-touch')

    {{-- @debug
  @dump($options_page) --}}
    {{-- @debug
  @dump($team->form) --}}
@endsection
