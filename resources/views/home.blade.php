@extends('layouts.app')

@section('page-title', 'Home page')

@section('jumbotron')
<div class="jumbo-img">

    <div class="current-btn">
        <a href="#" class="btn text-white border border-2 border-primary">CURRENT SERIES</a>
    </div>

</div>

@endsection
@section('content')

<div class="row">
    @foreach ($animations as $animation)
        <div class="box">
            <div class="product-card ">
                <img src="{{$animation['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$animation['series']}}</h5>

                </div>
              </div>
        </div>
    @endforeach
</div>

<div class="signup">
        <a href="#" class="btn text-white border border-2 border-primary">LOAD MORE</a>
    </div>

@endsection
