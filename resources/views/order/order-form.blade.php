@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="pt-10">Sample Order Form</h1>
        <form action="{{ url('/order/form-submit') }}" method="POST">
            @csrf
            <div class="row pt-2">
                <label class="col-md-2">Service Name</label>
                <input class="col-md-2" type="text" name="service" id="unclickable" value="3100" readonly>
            </div>
            <div class="row pt-2">
                <label class="col-md-2">Your Page Link</label>
                <input class="col-md-2" type="text" name="link">
            </div>
            <div class="row pt-2">
                <label class="col-md-2">Quantity</label>
                <input class="col-md-2" type="number" min="50" step="1" name="quantity">
            </div>
            <div class="col-md-2 row pt-2">
                <input type="submit" name="submit" class="btn btn-primary" value="Click to Add Order">
            </div>
        </form>
    </div>
@endsection
