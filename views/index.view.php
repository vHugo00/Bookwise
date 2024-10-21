<form class="w-full flex gap-2 mt-8">
  <input
    type="text"
    class="bg-slate-800 border-2 border-slate-700 px-4 py-2 rounded-md  focus:outline-none w-full"
    placeholder="Pesquisar">
  <button type="submit">🔎</button>
</form>

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
  <?php foreach ($livros as $livro): ?>
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
  <?php endforeach ?>
</section>