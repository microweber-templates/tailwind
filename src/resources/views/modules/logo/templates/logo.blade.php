<a class="tracking-tight font-extrabold ml-10" href="/">

    @if(isset($settings['logoImage']) && !empty($settings['logoImage']))
        <img src="{{ $settings['logoImage'] }}" alt="{{ $settings['logoText'] }}" class="h-16" />
    @else
    <span style="color:{{$settings['logoTextColor']}};font-size:{{$settings['logoFontSize']}}px">
        {{$settings['logoText']}}
    </span>
    @endif
</a>
