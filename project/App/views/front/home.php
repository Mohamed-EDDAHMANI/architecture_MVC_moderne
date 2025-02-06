<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Article Store</h1>
            <nav>
                <a href="/login" class="bg-white text-blue-600 px-4 py-2 rounded-md mr-2 hover:bg-gray-100">Login</a>
                <a href="/article" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">View Articles</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow container mx-auto mt-10 px-4">
        <section class="text-center">
            <h2 class="text-4xl font-bold mb-6 text-gray-800">Discover Amazing Articles</h2>
            <p class="text-xl text-gray-600 mb-8">Explore a world of knowledge, insights, and inspiration</p>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Latest Articles</h3>
                    <p class="text-gray-600">Stay updated with our freshest content</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Popular Reads</h3>
                    <p class="text-gray-600">Discover our most read articles</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Categories</h3>
                    <p class="text-gray-600">Find articles in your favorite topics</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Article Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>