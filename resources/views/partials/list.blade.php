<ul>
    @foreach ($channels as $item)
        <li>{{ $item->name }}</li>    
    @endforeach
</ul>