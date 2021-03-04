<select name="{{ $req_name ?? "channel_id" }}" id="channel_id">
    @foreach ($channels as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>