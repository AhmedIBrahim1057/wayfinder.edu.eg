@extends('layouts.app')

@section('content')
<div class="home">
    <div class="logo">
        <img class="float-right p-3" src="images/components/logo.png" alt="">
    </div>
    <div class="content">
        <div class="container-fluid home-body ml-4 py-5">

            <div class="all-places">
                <div class="row">
                    <div class="col-md-8">
                        @foreach ($groupedPlaces as $floor=>$value)
                        <div class="row my-3" style="width: fit-content;">
                            <p style="margin-bottom: -50px !important; z-index: 9; margin-left: 55px">{{ $floor }}</p>
                            <div class="col-md-12">
                                
                                    <div class="places-wrapper">
                                        @foreach ($value as $place)
                                        <div  class="text-center d-inline-block">
                                            <a href="/place/{{$place->id}}" class="text-center py-2 pl-2 pr-2 m-1">
                                                <div class="place text-left">
                                                    <p style="font-size: 18px; margin-top: -10px; margin-left: 35px"><sub>{{$place->number}}</sub></p>
                                                    <img src="{{ asset($place->image) }}" alt="" class="float-right" style="width: 65px; margin-right: 35px  ">
                                                </div>
                                            </a>
                                            <p style="color: #28385e; font-family: 'CustomFont'">{{$place->name}}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-left">
                        <img src="/images/components/bulding.png" alt="gg" style="width: 90%">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="manu-bar">
        <img src="images/components/bar-places.png" alt="" class="bar" >
        <div class="menu-icons">
            <a href="/persons">
                <div class="px-2 py-5 my-5"></div>
            </a>
            <a href="/floors">
                <div class="px-2 py-5 my-5"></div>
            </a>
            <a href="/">
                <div class="px-2 py-5 my-5 icon-translate"></div>
            </a>
            <a href="/search">
                <div class="px-2 py-5 my-5"></div>
            </a>
        </div>
    </div>
</div>
@endsection

