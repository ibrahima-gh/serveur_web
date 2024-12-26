   <main class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h1 class="text-2xl font-bold mb-6 text-center">Inscription</h1>
      <form action="/register" method="POST">
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
          <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
          <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500" required>
        </div>
        <div class="mb-4">
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmez le mot de passe</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500" required>
        </div>
        <button type="submit" class="w-full bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-700">S'inscrire</button>
      </form>
      <p class="text-center text-gray-600 mt-4">
        Déjà un compte ? <a href="./connexion.php" class="text-blue-500 hover:underline">Connectez-vous</a>.
      </p>
    </div>
  </main>