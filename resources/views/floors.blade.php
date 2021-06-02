@extends('layouts.app')

@section('content')
<div class="home">
    <div class="logo">
        <img class="float-right p-3" src="images/components/logo.png" alt="">
    </div>
    <div class="content">
        <div class="container-fluid home-body ml-4 py-5">

            <div class="levels" style=" width: 100%">
                <div class="row">
                    <div class="col-md-12">
                        <div class="levels-wrapper" style="width: 100%">
                            <div class="row">
                                <div class="col-1"></div>
                                @foreach ($levels as $floor)
                                    <div class="col-md-2">
                                        <a href="/floor/{{$floor->id}}">
                                            <img src="{{asset($floor->image)}}" alt="" style="width: 80%">
                                        </a>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="manu-bar">
        <img src="images/components/bar-floor.png" alt="" class="bar">
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