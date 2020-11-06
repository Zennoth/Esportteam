@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Team List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
            <a href="{{ route('team.create') }}" class="btn btn-primary btn-block" role="button">Add Team</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Team Name</th>
                    <th scope="col">Team Number</th>
                    <th scope="col">Game</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($teams as $team)
                    <tr>
                    <td><a href="{{ route('team.edit', $team) }}">{{ $team->nama_team }}</a></td>
                        <td>{{ $team->no_team }}</td>
                        <td>{{ $team->game }}</td>
                        <td>{{ $team->updated_at}}</td>
                        <td>{{ $team->created_at}}</td>
                        <td>
                            <form action="{{ route('team.destroy', $team) }}" method="post" onsubmit="return confirm('This will delete all your data, continue ?')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
