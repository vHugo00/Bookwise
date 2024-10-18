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
    <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
      <div class="font-bold text-xl tracking-wider">Book Wise</div>

      <ul class="flex gap-4 font-semibold">
        <li><a href="/" class="text-violet-500">Explorar</a></li>
        <li><a href="/meus-livros" class="hover:underline">Meus livros</a></li>
      </ul>

      <ul>
        <li><a href="/login">Login</a></li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-8 ">

    <h1 class="mt-10 font-bold text-3xl">Explorar</h1>

    <form class="w-full flex gap-2">

      <input
        type="text"
        class="bg-slate-800 px-4 py-2 rounded focus:outline-none w-full"
        placeholder="Pesquisar">
      <button type="submit">🔎</button>
    </form>

    <div class=""></div>

  </main>
</body>

</html>