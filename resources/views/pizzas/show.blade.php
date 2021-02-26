
@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{$pizzas->name}}</h1>
    <p class="type">Type - {{$pizzas->type}}</p>
    <p class="base">Base- {{$pizzas->base}}</p>
    <p class="toppings">
        <ul>
            @foreach($pizzas->toppings as $topping)
                <li>{{ $topping }}</li>                
            @endforeach
        </ul>
    </p>
    <form action="/pizzas/{{ $pizzas->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
    </form>
</div>
<a href="/pizzas" class="back">Back to all pizzas</a>
@endsection
