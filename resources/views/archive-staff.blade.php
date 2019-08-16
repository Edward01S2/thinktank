@extends('layouts.app')

@section('content')

  <section id="hero">
    <div class="">
      <div class="relative z-10">
        <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-72 xl:h-76" src="{{ $options_page->acf_options['hero_image']['url']}}" />
        <div class="absolute h-full w-full bg-tt-brown top-0 opacity-35"></div>
      </div>
    </div>
  </section>

  <section id="staff" class="overflow-hidden relative z-20 -mt-6 md:-mt-16 lg:-mt-32 lg:pb-12 xl:-mt-48">
    <div class="relative rounded-top w-curve w-margin h-16 bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64"></div>
    <div class="relative -mt-10 z-30 lg:-mt-16 xl:-mt-48">
      <div class="text-center xl:pt-4">
        <div class="py-8 bg-tt-sand md:pt-0 lg:pt-4"> 
          <h2 class="uppercase text-2xl pb-12 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">Our Team</span></h2>

          <div class="staff-slider container mx-auto md:flex md:flex-wrap lg:mx-auto">
            @foreach($staff_loop as $item)
            <div class="flex flex-col items-center pb-4 md:w-1/2 md:py-8 xl:w-1/3">
              <div>
                <img class="object-cover object-top rounded-full h-40 w-40 mb-6 mx-auto lg:h-64 lg:w-64" src="{!! $item['image'] !!}" />
              </div>
              <div class="text-center px-8 lg:px-16 xl:px-14">
                <h3 class="text-tt-gold font-black tracking-wide pb-4 lg:text-lg">
                  {!! $item['name'] !!}@php if(!empty($item['tags'])) { echo '<span class="text-xs">,</span>'; }@endphp
                  <span class="text-xs font-semibold">
                    @php
                    if(!empty($item['tags'])) {
                      $output = array();
                      foreach($item['tags'] as $tag) {
                        $string = (string)$tag->name;
                        array_push($output, "$string");
                      }
                      echo implode(', ', $output);
                    }
                    @endphp
                  </span>
                </h3>
                <div class="text-center pb-4 md:pb-4 md:text-md lg:leading-loose">
                  {!! $item['content'] !!}
                </div>
                <div class>
                  <a class="bg-tt-darkblue text-tt-sand px-10 text-lg py-2 uppercase mb-16 hover:bg-tt-gold hover:text-tt-darkblue xl:inline-block xl:mb-8" href="{!! $item['link'] !!}">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="append-dots relative block"></div>

        </div>
      </div>
    </div>
  </section>

  @include('partials.get-in-touch')

  {{-- @debug --}}
  {{-- @dump($staff_loop) --}}
  {{-- @dump($options_page->acf_options['form']) --}}

@endsection
