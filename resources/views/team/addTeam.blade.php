@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Input Member Data</h1>
        </div>
        <div class="row">
            <div class="col">
            <form action="{{ route('team.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Team Name:</label>
                        <input type="text" class="form-control" name="nama_team">
                    </div>
                    <div class="form-group">
                        <label>Team Number:</label>
                        <input type="text" class="form-control" name="no_team" >
                    </div>
                    <div class="form-group">
                        <label>Esport Category:</label>
                        <input type="text" class="form-control" name="game" >
                    </div>                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
