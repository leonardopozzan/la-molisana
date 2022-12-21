@extends('layout.app')
@section('content')
<section class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-3 my-card">
                <div>
                    <img src="{{$product->src}}" alt="">
                </div>

                <div><a href="{{route('products.show', $product->id)}}">{{$product->title}}</a></div>
                <div>{{$product->type}}</div>
                <div>{{$product->cooking_time}}</div>
                <div>{{$product->weight}}</div>
                <div><a href="{{route('products.edit',$product->id)}}">Modifica la tua pasta</a></div>
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Cancella</button>
                </form>
                {{-- <div><a href="{{route('products.destroy',$product->id)}}">Eliminala tua pasta</a></div> --}}
                <div class="description">{{$product->description}}</div>
            </div>
        @endforeach
    </div>
</section>
@endsection