<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
        <script>
            function encrypt()
            {
                var pass=document.getElementById('password').value;
                var em=document.getElementById('email').value;
                if(pass=="" || em=="")
                {
                    return false;
                }
                else
                {
                    var hash = CryptoJS.MD5(em);
                    document.getElementById('email').value=hash;
                    var hash1 = CryptoJS.MD5(pass);
                    document.getElementById('password').value=hash1;
                    return true;
                }
            }
        </script>
    </head>
   <body>
    <form method="POST" action="/login">
    {!! csrf_field() !!}

    <table>
        <tr>
        <td><label for="email" class="col-md-4 control-label">E-Mail</label></td>
        <td><input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required></td>
        </tr>
        <tr>
        <td><label for="password" class="col-md-4 control-label">Password</label></td>
        <td><input id="password" type="password" class="form-control" name="password" required></td>
        </tr>
        <td><button type="submit" onclick="encrypt()" class="btn btn-primary">Login</button></td>
    </table>

    </form>
    </body>
</html>

<script>
$(document).ready(function() {
    console.log( "ready!" );
});
</script>
