<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book wise</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-200">
  <header class="bg-slate-900 ">
    <nav class="mx-auto max-w-screen-lg flex justify-between py-4 px-2">
      <a href="/">
        <div class="font-bold text-xl tracking-wider">Book Wise</div>
      </a>

      <ul class="flex gap-4 font-semibold">
        <li><a href="/" class="text-violet-500">Explorar</a></li>
        <li><a href="/meus-livros" class="hover:underline">Meus livros</a></li>
      </ul>

      <ul>
        <li><a href="/login">Login</a></li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-8 px-2">

    <?php require "views/{$view}.view.php" ?>

  </main>
</body>

</html>