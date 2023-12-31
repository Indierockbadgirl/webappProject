@extends('layouts.masterAdmin')


@section('title')
HealthCare Project
@endsection


@section('navbar')
User Profile |  History
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">History</h4>
          @if (session('status-forcedelete'))
              <div class="alert alert-danger" role="alert">
                {{session('status-forcedelete')}}
              </div>
            @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach ($trashUsers as $user)
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                      <a href="/admin/restore/{{ $user->id }}" class="btn btn-info" onclick="return confirm('Are you sure you want to restore this user?')">RESTORE</a>
                      <a href="/admin/forcedelete/{{ $user->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to forcedelete this user?')">FORCEDELETE</a>

                    </td>
                    
                  </tr>  
                @endforeach
              </tbody>
            </table>
          </div>
          <a href="/admin" class="btn btn-restore">User Table</a>
          
        </div>
      </div>
    </div>
   
</div>
@endsection


@section('scripts')

@endsection
