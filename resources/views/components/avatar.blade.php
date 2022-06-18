<a class="flex flex-col hover:-translate-y-0.5 duration-150" {{$attributes}}>
    <div class="avatar w-32 ">
        <div>
            @isset($image)
            <img class="rounded-t-lg" src="{{$image}}" />
            @endisset
        </div>
    </div>
    @isset($name)
    <div class="text-center w-32 text-sm py-2 px-1 bg-white rounded-b-lg">
        {{$name}}
    </div>
    @endisset
</a>

