@extends('layout.app')

@section('content')
    {{-- Navbar --}}
    @include('component.Navbar')
    {{-- Contents --}}
    <div class="personalBG">
        @include('component.Portfolio')
    </div>
    {{-- Footer --}}
    @include('component.Footer')
    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
