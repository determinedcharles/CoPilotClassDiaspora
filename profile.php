<?php
include 'includes/header.php';
include 'includes/auth.php';
$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'includes/helpers.php';
}
?>
<div class="min-h-screen bg-blue-950 text-white flex flex-col items-center justify-center" data-aos="fade-in">
    <form method="POST" class="bg-blue-900 p-6 rounded shadow-xl w-full max-w-sm">
        <h2 class="mb-4 text-xl font-bold">Profile</h2>
        <?php if($err): ?><div class="mb-2 text-red-400"><?= $err ?></div><?php endif; ?>
        <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required class="mb-3 w-full px-3 py-2 rounded bg-blue-800 text-white" />
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required class="mb-3 w-full px-3 py-2 rounded bg-blue-800 text-white" />
        <button type="submit" class="w-full bg-blue-700 py-2 rounded hover:bg-blue-800">Update Profile</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>