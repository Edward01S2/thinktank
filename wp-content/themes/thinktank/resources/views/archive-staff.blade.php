@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="">
            <div class="relative z-10">
                <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-[24rem] xl:h-[30rem]"
                    src="{{ $options_page->acf_options['hero_image']['url'] }}" />
                <div class="absolute top-0 w-full h-full bg-tt-brown opacity-35"></div>
            </div>
        </div>
    </section>
    {{--     @php
        $team = $options_page->acf_options['full_staff'];
    @endphp
    @if ($team)
        <section id="team" class="relative z-20 -mt-6 overflow-hidden md:-mt-16 lg:-mt-32 xl:-mt-48">
            <div class="relative h-16 rounded-top w-curve w-margin bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64">
            </div>

            <div class="relative z-30 -mt-10 lg:-mt-16 xl:-mt-48">

                <div class="text-center xl:pt-4">
                    <div class="py-8 bg-tt-sand md:pt-0 lg:pt-4">
                        <h2
                            class="pb-12 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-12">
                            <span class="title-line">Our Team</span>
                        </h2>

                        <div class="container px-4 mx-auto lg:px-8">
                            <div class="max-w-screen-md mx-auto">
                                <img src="{{ $team['url'] }}" alt="{{ $team['alt'] }}"
                                    class="object-cover w-full h-auto rounded-xl aspect-video">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section>
    @endif --}}

    <section id="therapist" class="relative z-20 -mt-6 overflow-hidden md:-mt-16 lg:-mt-32 xl:-mt-48">
        <div class="relative h-16 rounded-top w-curve w-margin bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64">
        </div>

        <div class="relative z-30 -mt-10 lg:-mt-16 xl:-mt-48">
            <div class="text-center xl:pt-4">
                <div class="py-8 bg-tt-sand md:pt-0 lg:pt-4">
                    <h2
                        class="pb-12 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-12">
                        <span class="title-line">Our Therapists</span>
                    </h2>

                    <div class="container mx-auto staff-slider md:flex md:flex-wrap lg:mx-auto">
                        @foreach ($get_thera as $item)
                            <div class="flex flex-col items-center pb-4 md:w-1/2 md:py-8 xl:w-1/3">
                                <div>
                                    <img class="object-cover object-top w-40 h-40 mx-auto mb-6 rounded-full lg:h-64 lg:w-64"
                                        src="{!! $item['image'] !!}" />
                                </div>
                                <div class="px-8 text-center lg:px-16 xl:px-14">
                                    <h3 class="pb-4 font-black tracking-wide text-tt-gold lg:text-lg">
                                        {!! $item['name'] !!}@php
                                            if (!empty($item['tags'])) {
                                                echo '<span class="text-xs">,</span>';
                                            }
                                        @endphp
                                        <span class="text-xs font-semibold">
                                            @php
                                                if (!empty($item['tags'])) {
                                                    $output = [];
                                                    $lpc_tag = null;
                                                    foreach ($item['tags'] as $tag) {
                                                        if (stripos($tag->name, 'LPC') !== false) {
                                                            $lpc_tag = $tag;
                                                        } else {
                                                            array_push($output, $tag->name);
                                                        }
                                                    }
                                                    if ($lpc_tag) {
                                                        array_unshift($output, $lpc_tag->name);
                                                    }
                                                    echo implode(', ', $output);
                                                }
                                            @endphp
                                        </span>
                                    </h3>
                                    <div class="pb-4">
                                        <p class="text-center md:text-md lg:leading-loose line-clamp-4">
                                            {!! $item['content'] !!}
                                        </p>
                                    </div>
                                    <div class>
                                        <a class="px-10 py-2 mb-16 text-lg uppercase bg-tt-darkblue text-tt-sand hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block xl:mb-8"
                                            href="{!! $item['link'] !!}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="relative block append-staff-dots"></div>

                </div>
            </div>
        </div>
    </section>

    @if (count($get_admin) > 0)
        <section id="admin" class="relative z-20 overflow-hidden md:pt-12 lg:pt-0">
            <div class="relative z-30">
                <div class="text-center xl:pt-4">
                    <div class="py-8 bg-tt-sand md:pt-0 lg:pt-4">
                        <h2
                            class="pb-12 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue md:text-3xl md:pb-12">
                            <span class="title-line">Our Administrators</span>
                        </h2>

                        <div class="container mx-auto admin-slider md:flex md:flex-wrap lg:mx-auto">
                            @foreach ($get_admin as $item)
                                <div class="flex flex-col items-center pb-4 md:w-1/2 md:py-8 xl:w-1/3">
                                    <div>
                                        <img class="object-cover object-top w-40 h-40 mx-auto mb-6 rounded-full lg:h-64 lg:w-64"
                                            src="{!! $item['image'] !!}" />
                                    </div>
                                    <div class="px-8 text-center lg:px-16 xl:px-14">
                                        <h3 class="pb-4 font-black tracking-wide text-tt-gold lg:text-lg">
                                            {!! $item['name'] !!}@php
                                                if (!empty($item['tags'])) {
                                                    echo '<span class="text-xs">,</span>';
                                                }
                                            @endphp
                                            <span class="text-xs font-semibold">
                                                @php
                                                    if (!empty($item['tags'])) {
                                                        $output = [];
                                                        $lpc_tag = null;
                                                        foreach ($item['tags'] as $tag) {
                                                            if (stripos($tag->name, 'LPC') !== false) {
                                                                $lpc_tag = $tag;
                                                            } else {
                                                                array_push($output, $tag->name);
                                                            }
                                                        }
                                                        if ($lpc_tag) {
                                                            array_unshift($output, $lpc_tag->name);
                                                        }
                                                        echo implode(', ', $output);
                                                    }
                                                @endphp
                                            </span>
                                        </h3>
                                        <div class="pb-4">
                                            <p class="text-center md:text-md lg:leading-loose line-clamp-4">
                                                {!! $item['content'] !!}
                                            </p>
                                        </div>
                                        <div class>
                                            <a class="px-10 py-2 mb-16 text-lg uppercase bg-tt-darkblue text-tt-sand hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block xl:mb-8"
                                                href="{!! $item['link'] !!}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="relative block append-admin-dots"></div>

                    </div>
                </div>
            </div>
        </section>
    @endif


    @include('partials.get-in-touch')

    {{-- @debug
  @dump($options_page->acf_options['gallery']) --}}
    {{-- @dump($options_page->acf_options['form']) --}}
@endsection
