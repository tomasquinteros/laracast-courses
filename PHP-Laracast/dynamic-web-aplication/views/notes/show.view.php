<?php

    require base_path('views/partials/head.php') ?>
<?php
    require base_path('views/partials/nav.php') ?>
<?php
    require base_path('views/partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 space-y-6">
      <a href="/notes" class="text-gray-600 decoration-solid underline">Back to all notes...</a>
      <h1 class="text-2xl font-bold"><?= htmlspecialchars($note['body']) ?></h1>
      <button form="notes-delete" type="submit" class="rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-red-900 shadow-sm
      hover:bg-red-500
      focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Delete
      </button>
      <a href="/note/edit?id=<?= $note['id'] ?>"
         class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline
              focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
        Edit
      </a>


      <form hidden="hidden" id="notes-delete" method="post" action="/notes">
        <label><input id="_method" name="_method" type="text" value="DELETE"/></label>
        <label><input id="id" name="id" type="text" value="<?= $note['id'] ?>"/></label>
      </form>
    </div>
  </main>
<?php
    require base_path('views/partials/footer.php') ?>