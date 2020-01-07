<!doctype html>
<html>
<body>
    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <table>
            <tr>
            <td><label for="name" class="col-md-4 control-label">Name</label></td>
            <td><input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus></td>
            </tr>
            <tr>
            <td><label for="email" class="col-md-4 control-label">E-Mail Address</label></td>
            <td><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required></td>
            </tr>
            <tr>
            <td><label for="password" class="col-md-4 control-label">Password</label></td>
            <td><input id="password" type="password" class="form-control" name="password" required></td>
            </tr>
            <tr>
            <td><label for="password-confirm" class="col-md-4 control-label">Confirm Password</label></td>
            <td><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></td>
            </tr>
            <td><button type="submit" class="btn btn-primary">Register</button></td>
        </table>
    </form>
</body>
</html>
