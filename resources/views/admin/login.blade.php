<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin-Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite('resources/css/customer/auth.css')
</head>

<body>
    <!-- card register -->
    <div class="container-auth">
        <img src="{{ asset('assets/logo.png') }}" alt="logo">
        <h2>Admin Login</h2>

        <form action="{{ route('admin.login') }}" method="POST" class="form-auth">
            @csrf
            <div class="wrapper-all-inputan">
                <!-- inputan 1 -->
                <div class="per-inputan">
                    <label for="email" class="text-label-inputan">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" class="inputan">
                </div>

                <!-- inputan 2 -->
                <div class="per-inputan">
                    <label for="password" class="text-label-inputan">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" class="inputan">
                </div>

                <!-- inputan remember me and forget password -->
                <div class="wrapper-remember-and-forget-pass">
                    <div class="wrapper-remember-me">
                        <input type="checkbox" class="inputan-checkbox">
                        <p class="text-remember-me">Remember me</p>
                    </div>
                    <a href="" class="text-forget-password">Forget Password?</a>
                </div>
            </div>
            @if ($errors->any())
                <p class="text-sm text-red-600 text-center -mt-2">{{ $errors->first() }}</p>
            @endif
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>
