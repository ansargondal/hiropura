@extends('layout.admin.app')
@section('title', 'Login | Hiropura')
@section('content')
    <main id="main_content">
        <section id="login_section">
            <h2>Adimin Login</h2>
            <form action="" class="form-horizontal">

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <p class="error">
                        Your Credentials Are Incorrect.
                    </p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Log In</button>
                </div>

            </form>
        </section>
    </main>
@stop
