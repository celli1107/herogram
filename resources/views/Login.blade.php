@extends('layouts.loginlay')

@section('content')
<div class="login-container">
    <img src="img/logohg.png" alt="Logo" width="50">
    <h2>WELCOME</h2>
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <a href="#" style="display: block; font-size: 12px; text-align: right; margin-bottom: 30px; color: #3D2C8D;">Forgot Password?</a>
        <button type="submit">LOGIN</button>
    </form>
</div>
@endsection