<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Include Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
   <div class="ml-64 p-10 w-full">
    <h2 class="text-2xl font-semibold mb-6 text-gray-700">All Users</h2>

    <div class="overflow-x-auto bg-white p-6 rounded-lg shadow">
        <table class="min-w-full border-collapse text-sm">
            <thead>
                <tr class="bg-blue-600 text-white text-left">
                    <th class="py-3 px-4">First Name</th>
                    <th class="py-3 px-4">Last Name</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Hire Date</th>
                    <th class="py-3 px-4">Job Title</th>
                    <th class="py-3 px-4">Salary</th>
                    <th class="py-3 px-4">Department</th>
                    <th class="py-3 px-4">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php foreach ($users as $user): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4"><?= htmlspecialchars($user['first_name']) ?></td>
                        <td class="py-2 px-4"><?= htmlspecialchars($user['last_name']) ?></td>
                        <td class="py-2 px-4"><?= htmlspecialchars($user['email']) ?></td>
                        <td class="py-2 px-4"><?= htmlspecialchars($user['hire_date']) ?></td>
                        <td class="py-2 px-4"><?= htmlspecialchars($user['job_title']) ?></td>
                        <td class="py-2 px-4"><?= htmlspecialchars($user['salary']) ?></td>
                        <td class="py-2 px-4"><?= htmlspecialchars($user['department_name']) ?></td>
                        <td class="py-2 px-4">
                            <div class="flex gap-2">
                                <a href="/edit?id=<?= $user['employee_id'] ?>"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                                <a href="/delete?id=<?= $user['employee_id'] ?>"
                                   onclick="return confirm('Are you sure you want to delete this user?')"
                                   class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
