<div class="form-group">
    <label for="{{$id}}">{{$title}}</label>
    <input
        type="{{$type ?? 'text'}}"
        id="{{$id}}"
        name="{{$name ?? $id}}"
        class="form-control"
        value="{{getSiteOption($option ?? $id)}}"
    >
</div>
