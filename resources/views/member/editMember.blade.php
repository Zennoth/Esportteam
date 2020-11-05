@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Member</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('member.update', $member) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Member Name:</label>
                        <input type="text" class="form-control" name="nama_member" value="{{ $member->nama_member }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Member Number:</label>
                        <input class="form-control" name="no_member" value="{{ $member->nama_member }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Role:</label>
                        <input class="form-control" name="role" value="{{ $member->role }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Playing for:</label>
                        <select class="custom-select" name="playing_for" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($team as $team)
                            @if ($member->playing_for == $team->id) {
                                <option value="{{ $team->id }}" selected>{{$team->nama_team}}</option>
                            }
                            @else{
                                <option value="{{ $team->id }}">{{$team->nama_team}}</option>
                            }       
                            @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
