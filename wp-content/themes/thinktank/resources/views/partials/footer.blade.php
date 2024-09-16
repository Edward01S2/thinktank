<footer class="content-info bg-tt-gray">
    <div class="container mx-auto">
        <div
            class="flex flex-col items-center px-4 py-8 text-tt-sand lg:px-8 lg:py-4 lg:flex-row lg:flex-wrap lg:justify-between xl:px-8">
            <div class="pb-4 text-center lg:text-left lg:pb-0 xl:flex">
                <p class="pb-2 lg:pb-0 xl:mb-0">
                    <span class="font-bold tracking-wide">
                        @php bloginfo('name') @endphp
                    </span>
                    <span class="text-tt-gold">|</span>
                    {{ $options_page->acf_options['address'] }}
                </p>
                <div class="pb-4 xl:pl-8 lg:pb-0">
                    <a class="italic font-bold underline hover:text-tt-gold"
                        href="tel:{{ $options_page->acf_options['phone'] }}">{{ $options_page->acf_options['phone'] }}</a>
                </div>
            </div>
            <div class="pb-8 lg:pb-4 xl:pb-0">
                @include('partials.social')
            </div>
            <div class="lg:flex-grow lg:text-center xl:flex-grow-0">
                <p class="text-sm xl:mb-0 xl:text-base">
                    &copy;@php echo date("Y") @endphp @php bloginfo('name') @endphp
                </p>
            </div>
        </div>
    </div>
</footer>
