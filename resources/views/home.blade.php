@extends('layouts.app')

@section('content')
    @guest
        @include('partials.about')
    @endguest
    <week-view class="mt-6" :user="{{ json_encode(auth()->user()) }}"></week-view>
@endsection
