@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Teknikal</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('categories.technical.filter')
            <div class="card">
                <div class="card-header">Resultadu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
