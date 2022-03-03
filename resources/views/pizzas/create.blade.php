<x-app></x-app>

<div class="wrapper">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="type">Choose Pizza type: </label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <br>
        <label for="base">Choose Base type: </label>
        <select name="base" id="base">
            <option value="chessy crusht">Cheesy Crust</option>
            <option value="garlic crust">Hawaiian</option>
            <option value="thin & crispy">Veg Supreme</option>
            <option value="thick">Thick</option>
        </select>
        <br>
        <label for="name">Price: </label>
        <input type="number" id="price" name="price">
        <br>

        <fieldset>
            <label>Extra Toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br>
        </fieldset>

        <input type="submit" value="Order Pizza">
    </form>
</div>