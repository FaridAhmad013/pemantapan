@extends('layouts.app')

@section('title', 'Halaman beranda')

@section('content')
    <a class="btn btn-primary btn-lg" href="{{ route('album') }}">Album</a>
@endsection
