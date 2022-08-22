@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-primary" href="/service-list">Service List</a>
            </div>
            <div class="col-md-2">
                <a class="btn btn-primary" href="/order"> Add Order</a>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4 d-flex">
                <img src="https://cdn.pixabay.com/photo/2022/05/08/10/13/animal-7181776_960_720.jpg" alt=""
                    class="w-100">
            </div>
            <div class="col-4">
                <img src="https://cdn.pixabay.com/photo/2022/07/25/18/47/waterfall-7344396_960_720.jpg" alt=""
                    class="w-100">
            </div>
            <div class="col-4">
                <img src="https://cdn.pixabay.com/photo/2022/07/29/01/07/trees-7350845_960_720.jpg" alt=""
                    class="w-100">
            </div>
        </div>

    </div>
@endsection
