@extends('layout.app')

@section('content')
@if($products !== null)
    {{ $products }}
@endif
@endsection
