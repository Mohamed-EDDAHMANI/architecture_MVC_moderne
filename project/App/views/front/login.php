<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Article Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login to Article Store</h2>
        
        <form class="space-y-4">
            <div>
                <label for="email" class="block text-gray-700 mb-2">Email</label>
                <input type="email" id="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email">
            </div>
            
            <div>
                <label for="password" class="block text-gray-700 mb-2">Password</label>
                <input type="password" id="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password">
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">
                Login
            </button>
        </form>
        
        <div class="text-center mt-4">
            <a href="#" class="text-blue-600 hover:underline">Forgot Password?</a>
            <p class="mt-2 text-gray-600">Don't have an account? <a href="#" class="text-blue-600 hover:underline">Sign Up</a></p>
        </div>
    </div>
</body>
</html>