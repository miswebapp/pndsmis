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
                    <div class="d-flex bd-highlight">
                            <div class="p-1 flex-grow-1 bd-highlight">
                                    <table class="table able-hover table-condensed table-striped table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                        <th scope="col">Projetu</th>
                                                        <th scope="col">Fatin</th>
                                                        <th scope="col">Data hahu</th>
                                                        <th scope="col">Data remata</th>
                                                        <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($projects as $project)
                                                    <tr>
                                                        <td>{{ $project->Subproject_Name}}</td>
                                                        <td>{{ $project->location($project->Subproject_Aldea)}}</td>
                                                        <td>{{ $project->start_date}}</td>
                                                        <td>{{ $project->finish_date}}</td>
                                                        <td>{{ $project->status($project->SubprojectStatusID)}}</td>
                                                    
                                                    </tr>
                                                @endforeach
                                               
                                            </tbody>
                    
                                        </table>
                                        <div class="mx-auto">
                                                {{ $projects->links() }}
                                        </div>
                            </div>
                            <div class="p-2 bd-highlight">
                                
                            </div>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
