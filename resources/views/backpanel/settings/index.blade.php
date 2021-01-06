@extends('backpanel.layouts.master')
@section('content')
    @include('backpanel.layouts.success')
    <div class="row">
        <div class="col-md-12">
            <form
                action="{{route('setting.store')}}"
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <h3>Site Info</h3>
                @include("backpanel.components.site-info")

                <h3>Site Social Links</h3>
                @include("backpanel.components.site-social-link")

                <h3>Site Owner Info</h3>
                @include("backpanel.components.site-owner-info")

                <h3>Site Owner Social Links</h3>
                @include("backpanel.components.site-owner-social-links")

                <h3>Copyright Text</h3>
                @include("backpanel.partials.textarea-input",
                            [
                               "id"     => "copyright_text",
                               "title"  => "Copyright Text"
                            ])
                <button class="btn btn-primary btn-round btn-block">Save Settings</button>

            </form>
        </div>
    </div>
@endsection
