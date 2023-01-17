@extends('layout')

@section('content')
    <h2>child2.blade.php:</h2>
    <h3>Meine Liste</h3>
    <ul class="li">1</ul>
    <ul class="li">2</ul>
    <ul class="li">3</ul>
@endsection

@section('sidebar')
    @parent
    <h4>Meine Termine</h4>
    <p>Termin 1<br>Termin 2</p>
@endsection