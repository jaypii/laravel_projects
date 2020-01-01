@extends('layouts.app')

@section('content')
<h3>Show member</h3>
<div class="uk-child-width-1-2 uk-grid-small" uk-grid>
   <div class="uk-card uk-card-default uk-width-1-3@m uk-margin-bottom">
      <div class="uk-card-header">
         <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
               <img class="uk-border-rounded" width="80" data-src="{{ asset('img') }}/{{$member->imgurl}}" uk-img>
            </div>
            <div class="uk-width-expand">
               <h3 class="uk-card-title uk-margin-remove-bottom">{{ $member->name}}</h3>
            </div>
         </div>
      </div>
      <div class="uk-card-body">
         <p class="uk-text-small">
            Function:&nbsp;{{ $member->jobfct}}<br/>
            Email:&nbsp;{{ $member->email}}<br/>
            Mobile:&nbsp;{{ $member->phone}}
         </p>
      </div>
      <p class="uk-margin-small-bottom">
         <a class="uk-button uk-button-primary uk-button-small" href="/members">Back</a>
      </p>
   </div>
</div>
@endsection