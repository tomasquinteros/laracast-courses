<?php

    require 'partials/head.php' ?>
<?php
    require 'partials/nav.php' ?>
<?php
    require 'partials/banner.php' ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php
            foreach ($notes as $note) : ?>
              <li>
                <a href="/note?id=<?= $note['id'] ?>"
                   class="text-blue-500 text-decoration decoration-solid">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
              </li>
            <?php
            endforeach; ?>
      <a href="/notes-create"
         class=" inline-block mt-10 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500
        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Create new note
      </a>
    </div>

  </main>
<?php
    require 'partials/footer.php' ?>