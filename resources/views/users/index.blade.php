@extends('layouts.app')
@section('content')
<div class="row mt-2" id="example2" style="display:none">
  <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0 text-primary">USER RECORDS</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('users.create') }}" role="button" class="btn btn-link" data-toggle="tooltip" data-placement="left" title="Add User" >  
                <i class="fa fa-user-plus fa-2x text-primary"></i> ADD USER
            </a>
          </div>
        </div>
      </div>

        <div class="card shadow border-0">
          <div class="card-body">  
            <table id="example" class="table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Birthdate</th>
                  <th>Gender</th>
                  <th>Mobile Number</th>
                  <th>Email Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $count++ .'.' }}</td>
                  <td>{{ $user->last_name . ", " . $user->first_name . " " . $user->middle_name . " " }} @if($user->suffix_name == 'NOTAP') @else {{ $user->suffix_name }} @endif</td>
                  <td>{{ $user->userRole['role_name'] }}</td>
                  <td>{{ $user->birthdate }}</td>
                  <td>{{ $user->gender }}</td>
                  <td>{{ $user->mobile_number }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                      <a  href="{{ route('users.edit',$user->id) }}" class="btn btn-link text-warning" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil fa-2x"></i></a>
                      <a  href="{{ route('users.show',$user->id) }}" class="btn btn-link text-info" data-toggle="tooltip" data-placement="left" title="Show"><i class="fa fa-clipboard fa-2x"></i></a>
                      <a data-toggle="modal" data-target="#activeInactive{{ $user->id }}"  data-toggle="tooltip" data-placement="left"
                      class="btn btn-link text-{{ $user->is_active == 'Y' ? 'primary' : 'danger' }}" 
                      title="{{ $user->is_active == 'Y' ? 'Deactivate' : 'Activate' }}">
                      <i class="fa {{ $user->is_active == 'Y' ? 'fa-eye fa-2x' : 'fa-eye-slash fa-2x' }}"></i>
                    </a>
                  </td>
                </tr>

              @endforeach 
              </tbody>
            </table>
          </div>  
        </div>
  </div>
</div>  

@endsection