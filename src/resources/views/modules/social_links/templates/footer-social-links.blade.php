<div class="mt-8 flex justify-center space-x-6">

    @foreach($links as $link)
    <a href="{{$link['url']}}" class="text-gray-400 hover:text-gray-500">
        <span class="sr-only">{{$link['title']}}</span>
       <i class="{{$link['icon']}} text-3xl"></i>
    </a>
    @endforeach

</div>
