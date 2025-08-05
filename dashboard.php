<?php
include 'includes/header.php';
include 'includes/auth.php';
?>
<div class="min-h-screen bg-blue-950 text-white p-4" data-aos="fade-up">
    <h2 class="text-2xl font-bold mb-2">Hello, <?= htmlspecialchars($user['name']); ?>!</h2>
    <p class="mb-6">Role: <?= ucfirst($user['role']); ?></p>
    <div class="grid gap-6">
        <?php if($user['role']=='teacher'): ?>
            <a href="quick-actions.php" class="block bg-blue-800 p-4 rounded shadow hover:bg-blue-700">Upload Curriculum</a>
        <?php else: ?>
            <a href="quick-actions.php" class="block bg-blue-800 p-4 rounded shadow hover:bg-blue-700">View Teachers</a>
        <?php endif; ?>
        <a href="profile.php" class="block bg-blue-700 p-4 rounded shadow hover:bg-blue-600">Edit Profile</a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>