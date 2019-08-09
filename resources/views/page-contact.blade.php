@extends('layouts.app')

@section('content')

<section id="contact" class="bg-tt-brown relative">
  <div class="relative z-10 flex flex-col text-center text-tt-darkblue py-8 md:py-16 lg:flex-row lg:flex-wrap lg:mx-auto lg:px-8 xl:max-w-7xl">
    <div class="lg:order-0 lg:text-left lg:w-1/3">
      <h2 class="uppercase text-2xl pb-8 font-oswald font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line orange">Get in Touch</span></h2>
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
</section>

@endsection
