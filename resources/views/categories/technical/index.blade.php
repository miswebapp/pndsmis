@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Teknikal</h4>
    <div class="row justify-content-center">
        <div id="app">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-12 fixed">         
                <filters-component></filters-component>
            </div>
    </div>
</div>

@endsection
