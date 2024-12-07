<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white w-full max-w-4xl rounded-lg shadow-md flex overflow-hidden">
        <!-- Left Section (Image) -->
        <div class="flex-1 bg-gray-50 flex flex-col items-center justify-center p-8">
            <img src="https://via.placeholder.com/300x200" alt="Dormitory" class="w-3/4 mb-4 rounded-md">
            <h1 class="text-2xl font-bold text-red-600">Dormitory</h1>
            <p class="text-gray-600">Management System</p>
        </div>

        <!-- Right Section (Form) -->
        <div class="flex-1 p-8">
            <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">Login</h2>
            <form method="POST" action="/process-login" class="space-y-6">
                <!-- Email Input -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="username" name="username" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Password Input -->
                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    <button type="button" onclick="togglePassword()"
                        class="absolute inset-y-0 right-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10 2a8 8 0 00-8 8 8 8 0 0015.93 1.25A9.965 9.965 0 0010 2zm0 3a5 5 0 110 10 5 5 0 010-10zm.96 5a3 3 0 11-3-3 3 3 0 013 3z" />
                        </svg>
                    </button>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-2 px-4 bg-red-500 text-white font-medium rounded-md shadow-sm hover:bg-red-600 focus:ring-2 focus:ring-red-400 focus:outline-none">
                    Login
                </button>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = event.target.closest('svg');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.add('text-blue-500');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('text-blue-500');
            }
        }
    </script>
</body>
</html>
