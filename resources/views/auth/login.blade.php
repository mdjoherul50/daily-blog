@extends('template.master')

@section('content')
    <section id="container">
        <div class="form-area">
            <div class="form-title">
                <h2>Login</h2>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('auth.authentication')}}" class="login-form" method="POST">
                @csrf
                <div class="form-item">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="User email" value="{{old('email')}}">
                </div>
                <div class="form-item">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="User password">
                </div>
                <button class="form-button" type="submit">Login</button>
            </form>
        </div>
    </section>
@endsection