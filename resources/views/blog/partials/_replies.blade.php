<div class="blog1-post-info-box less-width pull-right" style="margin: 5px 0">
    <div class="text-box border padding-1">
        <div class="text-box-right" style="padding: 0 0 0 50px">
            <h5 class="uppercase dosis less-mar2">{{$reply->name}}</h5>
            <div class="blog1-post-info"><span>{{$reply->created_at->diffForHumans()}}</span></div>
            <p class="paddtop1">{{$reply->comment}}</p>
        </div>
    </div>
</div>
<!--end item-->
<div class="clearfix"></div>
