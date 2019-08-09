@extends('layouts.app')

@section('content')

  {{-- @include('partials.page-header') --}}

  <section id="hero">
    <div class="container mx-auto">
      <div class="flex flex-col justify-center">
        <img class="w-1/2 mx-auto py-12 md:w-2/5 lg:w-1/4 lg:py-16 xl:w-1/5" src="{!! $hero->hero_image->url !!}" />
        <div class="text-center px-8 pb-8 md:pb-8">
          <h2 class="uppercase text-2xl pb-4 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl">{!! $hero->title !!}</h2>
          <p class="text-lg leading-normal font-muli text-gray-800 md:px-12 lg:px-32 xl:w-4/5 xl:mx-auto">{!! $hero->content !!}</p>
        </div>
      </div>
      <div class="text-center flex justify-center pb-16">
        <a href="#specialties">
          <svg class="h-10 w-10" width="1px" height="1px" viewBox="0 0 32 24" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <g stroke-width="3" stroke="#C3884D" stroke-linecap="round">
                <path d="M30 11L16 22 2 11"/>
                <path d="M30 2L16 13 2 2"/>
              </g>
            </g>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <section id="specialties" class="overflow-hidden">
    <div class="rounded-top w-curve w-margin h-16 bg-tt-beige md:h-24 lg:h-32 xl:h-64"></div>
    <div class="-mt-8 lg:-mt-16 xl:-mt-48">
      <div class="text-center xl:pt-4">
        <div class="px-4 py-8 bg-tt-beige spec-bg md:pt-0 lg:pt-4" style="background-image: linear-gradient(to bottom, #e9ddd2, #e9ddd2 10%, rgba(233, 221, 210, 0.8)), url('{!! $specialties->background->url !!}');"> 
          <h2 class="uppercase text-2xl pb-8 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">Our Specialties</span></h2>
          <div class="accordion md:pb-8">
            @foreach($service_loop as $service)
              <div class="accordion-container flex flex-col py-2 px-4 bg-tt-sand rounded-lg shadow-xl shadow-md mb-6 md:max-w-md md:mx-auto md:py-2 lg:max-w-xl">
                <div class="accordion-header flex items-center justify-between">
                  <div class="flex items-center">
                    <img class="w-2/12 md:w-16" src="{!! $service['image'] !!}"/> 
                    <h3 class="pl-2 text-tt-gold font-black tracking-wide lg:pl-4 lg:text-lg">{!! $service['title'] !!}</h3>
                  </div>
                  <button class="accordion-btn outline-none">
                      <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                      <svg class="close h-8 w-8 hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                  </button>
                </div>
                <div class="accordion-content flex hidden">
                  <ul class="pl-12 text-left font-muli pb-2 md:pl-16 lg:pl-20">
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

  <section id="staff">
    <div class="flex flex-col bg-tt-stone text-tt-sand md:flex-row">
      <div class="pt-8 flex flex-col items-center relative md:w-1/2 xl:flex-row xl:justify-end xl:pt-0 xl:px-0">
        <div class="hidden xl:block xl:w-220 2xl:w-300">
          <img class="object-cover object-top rounded-full h-40 w-40 mb-6 md:h-32 md:w-32 xl:h-48 xl:w-48 2xl:h-64 2xl:w-64" src="{!! $staff_loop[0]['image'] !!}" />
        </div>
        <div class="flex flex-col relative items-center xl:items-start xl:w-420 xl:pt-12 xl:pl-4">
          <h2 class="uppercase text-2xl pb-10 font-oswald text-tt-sand font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">Staff Highlights</span></h2>
          @foreach($staff_loop as $item)
            <img class="object-cover object-top rounded-full h-40 w-40 mb-6 md:h-32 md:w-32 xl:hidden" src="{!! $item['image'] !!}" />
            <div class="text-center px-8 pb-8 lg:px-16 xl:text-left xl:px-0">
              <h3 class="text-tt-gold font-black tracking-wide pb-4 lg:text-lg">
                {!! $item['name'] !!}
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
              <div class="text-center pb-4 md:pb-4 md:text-md xl:text-left xl:pr-16">
                {!! $item['content'] !!}
              </div>
              <div class>
                <a class="bg-tt-sand text-tt-stone px-10 text-lg py-2 uppercase mb-16 xl:inline-block xl:mb-8" href="{!! $item['link'] !!}">Read More</a>
              </div>
            </div>
          @endforeach
          <div class="bg-tt-sand w-full text-center md:bg-tt-stone md:mb-2 xl:static xl:text-left">
            <a class="bg-tt-darkblue block mx-8 my-4 uppercase py-2 text-lg lg:inline-block lg:px-12 xl:mx-0 xl:mb-12" href="/staff">Meet the Full Team</a>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2" style="background-image: url('{!! $team->background_image->url !!}'); background-size: cover; background-repeat: no-repeat;">
        <div class="flex flex-col items-center justify-center h-full pt-8 pb-8 md:pt-12 xl:py-0 xl:w-640 2xl:w-720">
          <h2 class="uppercase text-2xl pb-4 font-oswald text-tt-darkblue font-semibold tracking-wider md:text-3xl md:pb-8 lg:pb-4"><span class="title-line orange">Join Our Team</span></h2>
          <p class="text-tt-darkblue pb-2">Looking to join our team? Contact us now.</p>
          <div class="text-tt-darkblue w-full px-8 text-center lg:px-0">
            @php
              //echo $team->form->id;
              gravity_form_enqueue_scripts($team->form->id, true);
              gravity_form($team->form->id, false, false, false, '', true, 1); 
            @endphp
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
