<div class="accordion lg:flex">
    <div
        class="flex flex-col px-4 py-2 rounded accordion-container bg-tt-sand shadow-tt md:py-2 lg:w-full lg:self-start">
        <div class="flex items-center justify-between accordion-header accordion-btn hover:cursor-pointer">
            <div class="flex items-center">
                <h3 class="font-black tracking-wide text-tt-gold lg:text-base">
                    {{ $title }}</h3>
            </div>
            <button class="outline-none hover:text-tt-gold">
                <svg class="w-8 h-8 open" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-plus-square">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
                <svg class="hidden w-8 h-8 close" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-minus-square">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
            </button>
        </div>
        <div class="hidden py-3 text-left accordion-content text-tt-darkblue">
            {{ $content }}
        </div>
    </div>
</div>
