@extends('layouts.app')
@section('content')
<div class="row">
    <h3 class="text-center">Manage Users</h3>
    <div class="container">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title">Names</th>
              <th class="column-title">Email </th>
              <th class="column-title">Role </th>
              <th class="column-title">Joined At </th>
              <th class="column-title">Status </th>
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
                <td class=" ">{{ $user->role }} <i class="success fa fa-long-arrow-up"></i></td>
                <td class=" ">{{ ($user->created_at)->toFormattedDateString() }}</td>
                <td class=" ">Active</td>
                <td>
                    <a href="#" class="fa fa-pencil text-primary"></a>
                    <a href="#" class="fa fa-trash text-danger"></a>
                </td>
              </tr>                    
            @endforeach       
          </tbody>
        </table>
      </div>
</div>
@endsection