<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="assets/login/css/style.css">
</head>
<body>
  <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
        <form role="form" method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
            <div class="sign-in-htm">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <div class="group">
                    <label for="username" class="label">Username</label>
                        <input id="username" type="username" class="input" name="username" value="{{ old('username') }}" required autofocus>
                        @if ($errors->has('username'))
                            <span class="error">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="group">
                    <label for="password" class="label">Username</label>
                     <input id="password" type="password" class="input" name="password" value="{{ old('password') }}" required autofocus>
                        @if ($errors->has('password'))
                            <span class="error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                </div>
          		<div class="group">
                    <input id="check" type="checkbox" class="check" checked  name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
            </div>
        </form>
            <div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">username Address</label>
                    <input id="pass" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign Up">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
