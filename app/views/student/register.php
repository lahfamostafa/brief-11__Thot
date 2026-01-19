<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Register | Thoth LMS</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-6">
        <h1 class="text-2xl font-bold text-center mb-6">Inscription étudiant</h1>

        <?php if (isset($error)): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($success)): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                <?php echo htmlspecialchars($success); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="/register" class="space-y-4">

            <div>
                <label class="block text-gray-700 mb-1">Nom complet</label>
                <input
                    type="text"
                    name="name"
                    required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                >
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Email</label>
                <input
                    type="email"
                    name="email"
                    required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                >
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Mot de passe</label>
                <input
                    type="password"
                    name="password"
                    required
                    minlength="6"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-green-300"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition"
            >
                S'inscrire
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-4">
            Déjà un compte ?
            <a href="/login" class="text-blue-600 hover:underline">
                Se connecter
            </a>
        </p>
    </div>

</body>
</html>
