@extends('layouts.app')

@section('content')
<div class="uk-card">
  <h5 class="uk-card-title">
    Update Members
</h5>
  <div class="uk-card-body">
    @if ($errors->any())
      <div class="uk-alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('members.update', $member->id) }}">
          <div class="uk-margin">
              @csrf
              @method('PATCH')
              <label for="name">Name:</label>
              <input type="text" class="uk-input" name="name" value="{{ $member->name }}"/>
          </div>
          <div class="uk-margin">
              <label for="imgurl">Bild:</label>
              <input type="text" class="uk-input" name="imgurl" value="{{ $member->imgurl}}"/>
          </div>
          <div class="uk-margin">
              <label for="jobfct">Job function:</label>
              <input type="text" class="uk-input" name="jobfct" value="{{ $member->jobfct }}"/>
          </div>
          <div class="uk-margin">
              <label for="email">Email:</label>
              <input type="text" class="uk-input" name="email" value="{{ $member->email }}"/>
          </div>

          <div class="uk-margin">
              <label for="phone">Phone:</label>
              <input type="text" class="uk-input" name="phone" value="{{ $member->phone }}"/>
          </div>
          <button type="submit" class="uk-button uk-button-primary">Update Member</button>
      </form>
  </div>
</div>
@endsection