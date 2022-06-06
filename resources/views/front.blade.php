@extends('layouts.master')

@section('content')
<div class="container text-center">
    <form action="{{ route('store') }}" method="post">
        {!! csrf_field() !!}
         <h2>
            LTT Coverage
        </h2>
        <div id="map">
        </div>
        <div class="row">
            <div class="col-5">
                <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
            </div>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
@endsection