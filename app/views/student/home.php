<?php
    require_once "../app/core/Auth.php";

    Auth::check();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold text-center mb-6">Dashboard</h1>

    <p class="text-gray-600 text-center mb-6">
        Welcome to Thoth LMS
    </p>

    <div class="space-y-4">
        <a href="<?= BASE_URL ?>/students" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Students List
        </a>

        <a href="<?= BASE_URL ?>/student/add" class="block text-center bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
            Add Student
        </a>
    </div>
</div>


</body>
</html>
