<section id="touch" class="bg-tt-darkblue relative">
  <div class="absolute w-full h-full z-0 opacity-15" style="background-image: url('{{$options_page->acf_options['background_image']['url']}}'); background-size:cover;"></div>
  <div class="relative z-10 flex flex-col text-center text-tt-sand px-8 py-8 md:py-16 lg:max-w-3xl lg:mx-auto">
    <h2 class="uppercase text-2xl pb-4 font-oswald text-tt-sand font-semibold tracking-wider md:text-3xl md:pb-12"><span class="title-line">Get in Touch</span></h2>
    <p class="md:px-8 md:pb-4">There is a solution for your mental health needs, and we are here to help you find it. If this is an emergency, please call 911.</p>
    <div>
      <a class="underline font-semibold" ref="">972-913-4738</a>
    </div>
    <div class="text-tt-darkblue">
      @php
        //echo $team->form->id;
      gravity_form_enqueue_scripts($options_page->acf_options['form']['id'], true);
      gravity_form($options_page->acf_options['form']['id'], false, false, false, '', true, 1); 
      @endphp
    </div>
  </div>
</section>