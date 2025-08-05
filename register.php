<?php
include 'includes/header.php';
$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'includes/auth.php';
}
?>
<div class="flex flex-col items-center justify-center min-h-screen bg-blue-950 text-white" data-aos="zoom-in">
    <form method="POST" class="bg-blue-900 p-6 rounded shadow-xl w-full max-w-sm">
        <h2 class="mb-4 text-xl font-bold">Register</h2>
        <?php if($err): ?><div class="mb-2 text-red-400"><?= $err ?></div><?php endif; ?>
        <input type="text" name="name" placeholder="Full Name" required class="mb-3 w-full px-3 py-2 rounded bg-blue-800 text-white" />
        <input type="email" name="email" placeholder="Email" required class="mb-3 w-full px-3 py-2 rounded bg-blue-800 text-white" />
        <input type="password" name="password" placeholder="Password" required class="mb-3 w-full px-3 py-2 rounded bg-blue-800 text-white" />
        <select name="role" required class="mb-3 w-full px-3 py-2 rounded bg-blue-800 text-white">
            <option value="">Select Role</option>
            <option value="teacher">Teacher</option>
            <option value="parent">Parent</option>
        </select>
        <button type="submit" class="w-full bg-blue-700 py-2 rounded hover:bg-blue-800">Register</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>