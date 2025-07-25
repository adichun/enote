<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Note App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

<div class="min-h-screen flex">
    <!-- Left: Login Form -->
    <div class="w-full md:w-1/2 flex items-center justify-center p-8">
        <div class="max-w-md w-full">
            <!-- Logo -->
            <div class="text-2xl font-bold mb-6 text-center">
                <span class="inline-block text-blue-600">📣 Vote</span>
            </div>

            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Welcome Back</h2>

            <!-- Google Login Button -->
            <a href="{{ route('google.login') }}"
               class="w-full flex items-center justify-center gap-2 border border-gray-300 hover:border-blue-500 py-2 px-4 rounded mb-4 text-gray-600 hover:text-blue-600 transition">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google">
                Log in with Google
            </a>

            <div class="text-center text-sm text-gray-400 mb-4">OR LOGIN WITH EMAIL</div>

            <!-- Email Login Form -->
            <form method="POST" action="#" class="space-y-4">
                @csrf
                <input type="email" name="email" placeholder="You Email"
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="password" name="password" placeholder="You Password"
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                <div class="flex justify-between items-center text-sm">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="mr-2"> Keep me logged in
                    </label>
                    <a href="#" class="text-blue-500 hover:underline">Forgot password</a>
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                    Log in
                </button>
            </form>

            <p class="mt-4 text-sm text-center text-gray-600">
                Don't have an account yet?
                <a href="#" class="text-blue-500 hover:underline">Sign up</a>
            </p>
        </div>
    </div>

    <!-- Right: Illustration / Promo -->
    <div class="hidden md:flex w-1/2 items-center justify-center relative">
        <img src="{{ asset('images/login.png') }}" alt="People">
    </div>
</div>

</body>
</html>
