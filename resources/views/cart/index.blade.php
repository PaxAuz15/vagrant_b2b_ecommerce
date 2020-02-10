@extends('layouts.app')

@section('content')

    <h2>Your Cart</h2>

    {{dd(\Cart::session(auth()->id())->getContent())}}
@endsection
