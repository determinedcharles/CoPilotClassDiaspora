<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EduConnect</title>
    <meta name="viewport" content="width=680, initial-scale=1, maximum-scale=1">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="/assets/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      if('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js');
      }
      AOS.init();
    </script>
    <style>
      body { max-width: 680px; margin: 0 auto; }
    </style>
</head>
<body class="bg-blue-950">
