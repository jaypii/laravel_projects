@extends('layouts.app')

@section('content')
<div class="uk-card">
  <h4 class="uk-card-title">
    Add Employee
  </h4>
  <div class="uk-card-body">
    @if ($errors->any())
      <div class="uk-alert-danger" uk-alert>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('members.store') }}">
          <div class="uk-margin">
              @csrf
              <label for="name">Member Name:</label>
              <input type="text" class="uk-input" name="name"/>
          </div>
          <div class="uk-margin">
              <label for="imgurl">Member Pict:</label>
              <input type="text" class="uk-input" name="imgurl"/>
          </div>
          <div class="uk-margin">
              <label for="jobfct">Member Job function:</label>
              <input type="text" class="uk-input" name="jobfct"/>
          </div>
          <div class="uk-margin">
              <label for="email">Member Email:</label>
              <input type="text" class="uk-input" name="email"/>
          </div>
          <div class="uk-margin">
              <label for="phone">Member Phone:</label>
              <input type="text" class="uk-input" name="phone"/>
          </div>
          <button type="submit" class="uk-button uk-button-primary">Create Member</button>
      </form>
  </div>
</div>
@endsection