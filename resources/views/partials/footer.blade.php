<footer class="content-info bg-tt-gray">
  <div class="container mx-auto">
    <div class="flex flex-col text-tt-sand items-center py-8 px-4 lg:px-8 lg:py-4 lg:flex-row lg:flex-wrap lg:justify-between xl:px-8">
      <div class="text-center pb-4 lg:text-left lg:pb-0 xl:flex">
        <p class="pb-2 lg:pb-0 xl:mb-0">
          <span class="font-bold tracking-wide">
          @php bloginfo('name') @endphp
          </span>
          <span class="text-tt-turq">|</span>
          {{$options_page->acf_options['address']}}
        </p>
        <div class="pb-4 xl:pl-8 lg:pb-0">
          <a class="underline italic" href="tel:{{$options_page->acf_options['phone']}}">{{$options_page->acf_options['phone']}}</a>
        </div>
      </div>
      <div class="pb-8 lg:pb-4 xl:pb-0">
        @include('partials.social')
      </div>
      <div class="lg:flex-grow lg:text-center xl:flex-grow-0">
        <p class="xl:mb-0">
          &copy;@php echo date("Y") @endphp @php bloginfo('name') @endphp
        </p>
      </div>
    </div>
  </div>
</footer>
