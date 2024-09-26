<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <header class="flex items-center justify-between px-6 py-4">
        <!-- Left Section (Logo and Links) -->
        <div class="flex items-center space-x-8">
            <!-- Logo -->
            <img src="pict/logo2.png" alt="Company Logo" class="h-9">

            <!-- Navigation Links -->
            <a href="index.php" class="hover:text-red-400">Homepage</a>
            <a href="form.php" class="hover:text-green-400">Form</a>
            <a href="order.php" class="hover:text-yellow-400">Data</a>
        </div>

        <!-- Right Section (Login Button) -->
        <div>
            <a href="login.php" class="hover:text-pink-400">Log in &rarr;</a>
        </div>
    </header>
</body>
</html>