<a class="tracking-tight font-extrabold text-3xl ml-10" href="/">

    @if(isset($settings['logoImage']))
        <img src="{{ $settings['logoImage'] }}" alt="{{ $settings['logoText'] }}" class="h-16" />
    @else
    <span style="color:#2081e2">
        {{$settings['logoText']}}
    </span>
    @endif
</a>
