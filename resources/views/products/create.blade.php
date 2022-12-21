@extends('layout.app')
@section('content')
    <section class="container">
        <form action="{{ route('products.store') }}" method="POST" class="my-form">
        @csrf

            <label for="title">Title</label>
            <input type="text" name="title" id="title" required class="form-control">

            <label for="description">Descrizione</label>
            <textarea name="description" id="description"  rows="3" class="form-control"></textarea>

            <label for="type">Type</label>
            <select name="type" id="type" required>
                <option value="lunga">Luga</option>
                <option value="corta">Corta</option>
                <option value="cortissima">Cortissima</option>
            </select>

            <label for="image">Image</label>
            <input type="text" name="image" id="image" required class="form-control"> 

            <label for="cooking_time">Cooking Time</label>
            <input type="text" class="form-control" name="cooking_time" id="cooking_time" required aria-describedby="cookingHelp">
            <div class="form-text" id="cookingHelp" >Tempo espresso in minuti</div>

            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" required class="form-control">

            <input type="submit" value="Invia">
        </form>

    </section>
@endsection