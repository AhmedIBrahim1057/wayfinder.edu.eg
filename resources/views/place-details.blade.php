@extends('layouts.app')

@section('content')
<div class="home">
    <div class="logo">
        <img class="float-right p-3" src="{{asset('images/components/logo.png')}}" alt="">
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <h1 class="ml-5 pl-5 mt-5" style="font-family: ; color: #28385e"><strong>{{$place->level_name}}</strong></h1>
            </div>
            <div class="row pl-5">
                <div class="col-md-12 pl-md-5 ml-md-5 mt-5 d-flex align-items-center" >
                    <div class="d-inline-block" style="margin-right: -10px">
                        <img src="{{asset($place->logo)}}" alt="" style="height: 140px">
                    </div>
                    <div class="place-description p-3" style="width: 60%">
                        <h2>{{$place->name}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt, libero eget facilisis ultrices, augue magna semper leo, ac facilisis lectus odio id risus. Sed mattis elit arcu, sed tincidunt augue laoreet eu. Aenean vehicula auctor turpis, ut vehicula quam cursus ac. Sed molestie sem urna, quis consectetur mi pellentesque vel. Aliquam sit amet viverra dolor. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center ml-4 py-3">

            <div class="place-details">
                <div class="row">
                    {{-- <div class="col-md-1"></div> --}}
                    <div class="col-md-12 px-5 mt-5" style="margin-left: 75px">
                        @foreach ($place->images as $image)
                            <img src="{{ asset($image->images_url) }}" alt="" style="width: 96%">
                        @endforeach
                    </div>
                    {{-- <div class="col-md-1"></div> --}}

                </div>
            </div>

        </div>
    </div>
    
    <div class="manu-bar">
        <a href="/">
        <img src="{{asset('images/components/bar.png')}}" alt="" class="bar">
        <div class="menu-icons">
            <div class="icon px-2 py-4">
                <img src="{{asset('images/components/back.png')}}" alt="">
            </div>
        </div>
        </a>
    </div>
</div>
@endsection