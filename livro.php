<?php
require 'dados.php';
$id = $_REQUEST['id'];

$filtrado = array_filter($livros, fn($l) => $l['id'] == $id);

$livro = array_pop($filtrado);

?>


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
    <div class="bg-slate-900 border-2 rounded border-slate-700 p-2">
      <div class="flex">
        <div class="w-1/3">imagem</div>
        <div class="space-y-1">
          <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"> <?= $livro['titulo'] ?></a>
          <div class="text-sx italic"><?= $livro["autor"] ?></div>
          <div class="text-xs">⭐⭐⭐⭐⭐ (3 Avaliações)</div>
        </div>
      </div>
      <div class="text-sm mt-3">
        <?= $livro["descricao"] ?>
      </div>
    </div>
  </main>
</body>

</html>