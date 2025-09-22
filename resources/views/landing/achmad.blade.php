<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-slide-up {
            animation: fadeInSlideUp 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 via-purple-900 to-violet-800 text-white min-h-screen flex items-center justify-center p-4">
    <div class="bg-white/10 backdrop-blur-lg rounded-2xl shadow-2xl p-8 max-w-sm w-full text-center border border-purple-400/20 animate-fade-in-slide-up">
        <img
            src="https://images.unsplash.com/photo-1594323713852-9626155bfd37?q=80&w=1887&auto=format&fit=crop"
            alt="Gambar Abstrak Ungu"
            class="w-32 h-32 rounded-full mx-auto mb-6 border-4 border-purple-400 shadow-lg object-cover"
        >
        <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-500">
            Selamat Datang!
        </h1>
    </div>
</body>
</html>

