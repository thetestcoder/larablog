<div class="form-group">
    <label for="{{$id}}">{{$title}}</label>
    <textarea
        name="{{$id}}"
        id="{{$id}}"
        class="form-control">
        {{getSiteOption($id)}}
    </textarea>
</div>
