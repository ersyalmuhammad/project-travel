
@extends('layouts.success')

@section('title', 'checkout success')


@section('content')
  <main>
    <div class="container success-section text-center">
      <img src="{{ url('frontend/images/icon/ic_mail.png') }}" alt="" class="mt-4">
      <h3 class="mt-5">Yay! Success</h3>
      <p class="text-muted">We've sent you email for trip instruction please read it as well</p>
      <a href="{{ url('/') }}" class="btn btn-success mt-3 px-5">
        Home Page
      </a>
    </div>
  </main>
@stop