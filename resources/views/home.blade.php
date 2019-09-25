@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5 pl-5">
            <div>
                <img src="/svg/MDWDLogo2.3.svg" style="height:100px;">
            </div>
        </div>
        <div class="col-9 p-5">
            <div>
               
                <h1>{{ $user->username }}</h1>
                
                <div class="d-flex">
                    <div class="pr-5"><strong>987k</strong> Likes</div>
                    <div class="pr-5"><strong>1.8M</strong> followers</div>
                    <div class="pr-5"><strong>187</strong> Following</div>
                </div>

                <div class="pt-4 font-weight-bold">mdrahony.online</div>
                <div>Web Development meets passionate craftsmanship</div>
                <div>
                    <a href="http://www.mdrahony.online">www.mdrahony.online</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4"><img src="http://mdrahony.online/images/ssp/ssp.PNG" alt="" class="w-100"></div>
        <div class="col-4"><img src="http://mdrahony.online/images/btimer/btimer.PNG" alt="" class="w-100"></div>
        <div class="col-4"><img src="http://mdrahony.online/images/hrd/hrd.PNG" alt="" class="w-100"></div>
    </div>



</div>
@endsection