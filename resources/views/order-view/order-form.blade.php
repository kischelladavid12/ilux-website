@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="pt-10 text-center">Order Process Form</h1>
        <form action="{{ url('/order/form-submit') }}" method="POST">
            @csrf
            <input type="hidden" id="custId" name="service" value="3100">
            <input type="hidden" id="custId" name="package_name" value="FB Page - 1000 Likes and Followers">
            <input type="hidden" id="custId" name="price" value="800">
            <div class="row pt-2">
                <h3 class="text-center"> FB Page - 1000 Likes and Followers </h2>
            </div>
            <div class="row pt-2">
                <label class="offset-md-4 col-md-2">Your Page Link</label>
                <input class="col-md-2" type="text" name="link">
            </div>
            <div class="row pt-2">
                <label class="offset-md-4 col-md-2">Quantity</label>
                <input class="col-md-2" type="number" min="50" step="1" name="quantity">
            </div>
            <div class="row pt-2">
                <input type="submit" name="submit" class="btn btn-primary text-center offset-md-4 col-md-4"
                    value="Click to Add Order">
            </div>
        </form>
    </div>
@endsection
