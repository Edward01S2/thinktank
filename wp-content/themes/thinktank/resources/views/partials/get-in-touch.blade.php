<section id="touch" class="relative bg-tt-darkblue">
    <div class="absolute z-0 w-full h-full opacity-10"
        style="background-image: url('{{ $options_page->acf_options['background_image']['url'] }}'); background-size:repeat;">
    </div>
    <div class="relative z-10 flex flex-col px-8 py-8 text-center text-tt-sand md:py-16 lg:max-w-3xl lg:mx-auto">
        <h2 class="pb-4 text-2xl font-semibold tracking-wider uppercase font-oswald text-tt-sand md:text-3xl md:pb-12">
            <span class="title-line">Voicemails & Emails</span>
        </h2>
        <p class="md:px-8 md:pb-4">There is a solution for your mental health needs, and we are here to help you find it.
            If this is an emergency, please call 911.</p>
        <div>
            <a class="italic font-bold underline hover:text-tt-gold" href="tel:972-913-4738">972-913-4738</a>
        </div>
        <div>
            @php
                //echo $team->form->id;
                gravity_form_enqueue_scripts($options_page->acf_options['form']['id'], true);
                gravity_form($options_page->acf_options['form']['id'], false, false, false, '', true, 1);
            @endphp
        </div>
    </div>
</section>
