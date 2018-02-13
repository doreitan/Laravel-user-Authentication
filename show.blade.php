@extends("layouts.app")

@section("content")

<a href= "/posts" class="btn btn-default"> go back</a>



<h1>{{$post->koteret}}</h1>


<div>
    {!!$post->body!!}
</div>

<small> 
    was created on:{{$post->created_at}}
    by{{$post->user->name}}
</small>
<hr>
<a href='/posts'{{$post->id}}/edit'class='btn btn-default'>
    Record Edit 
</a>

{{!!Form::open(
    ['action'=>
                [
                    'controller2@destroy',
                    $post->id
                ],

                'method'=>'POST',
                'class'=>'pull-right'
    ]


)!!}}

{{Form::hidden('_method','DELETE')}}

{{Form::submit('delete',
                [
                    'class'=>'btn btn-danger'
                ]
)}}

{!!Form::close()!!}
@endsection



	 