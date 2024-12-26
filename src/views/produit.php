<main class="container mx-auto my-8">
    <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg">
      <img src="./assets/cag_blanc.png" alt="Cagoule classique" class="w-full md:w-1/2 h-64 object-cover rounded-t md:rounded-l">
      <div class="p-6 md:w-1/2">
        <h2 class="text-2xl font-bold">Cagoule Classique</h2>
        <p class="text-gray-600 mt-2 text-lg">Prix : 15,00€</p>
        <p class="mt-4 text-gray-700">Une cagoule confortable et chaude, idéale pour l'hiver. Disponible en plusieurs coloris.</p>
        <form action="./panier.php" method="post" class="mt-6">
          <label for="quantity" class="block text-gray-700">Quantité</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1" class="border border-gray-300 p-2 rounded mt-2 w-24">
          <button type="submit" class="block bg-green-500 text-white px-4 py-2 rounded mt-4 hover:bg-green-600">Ajouter au panier</button>
        </form>
      </div>
    </div>
  </main>