<?php
include 'includes/header.php';
include 'includes/auth.php';
?>
<div class="min-h-screen bg-blue-950 text-white p-4 flex flex-col items-center justify-center" data-aos="fade-up">
    <h2 class="text-xl font-bold mb-6">Quick Actions</h2>
    <div class="flex gap-8">
        <a href="#" class="text-2xl text-blue-300 hover:text-white" title="View Teachers"><i class="fas fa-users"></i></a>
        <a href="#" class="text-2xl text-blue-300 hover:text-white" title="Contact Requests"><i class="fas fa-envelope"></i></a>
        <a href="#" class="text-2xl text-blue-300 hover=text-white" title="Upload Curriculum"><i class="fas fa-upload"></i></a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>