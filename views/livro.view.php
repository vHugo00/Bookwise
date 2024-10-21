<div class="bg-slate-900 border-2 rounded border-slate-700 p-2 mt-8">
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