@extends('layouts.app')

@section('content')
<div>
  @if(session()->get('success'))
    <div uk-alert>
      <a class="uk-alert-close" uk-close></a>
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <p class="uk-margin-top">
    <a class="uk-button uk-button-primary" href="{{ route('members.create')}}">Create member</a>
  </p>

  <table class="uk-table uk-table-striped">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Image</th>
          <th>Function</th>
          <th>Email</th>
          <th>Phone</th>
          <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
        <tr>
            <td><a href="{{ route('members.show', $member->id)}}">{{$member->id}}</a></td>
            <td>{{$member->name}}</td>
            <td>{{$member->imgurl}}</td>
            <td>{{$member->jobfct}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->phone}}</td>
            <td><a href="{{ route('members.edit', $member->id)}}" class="uk-button uk-button-primary uk-button-small">Edit</a></td>
            <td>
                <form action="{{ route('members.destroy', $member->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="uk-button uk-button-danger uk-button-small" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection