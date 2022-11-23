<nav>
    <div class="mx-auto py-4 px-4 sm:px-10 lg:px-12">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button id="hamburger" onclick="toggleNav()" type="button" class="hamburger hamburger--minus inline-flex items-center justify-center p-2 rounded-md focus:outline-none focus:ring-0" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <a href="{{route('home.index')}}" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden drop-shadow-2xl h-14 w-auto" src="{{asset('img/megaphone.png')}}" alt="Skilll.studio">
                    <img class="hidden lg:block drop-shadow-2xl h-12 w-auto" src="{{asset('img/megaphone.png')}}" alt="Skilll.studio">
                </a>
                <div class="hidden sm:block sm:ml-16">
                    <div class="flex space-x-8">
                        <a href="{{route('services.index')}}" class="px-3 py-2 rounded-md text-lg font-medium text-grey-900 hover:scale-105 hover:text-custom-blue  @if(Route::current()->getName() == 'services.index') text-indigo-900-contrast font-semibold hover:scale-100 @endif transition ease-in-out">{{__('Услуги')}}</a>
                        <a href="{{route('portfolio.index')}}" class="px-3 py-2 rounded-md text-lg font-medium text-grey-900 hover:scale-105 hover:text-custom-blue @if(Route::current()->getName() == 'portfolio.index') text-indigo-900-contrast font-semibold hover:scale-100 @endif transition ease-in-out">{{__('Портфолио')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myNav" class="rounded-2xl md:hidden hidden absolute w-full bg-grey-50 z-50">
        <div class="px-2 pt-2 pb-3 space-y-4 text-center">
            <a href="{{route('services.index')}}" class="block px-3 py-2 rounded-md text-2xl font-bold hover:scale-105 hover:text-custom-blue transition ease-in-out @if(Route::current()->getName() == 'services.index') text-indigo-900-contrast font-semibold hover:scale-100 @endif">{{__('Услуги')}}</a>
            <hr>
            <a href="{{route('portfolio.index')}}" class="block px-3 py-2 rounded-md text-2xl font-bold hover:scale-105 hover:text-custom-blue transition ease-in-out @if(Route::current()->getName() == 'portfolio.index') text-indigo-900-contrast font-semibold hover:scale-100 @endif">{{__('Портфолио')}}</a>
        </div>
    </div>
</nav>

<script>
    function toggleNav() {
        const myNav = document.getElementById("myNav");
        const hamburger = document.getElementById("hamburger")
        myNav.classList.toggle("hidden");
        hamburger.classList.toggle("is-active")
    }
</script>
