@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <article @php post_class() @endphp>

    <section id="hero">
      <div class="">
        <div class="relative z-10">
          <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-72 xl:h-76" src="{{ $options_page->acf_options['staff_bg']['url']}}" />
          <div class="absolute h-full w-full bg-tt-brown top-0 opacity-35"></div>
        </div>
      </div>
    </section>

    <section id="staff-container" class="overflow-hidden relative z-20 -mt-6 md:-mt-16 lg:-mt-32 xl:-mt-48">
      <div class="relative rounded-top w-curve w-margin h-16 bg-tt-darkblue md:bg-tt-sand md:block md:z-20 md:h-24 lg:h-32 xl:h-64"></div>
      <div class="relative -mt-12 z-30 lg:-mt-16 xl:-mt-48">
        <div class="text-center xl:pt-4">
          <div class="px-4 py-8 bg-tt-darkblue md:pt-0 md:hidden lg:pt-4"> 
            <h2 class="uppercase text-2xl pb-2 font-oswald text-tt-sand font-semibold tracking-wider md:text-3xl md:pb-12">
              {!! get_the_title() !!}
              <span class="text-base font-semibold">
                @php
                if(!empty(get_the_tags())) {
                  $output = array();
                  foreach(get_the_tags() as $tag) {
                    $string = (string)$tag->name;
                    array_push($output, "$string");
                  }
                  echo implode(', ', $output);
                }
                @endphp
              </span>  
            </h2>
            <div class="hidden">
              <a class="uppercase underline font-oswald font-semibold text-tt-blue" href="mailto:{{ $email }}" >{{ $email }}</a>
            </div>
          </div>

          <div class="md:bg-tt-sand">
          <div class="container mx-auto pt-8 md:flex md:pt-12 lg:pb-20">
            <div class="md:w-1/3">
              <img class="rounded-full w-48 h-48 object-cover object-top md:object-top mx-auto lg:h-64 lg:w-64" src="{!! App::featImage() !!}" />
            </div>
            
            <div class="md:w-2/3 lg:pr-24">
              <div class="hidden md:block md:text-left">
                <h2 class="uppercase text-2xl pb-2 font-oswald text-tt-darkblue font-semibold tracking-wider">
                  {!! get_the_title() !!}@php if(!empty(get_the_tags())) { echo '<span class="text-xs">,</span>'; }@endphp
                  <span class="text-base font-semibold">
                    @php
                    if(!empty(get_the_tags())) {
                      $output = array();
                      foreach(get_the_tags() as $tag) {
                        $string = (string)$tag->name;
                        array_push($output, "$string");
                      }
                      echo implode(', ', $output);
                    }
                    @endphp
                  </span>  
                </h2>
                <div class="hidden">
                  <a class="uppercase underline font-oswald font-semibold text-tt-blue" href="mailto:{{ $email }}" >{{ $email }}</a>
                </div>
              </div>
              <div class="px-8 text-center staff-content py-8 pt-4 text-tt-darkblue md:text-left md:px-0 md:pr-8">
                @php the_content() @endphp
              </div>
              

              <div class="px-4 pb-4 md:flex md:px-0 md:pr-8">
                <div class="accordion md:pb-8 md:w-1/2 md:mr-8 lg:flex lg:pb-4 lg:mr-12">
                  <div class="accordion-container flex flex-col py-2 px-4 bg-tt-sand rounded shadow-tt shadow-xl shadow-md mb-6 md:py-2 lg:w-full lg:self-start">
                    <div class="accordion-header flex items-center justify-between">
                      <div class="flex items-center">
                        <h3 class="pl-2 text-tt-gold font-black tracking-wide lg:pl-4 lg:text-base">Education</h3>
                      </div>
                      <button class="accordion-btn outline-none hover:text-tt-gold">
                          <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                          <svg class="close h-8 w-8 hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                      </button>
                    </div>
                    <div class="accordion-content flex hidden text-left px-2 py-4 text-tt-darkblue">
                      {{ $education }}
                    </div>
                  </div>
                </div>
                <div class="accordion md:pb-8 md:w-1/2 lg:flex lg:pb-4">
                  <div class="accordion-container flex flex-col py-2 px-4 bg-tt-sand rounded shadow-tt shadow-xl shadow-md mb-6 md:py-2 lg:w-full lg:self-start">
                    <div class="accordion-header flex items-center justify-between">
                      <div class="flex items-center">
                        <h3 class="pl-2 text-tt-gold font-black tracking-wide lg:pl-4 lg:text-base">Specialties</h3>
                      </div>
                      <button class="accordion-btn outline-none hover:text-tt-gold">
                        <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                        <svg class="close h-8 w-8 hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                      </button>
                    </div>
                    <div class="accordion-content flex hidden text-left px-2 py-4 text-tt-darkblue">
                      {{ $specialties }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </section>

    </article>
  @endwhile

@endsection
