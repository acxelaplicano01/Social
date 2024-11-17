<x-guest-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- ===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
        <!-- ===== CSS ===== -->
        @vite(['resources/css/login.css', 'resources/js/login.js'])
        <title>Social Login</title>
    </head>

    <body>
        @if ($errors->any())
            <div class="p-1 mb-2 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-red-800 dark:text-red-300" role="alert">
                <x-validation-errors class="mb-2 ml-6" />
                @session('status')
                    <div class="mb-2 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ $value }}
                    </div>
                @endsession
            </div>
        @endif


        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-field">
                            <input type="text" id="email" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" id="password" placeholder="Enter your password" type="password" name="password" required autocomplete="current-password"  />
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck" />
                                <label for="logCheck" class="text">Remember me</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text">Forgot password?</a>
                            @endif
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Login" />
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Signup Now</a>
                        </span>
                    </div>
                </div>



                <!-- Registration Form -->
                <div class="form signup">
                    <span class="title">Registration</span>

                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="input-field">
                            <input type="text" id="name" placeholder="Enter your name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" id="email" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" id="password" placeholder="Create a password" type="password" name="password" required autocomplete="new-password" />
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" id="password_confirmation" placeholder="Confirm a password" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="termCon" />
                                <label for="termCon" class="text">I accepted all terms and conditions</label>
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Signup" />
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Already a member?
                            <a href="#" class="text login-link">Login Now</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

</x-guest-layout>