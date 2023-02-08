@extends('index2')

@section('container')

<div class="Product">
    <div class="card" style="width: 20rem;">
        <img src="{{$data->photo_url}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-title">Name : {{$data->name}}</p>
          <p class="card-text2">Price : {{$data->price}}</p>
          <p class="card-text2">Description : {{$data->desc}}</p>
        </div>
        <form action="/cart/{{Auth::user()->id}}/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <br>
            <button type="submit" class="btn btn-warning" >Purchase</button>
        </form>
      </div>
</div>
@endsection

<style>
    .Product1{
        display: flex;
        justify-content: center;
    }
    .Product{
        font-family: sans-serif;
        font-style: italic;
    }
</style>
