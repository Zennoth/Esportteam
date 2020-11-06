@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Member List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
            <a href="{{ route('member.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true">Add Member</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Member Name</th>
                    <th scope="col">Member Number</th>
                    <th scope="col">Role</th>
                    <th scope="col">Playing For</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($members as $member)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                    <td><a href="{{ route('member.edit', $member) }}">{{ $member->nama_member }}</a></td>
                        <td>{{ $member->no_member }}</td>
                        <td>{{ $member->role }}</td>
                        @foreach ($teams as $team)
                            @if ($member->playing_for == $team->id)
                                <td>{{ $team->nama_team }}</td>
                            @endif
                        @endforeach
                        <td>{{ $member->updated_at}}</td>
                        <td>{{ $member->created_at}}</td>
                        <td>
                            <form action="{{ route('member.destroy', $member) }}" method="post" onsubmit="return confirm('Are you sure? This action cannot be undone!')">
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
