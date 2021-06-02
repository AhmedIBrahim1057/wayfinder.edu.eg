@extends('layouts.app')

@section('content')
<div class="home">
    <div class="logo">
        <img class="float-right p-3" src="images/components/logo.png" alt="">
    </div>
    <div class="content">
        <div class="container-fluid home-body ml-4 pb-5">
            <div class="search-content" style="width: 100%;">
                <div class="row">
                    <div class="col-lg-3 col-md-12"></div>
                    <div class="col-lg-6 col-md-12 px-5 text-center">
                        <input type="text" id="search" placeholder="search" class="form-control input-search">
                        <img src="{{ asset('images/components/search2.png') }}" alt="" class="search-logo">
                    </div>
                    <div class="col-lg-3 col-md-12"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="manu-bar">
        <img src="images/components/bar-search.png" alt="" class="bar">
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

@section('scripts')
<script src="{{asset('js/jquery-ui-1.12.1.custom/external/jquery/jquery.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#search" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url:"{{route('getAutocompleteData')}}",
            type: 'post',
            dataType: "json",
            data: {
               _token: CSRF_TOKEN,
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           $('#search').val(ui.item.label);
           window.location.replace('/place/'+ui.item.value);
           $('#employeeid').val(ui.item.value); 
           return false;
        }
      });

    });
    
</script>
@endsection