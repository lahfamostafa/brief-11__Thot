<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">


<div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold text-center mb-6">Add Student</h1>

    <form method="POST" action="<?= BASE_URL ?>/students" class="space-y-4">
        <div>
            <label class="block text-gray-600 mb-1">Name</label>
            <input type="text" name="nom"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Email</label>
            <input type="email" name="email"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Password</label>
            <input type="password" name="password"
                   class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

        <?php if (!empty($error)) : ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?= $error ?>
            </div>
        <?php endif; ?>


        <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
            Save Student
        </button>
    </form>

    <div class="mt-6 text-center">
        <a href="<?= BASE_URL ?>/students" class="text-blue-600 hover:underline">
             Back to students
        </a>
    </div>
</div>


</body>
</html>
