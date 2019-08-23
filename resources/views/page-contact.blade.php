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

<section id="contact" class="relative z-20 -mt-6 md:-mt-16 lg:-mt-32 xl:-mt-48">
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
      <div class="google-map lg:order-2 lg:px-8 lg:flex-grow">
        {!!$google_map!!}
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
