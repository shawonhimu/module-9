@extends('layout.app')

@section('content')
    {{-- Navbar --}}
    @include('component.Navbar')
    {{-- Contents --}}
    @include('component.PersonalInfo')
    @include('component.About')
    @include('component.Services')
    @include('component.Portfolio')
    @include('component.ClientReview')
    @include('component.Contact')
    @include('component.Blog')
    {{-- Footer --}}
    @include('component.Footer')
    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
