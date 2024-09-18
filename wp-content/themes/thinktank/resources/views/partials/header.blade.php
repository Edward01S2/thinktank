<header class="banner bg-tt-sand lg:fixed lg:w-full lg:z-30">
    <div class="container mx-auto md:px-8">
        <nav class="flex flex-wrap items-center justify-between pt-4 pb-4 lg:flex-no-wrap">
            <div id="nav-brand" class="flex items-center flex-shrink-0 pl-4">
                <a class="brand hover:opacity-50" href="{{ home_url('/') }}">
                    <img class="h-10 md:h-12 lg:h-14" src="{{ $options_page->acf_options['logo']['url'] }}" alt="">
                </a>
            </div>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 focus:outline-none">
                    <svg id="menu-btn" class="w-8 h-8 fill-current" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div id="main-nav" class="hidden w-full lg:flex lg:items-center lg:w-auto">
                <div class="relative w-full text-sm lg:w-auto">
                    <div class="absolute w-full mt-4 text-center text-white lg:static lg:w-auto lg:mt-0">
                        <div class="absolute z-10 w-full h-full bg-tt-darkblue lg:static lg:bg-none lg:w-auto"></div>
                        <div class="relative z-10">
                            @if (has_nav_menu('primary_navigation'))
                                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-primary']) !!}
                            @endif
                            <div class="pb-12 lg:hidden">
                                <div class="flex justify-center">
                                    @include('partials.social-links')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>
