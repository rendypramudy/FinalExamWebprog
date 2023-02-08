@extends('index2')

@section('container')

<div class="title">
    <h2>
       List Of Product :
    </h2>
</div>
<br>
<div class="container">
    <div class="row row-cols -5">
    @foreach ($product as $p)
    <div class="card" style="width: 15rem">
        <img src="{{$p->photo_url}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$p->name}}</h5>
          <a href="/detail/{{$p->id}}" type="button" class="btn btn-warning">Detail</a>
        </div>
    </div>
      @endforeach
</div>
{{-- <div class="product">
    <div class="card" style="width: 15rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sayuran 2</h5>
          <a href="/" type="button" class="btn btn-warning">Detail</a>
        </div>
      </div>
</div>
<div class="product">
    <div class="card" style="width: 15rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sayuran 3</h5>
          <a href="/" type="button" class="btn btn-warning">Detail</a>
        </div>
      </div>
</div>
<div class="product">
    <div class="card" style="width: 15rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sayuran 4</h5>
          <a href="/" type="button" class="btn btn-warning">Detail</a>
        </div>
      </div>
</div>
<div class="product">
    <div class="card" style="width: 15rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUzC6KbbBd58U9FJfztZwIFqWL1HFTe9Iogw&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sayuran 5</h5>
          <a href="/" type="button" class="btn btn-warning">Detail</a>
        </div>
      </div>
</div> --}}
{{-- @endforeach --}}



<style>
    .row{
        display: flex;
    }
        .title{
            background-color:grey;
        }
        .title h2{
            color: white;
        }
        .content{
            display: flex;
            justify-content: center;
            gap: 7px;
        }
</style>

@endsection
