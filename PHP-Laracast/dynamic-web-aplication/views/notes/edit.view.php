<?php

    require base_path('views/partials/head.php') ?>
<?php
    require base_path('views/partials/nav.php') ?>
<?php
    require base_path('views/partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <form method="POST" action="/notes">
        <label><input hidden="hidden" type="text" name="_method" value="PATCH"></label>
        <label><input hidden="hidden" type="text" name="id" value="<?= $note['id'] ?>"></label>
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="col-span-full">
              <label for="body" class="block text-md font-medium leading-6 text-gray-900">Note</label>
              <div class="mt-2">
                  <textarea id="body" name="body" rows="3"
                            class="block p-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
                            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="Write a few sentences about yourself."
                  ><?= $_POST['body'] ?? $note['body'] ?></textarea>
                  <?php
                      if (isset($errors)) : ?>
                        <span class="text-red-500 text-xs"><?= $errors['body'] ?></span>
                      <?php
                      endif; ?>
              </div>
            </div>
          </div>
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              Update
            </button>
            <button form="notes-delete" type="submit" class="rounded-md bg-red-400 px-3 py-2 text-sm font-semibold text-red-900 shadow-sm
             hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
             focus-visible:outline-indigo-600">
              Delete
            </button>

          </div>
      </form>
    </div>
    <form hidden="hidden" id="notes-delete" method="post" action="/notes">
      <label><input id="_method" name="_method" type="text" value="DELETE"/></label>
      <label><input id="id" name="id" type="text" value="<?= $note['id'] ?>"/></label>

    </form>
  </main>
<?php
    require base_path('views/partials/footer.php') ?>