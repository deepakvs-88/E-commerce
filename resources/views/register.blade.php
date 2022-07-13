@extends('home')
@section('content')
<div class="jumbotron">
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center"></div>
                <div class="d-flex justify-content-center form_container">
                    <form action="register" method="post">
                        {{ csrf_field() }}
                        <div class="user-form">
                            <label for="exampleforusername">User Name</label>
                            <input type="text" name="name" class="form-control" value="" placeholder="User name">
                        </div><br>
                        <div class="user-form">
                            <label for="exampleforemail">Email</label>
                            <input type="email" name="email" class="form-control" value="" placeholder="Email">
                        </div><br>
                        <div class="user-form">
                            <label for="Password">Password</label>
                            <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                        </div><br>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="button" class="btn btn-info">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection