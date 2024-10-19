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
    <form class="w-full flex gap-2 mt-8">
      <input
        type="text"
        class="bg-slate-800 border-2 border-slate-700 px-4 py-2 rounded-md  focus:outline-none w-full"
        placeholder="Pesquisar">
      <button type="submit">🔎</button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

      <div class="bg-slate-900 border-2 border-slate-700 p-2">
        <div class="flex">
          <div class="w-1/3">imagem</div>
          <div class="w-2/3">
            <a href="/livro.php?" class="font-semibold hover:underline">titulo</a>
            <div class="text-sx italic">Autor</div>
            <div class="text-xs">⭐⭐⭐⭐⭐ (3 Avaliações)</div>
          </div>
        </div>
        <div>
          descricao
        </div>
      </div>

      <div class="bg-slate-900 border-2 border-slate-700 p-2">
        <div class="flex">
          <div class="w-1/3">imagem</div>
          <div class="w-2/3">
            <a href="/livro.php?" class="font-semibold hover:underline">titulo</a>
            <div class="text-sx italic">Autor</div>
            <div class="text-xs">⭐⭐⭐⭐⭐ (3 Avaliações)</div>
          </div>
        </div>
        <div>
          descricao
        </div>
      </div>

      <div class="bg-slate-900 border-2 border-slate-700 p-2">
        <div class="flex">
          <div class="w-1/3">imagem</div>
          <div class="w-2/3">
            <a href="/livro.php?" class="font-semibold hover:underline">titulo</a>
            <div class="text-sx italic">Autor</div>
            <div class="text-xs">⭐⭐⭐⭐⭐ (3 Avaliações)</div>
          </div>
        </div>
        <div>
          descricao
        </div>
      </div>

    </section>

  </main>
</body>

</html>