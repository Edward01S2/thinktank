@extends('layouts.app')

@section('content')

  {{-- @include('partials.page-header') --}}

  <section id="hero">
    <div class="">
      <div class="relative z-10">
        <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-72 xl:h-76" src="{!! App::featImage() !!}" />
        <div class="absolute h-full w-full bg-tt-brown top-0 opacity-35"></div>
      </div>
    </div>
  </section>

  <section id="specialties" class="overflow-hidden relative z-20 -mt-6 md:-mt-16 lg:-mt-32 xl:-mt-48">
    <div class="relative rounded-top w-curve w-margin h-16 bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64"></div>
    <div class="relative -mt-10 z-30 lg:-mt-16 xl:-mt-48">
      <div class="text-center xl:pt-4">
        <div class="px-4 py-8 bg-tt-sand md:pt-0 lg:pt-4"> 
          <h2 class="uppercase text-2xl pb-10 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">{!! $title !!}</span></h2>
          <div class="accordion md:pb-8 lg:flex lg:pb-4 xl:max-w-7xl xl:mx-auto">
            @foreach($service_loop as $service)
              <div class="accordion-container flex flex-col py-2 px-4 bg-tt-sand rounded shadow-tt shadow-xl shadow-md mb-6 md:max-w-md md:mx-auto md:py-2 lg:max-w-xl lg:w-1/3 lg:mx-4 lg:self-start xl:mx-6">
                <div class="accordion-header flex items-center justify-between">
                  <div class="flex items-center">
                    <img class="w-12 md:w-16" src="{!! $service['image'] !!}"/> 
                    <h3 class="pl-2 text-tt-gold font-black tracking-wide lg:pl-4 lg:text-base">{!! $service['title'] !!}</h3>
                  </div>
                  <button class="accordion-btn outline-none hover:text-tt-gold">
                      <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                      <svg class="close h-8 w-8 hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                  </button>
                </div>
                <div class="accordion-content flex hidden">
                  <ul class="pl-12 text-left tt-text-darkblue font-muli pb-2 md:pl-16 lg:pl-20">
                    @foreach($service['specialties'] as $item)
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

  @include('partials.get-in-touch')


  @debug
    {{-- @debug
  @dump($team->form) --}}

@endsection
