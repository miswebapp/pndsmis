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
            <div class="col-md-12">         
                <div class="card mb-4">
                    <filters></filters>
                    {{--  --}}
                </div>
                </div>   
                <div class="card">
                    <div class="card-header"><h4>Resultadu</h4></div>
                    <div class="card-body">
                        <projects></projects>        
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
