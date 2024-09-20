@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php the_post() @endphp
        <article @php post_class() @endphp>

            <section id="hero">
                <div class="">
                    <div class="relative z-10">
                        <img class="object-cover w-full h-40 grayscale md:h-64 lg:h-[24rem] xl:h-[30rem]"
                            src="{{ $options_page->acf_options['staff_bg']['url'] }}" />
                        <div class="absolute top-0 w-full h-full bg-tt-brown opacity-35"></div>
                    </div>
                </div>
            </section>

            <section id="staff-container" class="relative z-20 -mt-6 overflow-hidden md:-mt-16 lg:-mt-32 xl:-mt-48">
                <div
                    class="relative h-16 rounded-top w-curve w-margin bg-tt-darkblue md:bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64">
                </div>
                <div class="relative z-30 -mt-12 lg:-mt-16 xl:-mt-48">
                    <div class="text-center xl:pt-4">
                        <div class="px-4 py-8 bg-tt-darkblue md:pt-0 md:hidden lg:pt-4">
                            <h2
                                class="pb-2 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-sand md:text-3xl md:pb-12">
                                {!! get_the_title() !!}
                                <span class="text-base font-semibold">
                                    @include('partials.staff-tag', ['tags' => get_the_tags()])
                                </span>
                            </h2>
                            <div class="hidden">
                                <a class="font-semibold underline uppercase font-oswald text-tt-blue"
                                    href="mailto:{{ $email }}">{{ $email }}</a>
                            </div>
                        </div>

                        <div class="md:bg-tt-sand">
                            <div class="container pt-8 pb-12 mx-auto md:flex md:pt-12 sm:pb-20 lg:pb-28">
                                <div class="md:w-1/3">
                                    <img class="object-cover object-top w-48 h-48 mx-auto rounded-full md:object-top lg:h-64 lg:w-64"
                                        src="{!! App::featImage() !!}" />
                                </div>

                                <div class="md:w-2/3 lg:pr-24">
                                    <div class="hidden md:block md:text-left">
                                        <h2
                                            class="pb-2 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-darkblue">
                                            {!! get_the_title() !!}@php
                                                if (!empty(get_the_tags())) {
                                                    echo '<span class="text-xs">,</span>';
                                                }
                                            @endphp
                                            <span class="text-base font-semibold">
                                                @include('partials.staff-tag', ['tags' => get_the_tags()])
                                            </span>
                                        </h2>
                                        <div class="hidden">
                                            <a class="font-semibold underline uppercase font-oswald text-tt-blue"
                                                href="mailto:{{ $email }}">{{ $email }}</a>
                                        </div>
                                    </div>
                                    <div
                                        class="px-8 py-8 pt-4 text-center staff-content text-tt-darkblue md:text-left md:px-0 md:pr-8">
                                        @php the_content() @endphp
                                    </div>


                                    <div
                                        class="grid max-w-screen-sm grid-cols-1 gap-6 px-4 md:gap-6 sm:px-0 xl:max-w-screen-md">

                                        @if (!empty($education))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Education',
                                                'content' => $education,
                                            ])
                                        @endif

                                        @if (!empty($trainings))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Trainings',
                                                'content' => $trainings,
                                            ])
                                        @endif



                                        @if (!empty($specialties))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Areas of Experience',
                                                'content' => $specialties,
                                            ])
                                        @endif

                                        @if (!empty($services))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Services',
                                                'content' => $services,
                                            ])
                                        @endif

                                        @if (!empty($insurances))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Insurances',
                                                'content' => $insurances,
                                            ])
                                        @endif


                                        @if (!empty($ages))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Ages',
                                                'content' => $ages,
                                            ])
                                        @endif

                                        @if (!empty($languages))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Languages',
                                                'content' => $languages,
                                            ])
                                        @endif

                                        @if (!empty($location))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Location',
                                                'content' => $location,
                                            ])
                                        @endif

                                        @if (!empty($note))
                                            @include('partials.staff-accordion', [
                                                'title' => 'Note',
                                                'content' => $note,
                                            ])
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            @include('partials.get-in-touch')

        </article>
    @endwhile
@endsection
