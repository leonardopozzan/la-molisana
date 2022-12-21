@extends('layout.app')
@section('content')
    <section class="container">
        <form action="{{ route('products.update', $product->id) }}" method="POST" class="my-form">
        @csrf
        @method('PUT')
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required class="form-control" value="{{old('title', $product->title)}}">

            <label for="description">Descrizione</label>
            <textarea name="description" id="description"  rows="3" class="form-control">{{old('description', $product->description)}}"</textarea>

            <label for="type">Type</label>
            <select name="type" id="type" required>
                <option value="lunga" {{old('type',$product->type == 'lunga' ? 'selected' : '')}}>Luga</option>
                <option value="corta" {{old('type',$product->type == 'corta' ? 'selected' : '')}}>Corta</option>
                <option value="cortissima {{old('type',$product->type == 'cortissima' ? 'selected' : '')}}">Cortissima</option>
            </select>

            <label for="image">Image</label>
            <input type="text" name="src" id="src" required class="form-control" value="{{old('src', $product->src)}}"> 

            <label for="cooking_time">Cooking Time</label>
            <input type="text" class="form-control" name="cooking_time" id="cooking_time" required aria-describedby="cookingHelp" value="{{old('cooking_time', $product->cooking_time)}}">
            <div class="form-text" id="cookingHelp" >Tempo espresso in minuti</div>

            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" required class="form-control" value="{{old('weight', $product->weight)}}">

            <input type="submit" value="Invia">
        </form>

    </section>
@endsection