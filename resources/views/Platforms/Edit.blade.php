@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="x_panel">
            <div class="x_title">
                <h3>Add Platforms</h3>
                <form method="POST" action="{{ route('platforms.update',[$platform->id]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group @error('Platform') bad @enderror">
                        <label for="Platform" class="label-control">
                            <i class="fa fa-users"></i>
                            Platform
                        </label>
                        <select class="form-control" name="Platform">
                            <option label="Select Platform"></option>
                            <option @if($platform->Platform=='Whatsapp') selected @endif>Whatsapp </option>
                            <option @if($platform->Platform=='GooglePlus') selected @endif>GooglePlus</option>
                            <option @if($platform->Platform=='Facebook') selected @endif>Facebook</option>
                            <option @if($platform->Platform=='Instagram') selected @endif>Instagram</option>
                            <option @if($platform->Platform=='Pinterest') selected @endif>Pinterest</option>
                            <option @if($platform->Platform=='Twitter') selected @endif>Twitter</option>
                            <option @if($platform->Platform=='Linkedin') selected @endif>Linkedin</option>
                        </select>
                        @error('Platform') 
                        <span style="color:red">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group @error('Platform') bad @enderror">
                        <label class="label-control" for="Link">
                            <i class="fa fa-link"></i>
                            Profile Link
                        </label>
                        <input type="text" class="form-control" name="Link" value="{{ $platform->Link }}">
                        @error('Link') 
                        <span style="color:red">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="container">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="x_panel">
            <div class="x_title">
                <h3>Platforms Platforms</h3>
            </div>
            <table class="table table-striped table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Platform</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($platforms as $platform)
                     <tr>
                        <td>{{ $platform->Platform }}</td>
                        <td><a href="{{ $platform->Link }}">{{ $platform->Link }}</a></td>
                        <td>
                            <a href="{{ route('platforms.edit',[$platform->id]) }}" class="fa fa-edit" style="color:blue"></a>&nbsp;&nbsp;
                            <a href="{{ route('platforms.delete',[$platform->id]) }}" class="fa fa-trash" style="color:red"></a>&nbsp;&nbsp;
                        </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection