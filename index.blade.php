@extends("layouts.app")

@section("content")
<h1>posts</h1>

    @if (count($posts)>0) 
        @foreach ($posts as $post)
            <div class ="well">
                <h3><a href="/posts/{{$post->id}}"> {{$post->koteret}} </a></h3>
                  <small>   
                      written on {{$post->created_at}}
                      by{{$post->user->name}}
                  </small>
            </div>
            
        @endforeach
           {{$posts->links()}}
    @else
         <p>no records found </p>

    @endif

        
@endsection



	 