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
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="levels-wrapper" style="width: 100%">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="/place-details">
                                        <img src="/images/components/ground.png" alt="" style="width: 80%">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/place-details">
                                        <img src="/images/components/floor-1.png" alt="" style="width: 80%">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/place-details">
                                        <img src="/images/components/floor-2.png" alt="" style="width: 80%">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/place-details">
                                        <img src="/images/components/floor-3.png" alt="" style="width: 80%">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="manu-bar">
        <img src="images/components/bar.png" alt="" class="bar">
        <div class="menu-icons">
            <a href="/persons">
                <div class="icon persons px-2 py-4">
                    <img src="images/components/persons.png" alt="">
                </div>
            </a>
            <a href="/floors">
                <div class="icon floors px-2 py-4">
                    <img src="images/components/floors.png" alt="">
                </div>
            </a>
            <a href="/">
                <div class="icon places px-2 py-4 icon-translate">
                    <img src="images/components/places.png" alt="">
                </div>
            </a>
            <a href="/search">
                <div class="icon search px-2 py-4">
                    <img src="images/components/search.png" alt="">
                </div>
            </a>
        </div>
    </div>
</div>
@endsection