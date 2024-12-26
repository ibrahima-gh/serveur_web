<main class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h1 class="text-2xl font-bold mb-6 text-center">Connexion</h1>
      <form action="/login" method="POST">
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
          <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500" required>
        </div>
        <button type="submit" class="w-full bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700">Se connecter</button>
      </form>
      <p class="text-center text-gray-600 mt-4">
        Pas encore inscrit ? <a href="../views/inscription.php" class="text-blue-500 hover:underline">Créez un compte</a>.
      </p>
    </div>
  </main> 