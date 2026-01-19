<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

<div class="max-w-5xl mx-auto bg-white p-6 rounded-xl shadow">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Students</h1>
        <a href="<?= BASE_URL ?>/student/add" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Add Student
        </a>
    </div>

    <?php if (!empty($students)) : ?>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student) : ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border"><?= $student['id'] ?></td>
                            <td class="px-4 py-2 border"><?= $student['name'] ?></td>
                            <td class="px-4 py-2 border"><?= $student['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <p class="text-gray-500">No students found.</p>
    <?php endif; ?>

    <div class="mt-6">
        <a href="<?= BASE_URL ?>/" class="text-blue-600 hover:underline">
            ← Back to dashboard
        </a>
    </div>
</div>

</body>
</html>
