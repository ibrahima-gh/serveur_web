
<?php
require_once __DIR__ . './../models/ProductModel.php';

$productModel = new ProductModel();
$products = $productModel->getAllProducts();
?>
<main>
    <section class="h-svh bg-green-300 bg-center flex flex-row">
        <section class="w-1/2">
            <div class="bg-gray-800 bg-opacity-50 h-full flex items-center justify-center">
                <h2 class="text-3xl font-semibold text-white">Met ta cagouleeee</h2>
            </div>
        </section>
        <section class="w-1/2 flex flex-col items-center justify-center">
            <h3 class="text-2xl font-semibold text-gray-800">Découvrez nos cagoules intemporelles</h3>
            <div class="flex w-full justify-center max-w-40">
            <?php foreach ($products as $product): ?>
            <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['nom']) ?>">
            <?php endforeach; ?></div>
            <p class="text-gray-600 mt-4 text-lg">
                Nos produits allient confort et élégance pour toutes les occasions.
            </p>
            <a href="/crepe_waou/public/catalogue" class="bg-gray-800 text-white px-6 py-3 rounded mt-6 inline-block hover:bg-gray-700">Voir le catalogue</a>
        </section>
    </section>
</main>