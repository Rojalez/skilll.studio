<footer class="">
    <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 xl:gap-y-0 gap-y-6 2xl:text-left xl:text-left lg:text-left sm:text-center text-center xs:text-center md:text-left mx-auto py-4 px-4 sm:px-10 lg:px-12 ">
        <div class="flex flex-col space-y-8">
            <div class="text-2xl font-bold tracking-normal">{{__('Свяжитесь с нами')}}</div>
            <div class="text-2xl font-semibold tracking-normal text-gray-400"><a href="mailto:skilll-studio@gmail.com">skilll-studio@gmail.com</a></div>
            <div class="text-2xl font-semibold tracking-normal text-gray-400"><a href="tel:+996 777 665 665">+996 777 665 665</a></div>
        </div>
        <div class="flex flex-col space-y-8">
            <div class="text-2xl font-bold tracking-normal">{{__('Наш адрес')}}</div>
            <div class="text-2xl font-semibold tracking-normal text-gray-400">{{__('Шевченко 114')}}</div>
            <div></div>
        </div>
        <div></div>
        <div class="flex flex-col xl:items-end justify-between">
            <a class="text-2xl hover:scale-105 transition duration-200 hover:text-custom-blue @if(Route::current()->getName() == 'cookie.index') text-custom-blue @endif font-bold tracking-normal" href="{{route('cookie.index')}}">{{__('Политика Cookie')}}</a>
        </div>
    </div>
    <div class="flex flex-col font-semibold text-center space-y-10 tracking-normal text-gray-400 py-4 px-4 sm:px-10 lg:px-12">
        <img class="h-16 w-auto" src="https://uploads-ssl.webflow.com/603cf20cb11d6e40846c46e2/603cf20cb11d6e65c56c4765_crb.svg" alt="">
        <span>{{__('Все права защищены')}} ©2022 Skilll.studio</span>
    </div>
</footer>
