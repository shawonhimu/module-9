@extends('layout.app')

@section('content')
    {{-- Navbar --}}
    @include('component.Navbar')
    <div class="personalBG">
        <div class="overlay">
            {{-- Contents --}}
            @include('component.About')
            {{-- Footer --}}
        </div>
    </div>
    @include('component.Footer')
    {{-- Modal --}}
    @include('component.ViewImgModal')
@endsection
