@extends('base')

@section('content')
<br>
<div class="container">
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mb-3">
            <div class="card-header text-white" style="background: rgb(113,21,62);
            background: radial-gradient(circle, rgba(113,21,62,1) 0%, rgba(29,61,98,1) 100%); text-align:center;">
                <h3 class="card-title">User Registration</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop
