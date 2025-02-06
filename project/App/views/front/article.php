<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Liste des Articles</h1>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($articles as $article): ?>
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800"><?= htmlspecialchars($article['title']) ?></h2>
                    
                    <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">
                        Voir l'Article
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-8">
            <a href="home" class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 transition-colors">
                Retour à l'Accueil
            </a>
        </div>
    </div>
</body>
</html>