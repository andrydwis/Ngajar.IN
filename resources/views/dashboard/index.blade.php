@extends('layout.app')
@section('content')
@include('layout.alert')
        @guest         
        @include('layout.front')
        @include('auth.login')
        
        @include('auth.register')
        @endguest
          
        @auth
        @if(Auth::user()->role == 'client')
        @include('layout.frontclientmentor')
        @endif

        @if(Auth::user()->role == 'mentor')        
        @include('layout.frontclientmentor')
        @endif

        @if(Auth::user()->role == 'admin')
        
        @include('layout.frontadmin')
        @endif
         
        @csrf

        @endauth
        @include('dashboard.ourprofile')        
        @include('dashboard.team')
@endsection('content')