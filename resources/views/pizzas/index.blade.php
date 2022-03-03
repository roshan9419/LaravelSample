<x-app></x-app>

<h4>My Pizzas Available</h4>

@foreach ($pizzas as $pizza)
    <div>
        <strong>Name: </strong>{{ $pizza->name }}
        <strong>Type: </strong>{{ $pizza->type }}
        <strong>Base: </strong>{{ $pizza->base }}
        <strong><a href="/pizzas/{{ $pizza->id }}">Details</a></strong>
    </div>
@endforeach
<a href="/pizzas/create">Create new pizza</a>

<div class="flex justify-center mt-4 sm:items-center sm:justify-between">
    <div class="text-center text-sm text-gray-500 sm:text-left">
        <p>
            {{ session("mssg") }}
        </p>
    </div>
</div>