@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Teknikal</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- @include('categories.technical.filter') --}}
            
            <div class="card mb-4">
                <form method="POST" action="{{ route('searches') }}">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                        <input type="hidden" value="techincal" name="check">
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Atividade</label>
                                <select name="activity" class="form-control form-control-sm">
                                    <option value="project">Projetu</option>
                                    <option value="project_progress">Progressu Fiziku</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label>Siklu</label>
                                <select name="cycle" class="form-control form-control-sm">
                                    <option value="">Hotu-Hotu</option>
                                    @foreach($cycles as $cycle)
                                        <option value="{{ $cycle->Cycle_ID }}">{{$cycle->Cycle_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group form-control-sm">
                                <label>Faze</label>
                                <select name="phase"  class="form-control form-control-sm">
                                    <option value="0">Hotu-Hotu</option>
                                    <option value="1">Phase 1</option>
                                    <option value="2">Phase 2</option>
                                    <option value="3">Phase 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm ">
                            <div class="form-group ">
                                <label>Munisipiu</label>
                                <select name="municipal" class="form-control form-control-sm">
                                    <option value="0">Hotu-Hotu</option>
                                    @foreach($municipals as $municipal)
                                        <option value="{{ $municipal->Distict_ID }}">{{$municipal->District_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Search</button>
                    </form>
                    </div>
            </div>

            
            <div class="card">
                <div class="card-header"><h4>Resultadu</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="app">
                       <projects></projects>
                    </div>        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
