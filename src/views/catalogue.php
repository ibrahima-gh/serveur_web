<?php
require_once __DIR__ . './../models/ProductModel.php';

$productModel = new ProductModel();
$products = $productModel->getAllProducts();
?>
    <main class="mx-auto my-12">
        <h2 class="text-3xl font-bold text-center mb-8">Catalogue</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <?php foreach ($products as $product): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['nom']) ?>" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold"><?= htmlspecialchars($product['nom']) ?></h3>
                        <p class="text-gray-600"><?= number_format($product['prix'], 2, ',', ' ') ?>€</p>
                        <a href="produit.php?id=<?= $product['id'] ?>" class="block bg-blue-500 text-white text-center py-2 mt-4 rounded hover:bg-blue-600">Voir le produit</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
