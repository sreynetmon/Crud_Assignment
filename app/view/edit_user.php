<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-md">
    <?php include 'sidebar.php'; ?>

    <h2 class="text-2xl font-semibold mb-6 text-gray-700">Edit User</h2>

    <form action="/update" method="POST" class="space-y-4">
        <input type="hidden" name="id" value="<?= $user['employee_id'] ?>">
       
        <div class="flex gap-4">
            <div class="w-1/2">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>
            <div class="w-1/2">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($user['last_name']) ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>
        </div>

        <label>Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required class="w-full px-3 py-2 border rounded-lg">

        <label>Hire Date</label>
        <input type="date" name="hire_date" value="<?= htmlspecialchars($user['hire_date']) ?>" required class="w-full px-3 py-2 border rounded-lg">

        <label>Job Title</label>
        <input type="text" name="job_title" value="<?= htmlspecialchars($user['job_title']) ?>" required class="w-full px-3 py-2 border rounded-lg">

        <label>Salary</label>
        <input type="number" step="0.01" name="salary" value="<?= htmlspecialchars($user['salary']) ?>" required class="w-full px-3 py-2 border rounded-lg">

        <label>Department</label>
        <input type="text" name="department_name" value="<?= htmlspecialchars($user['department_name']) ?>" required class="w-full px-3 py-2 border rounded-lg">

        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                Update User
            </button>
        </div>
    </form>
</div>
