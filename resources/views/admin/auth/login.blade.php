{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h4 class="text-center">Admin Login</h4>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

    <!-- Vendor css -->
    <link href="{{ asset('backend') }}/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('backend') }}/assets/js/config.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body>

    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card overflow-hidden text-center rounded-4 p-xxl-4 p-3 mb-0">
                    <a href="index.html" class="auth-brand mb-4">
                        <img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt="dark logo" height="26"
                            class="logo-dark">
                        <img src="{{ asset('backend') }}/assets/images/logo.png" alt="logo light" height="26"
                            class="logo-light">
                    </a>

                    <h4 class="fw-semibold mb-2 fs-18">Admin Login</h4>

                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="mb-2">
                            <input type="email" name="email" value="{{ old('email') }}" required autofocus
                                autocomplete="email" class="form-control" placeholder="Enter your email">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" required autocomplete="current-password"
                                class="form-control" placeholder="Enter your password">

                            @error('password')
                                <h6 class="text-danger">{{ $message }}</h6>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">{{ __('Remember me') }}</label>
                            </div>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-muted border-bottom border-dashed">{{ __('Forgot your password?') }}</a>
                            @endif
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit"> {{ __('Log in') }}</button>
                        </div>
                    </form>
                    </p>
                </div>

                <p class="mt-4 text-center mb-0">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Ecommerce - By <span
                        class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Md Najmul Hasan</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('backend') }}/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
</body>

</html>
