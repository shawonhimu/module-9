@extends('layout.app')

@section('content')
    {{-- Navbar --}}
    @include('component.Navbar')
    <div class="personalBG">
        {{-- Contents --}}
        @include('component.Contact')
        {{-- Footer --}}
    </div>
    @include('component.Footer')
    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
