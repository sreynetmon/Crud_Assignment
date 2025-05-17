<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <?php include 'sidebar.php'; ?>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-semibold mb-6 text-gray-700">Add New User</h2>
        <p class="text-gray-600 mb-4">Fill in the details below to add a new user.</p>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
        ✅ User added successfully!
    </div>
<?php endif; ?>
        <form action="/add" method="POST" class="space-y-4">
            <div class="flex gap-4">
                <div class="w-1/2">
                    <label for="first_name" class="block text-gray-600 mb-1">First Name</label>
                    <input type="text" id="first_name" name="first_name" required
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/2">
                    <label for="last_name" class="block text-gray-600 mb-1">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <div>
                <label for="email" class="block text-gray-600 mb-1">Email</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="hire_date" class="block text-gray-600 mb-1">Hire Date</label>
                <input type="date" id="hire_date" name="hire_date" required
                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="job_title" class="block text-gray-600 mb-1">Job Title</label>
                <input type="text" id="job_title" name="job_title" required step="0.01"
                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="salary" class="block text-gray-600 mb-1">Salary</label>
                <input type="number" id="salary" name="salary" required step="0.01"
                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="department_name" class="block text-gray-600 mb-1">Department</label>
                <input type="text" id="department_name" name="department_name" required
                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="text-right">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    Add User
                </button>
            </div>
        </form>
    </div>
</body>
</html>
