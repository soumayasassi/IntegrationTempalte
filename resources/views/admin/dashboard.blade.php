
@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">

            </div>
        </div>
        child content
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        // Scripts spécifiques au dashboard
       alert("Dashboard script loaded");
    </script>
@endsection
