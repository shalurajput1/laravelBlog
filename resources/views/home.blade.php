@extends('layouts.app')
<style>
    .avataar{
        border-radius: 100%;
        max-width: 150px;
    
    }

</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if(count($errors) > 0)
                     @foreach($errors->all() as $error)
                     <div class= "alert alert-danger"> {{$error}}</div>
                     @endforeach
                     @endif
                     @if(session('response'))
                     <div class="alertr alert-success">{{session('response')}} </div>
                      @endif
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        
                   
                    <div class= "col-md-4">
                    <img src="{{ url('images/avataar.png') }}" class="avataar" alt="">  
                
                    </div>
                    <hr/>
                    <div class= "col-md-8">

@if(count($posts) > 0 )
                     @foreach($posts->all() as $post)
                     <h2>{{$post->post_title}}</h2>
                     <img src="{{ $post->post_image }}" alt="">
                     <p>{{ $post->post_body }} </p>

                     

                     <cite style="float:right;">Posted on:{{date('M j, Y H:i', strtotime($post->updated_at))}}</cite>
                     <hr/>
                     @endforeach
                  @else
                  <p> No Posts Available </p>

                    @endif
                    
 </div>
            </div>
        </div>
    </div>
</div>
@endsection
