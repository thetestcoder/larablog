<div class="row">
    <div class="col-md-6">
        <div class="input-group">
            <div class="custom-file">
                <input
                    type="file"
                    class="custom-file-input"
                    id="{{$id}}"
                    name="{{$id}}"
                >
                <label for="{{$id}}" class="custom-file-label">{{$title}}</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        @if($logo !== null)
            <img src="{{$logo}}" alt="{{$title}}" width="150px" class="img-fluid">
        @endif
    </div>
</div>
