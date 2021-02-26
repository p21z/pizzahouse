
@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Pizzas List
        </div>
            
        <!-- @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->
        <p class="mssg">{{ session('mssg') }}</p>
        @foreach($pizzas as $pizza)
            <div>
                {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
            </div>
        @endforeach
        
    </div>
</div>
@endsection
