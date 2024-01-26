@extends('User.index')
@section('user')
    <section class="signup">
        <div class="signup-content-one">

        </div>
        <div class="signup-content-two">
            <div class="title">
                <h1>Private</h1>
                <p>Please fill the information below and proceed to security</p>
            </div>
            <form action="{{ route('success') }}" method="POST">
                <div class="input">
                    @csrf
                    <input type="text" name="username" placeholder="Username" autofocus>
                    <input type="text" name="email" placeholder="Email" autofocus>
                    <input type="password" name="password" placeholder="Password" autofocus>
                    <button type="submit"><b>Submit</b></button>
                </div>

            </form>

            @if ($errors->any())
                <div class="error">
                    @foreach ($errors->all() as $validation)
                        <li>{{ $validation }}</li>
                    @endforeach
                </div>
            @endif

        </div>

    </section>
@endsection
