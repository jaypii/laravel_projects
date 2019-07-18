@extends('layouts.app')

@section('topnav')
<li class="nav-item">
    <a class="nav-link" href="/">Home </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/products">Products </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="#">NWN2 Chars </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="pagination">Pagination </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="submit">Add Link </a>
</li>
@endsection

@section('header')
    <div class="card mt-2 p-2 bg-light">
        <h2>NWN2 Character List</h2>
    </div>
@endsection

@section('content')
<div class="card mt-2 p-2">
    <div class="row mb-2">
        <div class="col-lg-12 margin-tb">
            <div class="text-right">
                <a class="btn btn-sm btn-success disabled" href="{{ route('nwn2chars.create') }}">Create new Char</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped mt-2">
        <tr>
            <th>@sortablelink('id','#')</th>
            <th>@sortablelink('name','Name')</th>
            <th>@sortablelink('race','Race')</th>
            <th>Gender</th>
            <th>Alignment</th>
            <th>Classes</th>
            <th>@sortablelink('lvltotal','Total Lvl')</th>
            <th>Layer</th>
        </tr>

        @foreach ($nwn2chars as $nwn2char)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $nwn2char->name }}</td>
            <td>{{ $nwn2char->race }}</td>
            <td>{{ $nwn2char->gender}}</td>
            <td>{{ $nwn2char->alignment }}</td>
            <td>
                {{ $nwn2char->startclass }}&nbsp;{{ $nwn2char->lvlclass1 }} /
                {{ $nwn2char->class2 }}&nbsp;{{ $nwn2char->lvlclass2 }} /
                {{ $nwn2char->class3 }}&nbsp;{{ $nwn2char->lvlclass3 }} /
                {{ $nwn2char->class4 }}&nbsp;{{ $nwn2char->lvlclass4 }}
            </td>
            <td>{{ $nwn2char->lvltotal }}</td>
            <td>{{ $nwn2char->layer}}</td>
        </tr>
        @endforeach
    </table>

    {!! $nwn2chars->onEachSide(1)->links() !!}

</div>
@endsection