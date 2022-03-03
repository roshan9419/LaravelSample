<x-app></x-app>

<div class="wrapper">
    <h1>Order for {{ $pizza->name }}</h1>
    <strong>Type: </strong> {{ $pizza->type }}
    <strong>Base: </strong> {{ $pizza->base }}
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
</div>

<form action="{{ route('pizzas.delete', $pizza->id) }}" method="POST">
    @csrf
    @method("DELETE")
    <input type="submit" value="Complete Order">
</form>

<a href="/pizzas">< Back to Pizza</a>