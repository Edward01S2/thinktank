<header class="banner bg-tt-sand">
  <div class="container mx-auto">
    <nav class="flex items-center justify-between flex-wrap pt-4 pb-4 lg:flex-no-wrap xl:px-4 2xl:px-0">
      <div id="nav-brand" class="flex items-center flex-shrink-0 pl-4 xl:pl-0 ">
        <a class="brand" href="{{ home_url('/') }}">
            <img class="h-10 md:h-12" src="{{$acf_options->logo->url}}" alt="">  
          </a>
      </div>
      <div class="block pr-2 md:pr-8 lg:hidden">
        <button id="nav-toggle" class="flex items-center px-3 py-2 focus:outline-none">
          <svg id="menu-btn" class="fill-current h-8 w-8" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
      </div>
      <div id="main-nav" class="w-full hidden lg:flex lg:items-center lg:w-auto lg:pr-4">
        <div class="text-sm relative w-full lg:w-auto">
          <div class="absolute w-full text-center text-white mt-4 lg:static lg:w-auto lg:mt-0">
            <div class="h-full w-full absolute bg-tt-darkblue z-0 lg:static lg:bg-none lg:w-auto"></div>
              <div class="z-10 relative">
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-primary']) !!}
              @endif
              </div>
          </div>
        </div>
      </div>
    </nav>
  </div>

</header>

