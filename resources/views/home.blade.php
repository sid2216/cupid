@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width:80rem;">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered" id="myTable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Address</th>
                          <th scope="col">Date of Birth</th>
                          <th scope="col">Gender</th>
                          <th scope="col">annual_income</th>
                          <th scope="col">Occupation</th>
                          <th scope="col">Family type</th>
                          <th scope="col">Manglik</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(isset($user))
                        @foreach($user as $users)
                        <tr>
                          <th scope="row">{{$users->id}}</th>
                          <td>{{$users->first_name}}</td>
                          <td>{{$users->last_name}}</td>
                          <td>{{$users->email}}</td>
                           <td>{{$users->address}}</td>
                          <td>{{$users->date_of_birth}}</td>
                          <td>{{$users->gender}}</td>
                          <td>{{$users->annual_income}}</td>
                          <td>{{$users->occupation}}</td>
                          <td>{{$users->family_type}}</td>
                          <td>{{$users->Manglik}}</td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
