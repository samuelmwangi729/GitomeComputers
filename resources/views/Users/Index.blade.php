@extends('layouts.app')
@section('content')
<div class="row">
  @if(Session::has('success'))
  <div class="alert alert-success">
    <strong>Success</strong>{{ Session::get('success') }}
  </div>
  @endif
  @if(Session::has('danger'))
  <div class="alert alert-success">
    <strong>Success</strong>{{ Session::get('danger') }}
  </div>
  @endif
    <h3 class="text-center">Manage Users</h3>
    <div class="container table-responsive">
        <table class="table table-striped jambo_table bulk_action table-condensed table-bordered">
          <thead>
            <tr class="headings">
              <th class="column-title">Names</th>
              <th class="column-title">Email </th>
              <th class="column-title">Role </th>
              <th class="column-title">Joined At </th>
              <th class="column-title">Actions </th>
              <th class="bulk-actions" colspan="7">
                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
              </th>
            </tr>
          </thead>

          <tbody>
            @foreach ($users as $user)
            <tr class="even pointer">
                <td class=" ">{{ $user->name }}</td>
                <td class=" ">{{ $user->email }} </td>
                <td class=" ">{{ $user->role }}</td>
                <td class=" ">{{ ($user->created_at)->toFormattedDateString() }}</td>
                <td>
                  @if($user->role=='Administrator')
                  <div class="badge" style="background-color:gold;color:purple">Administrator</div>
                  @else
                  <a href="{{ route('users.edit',[$user->id]) }}" class="fa fa-pencil text-primary" style="font-size:18px"></a>&nbsp;&nbsp;
                  <a href="{{ route('users.destroy',[$user->id]) }}" class="fa fa-trash text-danger" style="padding-left:20px;font-size:18px"></a>
                  @endif
                </td>
              </tr>                    
            @endforeach     
            <tr>
           <td colspan="6" class="text-right"> {{ $users->links() }}  </td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
@endsection