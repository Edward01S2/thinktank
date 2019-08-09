@extends('layouts.app')

@section('content')

<section id="hero">
    <div class="">
      <div class="relative z-10">
        <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-72 xl:h-80" src="{{ $options_page->acf_options['hero_image']['url']}}" />
        <div class="absolute h-full w-full bg-tt-sand top-0 opacity-25"></div>
      </div>
    </div>
  </section>

  <section id="specialties" class="overflow-hidden relative z-20 -mt-6 md:-mt-16 lg:-mt-32 xl:-mt-48">
    <div class="relative rounded-top w-curve w-margin h-16 bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64"></div>
    <div class="relative -mt-10 z-30 lg:-mt-16 xl:-mt-48">
      <div class="text-center xl:pt-4">
        <div class="px-4 py-8 bg-tt-sand md:pt-0 lg:pt-4"> 
          <h2 class="uppercase text-2xl pb-10 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">Our Team</span></h2>

        </div>
      </div>
    </div>
  </section>

  @include('partials.get-in-touch')

  @debug
  {{-- @dump($options_page->acf_options['form']) --}}

@endsection
