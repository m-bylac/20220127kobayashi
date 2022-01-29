@extends('layout')

@section('content')
<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf

    <label>氏名</label>
    <input
        name="name"
        value="{{ old('name') }}"
        type="text">
    @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('title') }}</p>
    @endif

    <label>メールアドレス</label>
    <input
        name="email"
        value="{{ old('email') }}"
        type="text">
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
    @endif