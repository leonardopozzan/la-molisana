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
                <div class="description">{{$product->description}}</div>
            </div>
        @endforeach
    </div>
</section>
@endsection