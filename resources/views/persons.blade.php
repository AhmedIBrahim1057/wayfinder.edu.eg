@extends('layouts.app')

@section('content')
<div class="home">
    <div class="logo">
        <img class="float-right p-3" src="images/components/logo.png" alt="">
    </div>
    <div class="content">
        <div class="container-fluid home-body ml-4 py-5">

            <div class="all-persons">
                <div class="col-md-12 pr-5">
                    @foreach ($groupedPersons as $floor=>$persons)
                        <div class="row my-3" style="margin-right: 100px; width: fit-content;">
                            <div class="col-md-12">
                                <p class="ml-5" style="margin-bottom: -30px !important; margin-top: 30px; margin-left: 55px">{{$floor}}</p>
                                <div class="person-wrapper pl-5">
                                    @foreach ($persons as $person)
                                        <div  class="text-center d-inline-block mx-3" style="height: 200px; width:130px">
                                            <a href="/place/{{$person->place_id}}" class="text-center py-2 pl-4 pr-4 m-2">
                                                <div class="person text-center mx-2">
                                                    <div style="height: 148px; width: 129px; overflow: hidden;">
                                                        <img src="{{asset($person->photo)}}" alt="" style="width: 100%;">
                                                    </div>
                                                    <h4 class="mt-3" style="word-spacing: 130px; line-height: 20px; color: #28385e">{{$person->name}}</h4>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach                                                                              
                                </div>                                        
                            </div>
                        </div>
                    @endforeach  
                </div>
            </div>

        </div>
    </div>
    
    <div class="manu-bar">
        <img src="images/components/bar-persons.png" alt="" class="bar">
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