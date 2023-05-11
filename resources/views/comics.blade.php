
{{-- aggiungo il layout di default --}}
@extends('layouts.app')



@section('page-title', 'Comics page')

@section('jumbotron')
<div class="jumbo-img">

    <div class="current-btn">
        <a href="#" class="btn text-white border border-2 border-primary">CURRENT SERIES</a>
    </div>

</div>
@endsection
@section('content')

<div class="row">
    @foreach ($data as $dat)
        <div class="box">
            <div class="product-card">
                <img src="{{$dat['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$dat['title']}}</h5>

                </div>
              </div>
        </div>
    @endforeach
</div>

<div class="signup">
        <a href="#" class="btn text-white border border-2 border-primary">LOAD MORE</a>
    </div>


@endsection
