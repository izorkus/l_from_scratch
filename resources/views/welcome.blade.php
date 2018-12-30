@extends('layout')

@section('content')

<div class="content">
    <div class="title m-b-md">
        Laravel
    </div>
    @unless ( (count($people)) >=2 )
        Size of verabel is more or even to 2...
    @else
        A moze jednak cos...
    @endunless
<div class="links">
    @foreach ($people as $person)
        {{ $person . '  '}} 
    @endforeach
    </div>
</div>

@endsection

@section('footer')
<h1>Footer</h1>
@endsection