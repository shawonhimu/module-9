@extends('layout.app')

@section('content')
    {{-- Navbar --}}
    @include('component.Navbar')
    {{-- Contents --}}
    @include('component.Services')
    {{-- Footer --}}
    @include('component.Footer')
    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
