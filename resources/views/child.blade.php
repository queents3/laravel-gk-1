{{-- layout.blade.php --}}

@extends('layout')

@section('content')
    <h2>child.blade.php:</h2>
    <h3>Der Inhalt aus dem Child (<i>child.blade.php</i>)</h3>
@endsection

@section('sidebar')
    @parent {{-- section('sidebar') erstmal aus Parent ausgeben --}}
    <h4>Sidebar aus dem Child - <i>child.blade.php</i></h4>
@endsection