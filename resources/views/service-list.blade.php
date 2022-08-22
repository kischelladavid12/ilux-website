@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <?php
            use App\Http\Controllers\TurboSMMController;
            $display = new TurboSMMController();
            foreach ($display->services() as $service) {
                echo '{ <br>';
                foreach ($service as $key => $value) {
                    print $key . ' => ' . $value . '<br>';
                }
                echo '}<br>';
            }
            ?>
        </div>
    </div>
@endsection
