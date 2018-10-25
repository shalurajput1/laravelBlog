@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
            <div class="panel panel-default">
                <div class="panel-heading">View Post</div>

                <div class="panel-body">
                    
                <div class= "col-md-4">
                

                   </div>
                    <div class= "col-md-8">
                                        
                   @if(count($posts) > 0 )
                     @foreach($posts->all() as $post)
                     <h2>{{$post->post_title}}</h2>
                     <img src="{{ $post->post_image }}" alt="">
                     <p>{{$post->post_body }} </p>

                     <ul class=" nav nav-pills">
                     <li role="presentation">
                    <a href='{{ url("/view/{$post->id}")}}'>
                    <span class="fa fa-eye">VIEW </span></a></li>

                 

                    <li role="presentation">
                    <a href='{{ url("/delete/{$post->id}")}}'>
                    <span class="fa fa-trash">DELETE </span></a></li>
                     </ul>


                     
                     @endforeach
                  @else
                  <p> No Posts Available </p>

                    @endif
                </div>
            </div></div>

                   
            </div>
        </div>
    </div>
</div>
@endsection
