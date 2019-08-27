@extends('layouts.app')

@section('content')

<section id="hero">
  <div class="">
    <div class="relative z-10">
      <img class="h-40 object-cover w-full grayscale md:h-64 lg:h-72 xl:h-76" src="{!! App::featImage() !!}" />
      <div class="absolute h-full w-full bg-tt-brown top-0 opacity-35"></div>
    </div>
  </div>
</section>

<section id="contact" class="relative z-20 -mt-6 overflow-hidden md:-mt-16 lg:-mt-32 xl:-mt-48">
  <div class="relative rounded-top w-curve w-margin h-16 bg-tt-darkblue md:block md:z-20 md:h-24 lg:h-32 xl:h-64"></div>
  <div class="relative bg-tt-darkblue z-10 -mt-10 z-30 lg:-mt-16 xl:-mt-40">
    <div class="absolute w-full h-full z-0" style="background-image: linear-gradient(to bottom, #112530, rgba(17, 37, 48, 0.92)25%), url('{{$options_page->acf_options['background_image']['url']}}'); background-size:repeat;"></div>
    <div class="relative z-20 flex flex-col text-center text-tt-sand py-8 md:pt-4 lg:flex-row lg:flex-wrap lg:mx-auto lg:px-8 lg:pb-16 xl:max-w-7xl">
      <div class="lg:order-0 lg:text-left lg:w-1/3">
        <h2 class="uppercase text-2xl pb-8 text-tt-sand font-oswald font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line orange">Get in Touch</span></h2>
        <div class="contact-content">
          @while(have_posts()) @php the_post() @endphp
          @php the_content() @endphp
          @endwhile
        </div>
      </div>
      <div class="pt-16 lg:w-full lg:order-2 xl:pt-8">

        <div class="gallery-slider relative pb-8">
          <div class="gallery w-full relative z-0"> 
            @if($gallery)
              @foreach($gallery as $image)
              <div class="">
                <img class="w-full h-72 object-cover object-center" data-lazy="{{ $image->url }}" />
              </div>
              @endforeach
            @endif
          </div>
          <button class="prev arrow"><svg class="h-12 w-12 fill-current hover:text-tt-gold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm8-10a8 8 0 1 0-16 0 8 8 0 0 0 16 0zM7.46 9.3L11 5.75l1.41 1.41L9.6 10l2.82 2.83L11 14.24 6.76 10l.7-.7z"/></svg></button>
          <button class="next arrow"><svg class="h-12 w-12 fill-current hover:text-tt-gold" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0a10 10 0 1 1 0 20 10 10 0 0 1 0-20zM2 10a8 8 0 1 0 16 0 8 8 0 0 0-16 0zm10.54.7L9 14.25l-1.41-1.41L10.4 10 7.6 7.17 9 5.76 13.24 10l-.7.7z"/></svg></button>
        </div>

        <div class="google-map">
          {!!$google_map!!}
        </div>
      </div>
      <div class="text-tt-darkblue contact-form px-8 lg:order-1 lg:px-0 lg:pl-8 lg:pt-12 lg:w-2/3 xl:pl-24">
        @php
          //echo $team->form->id;
        gravity_form_enqueue_scripts($options_page->acf_options['form']['id'], true);
        gravity_form($options_page->acf_options['form']['id'], false, false, false, '', true, 1); 
        @endphp
      </div>
    </div>
  </div>
</section>

@endsection
