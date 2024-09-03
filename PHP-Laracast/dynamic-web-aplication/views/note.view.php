<?php

    require 'partials/head.php' ?>
<?php
    require 'partials/nav.php' ?>
<?php
    require 'partials/banner.php' ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 space-y-6">
      <a href="/notes" class="text-gray-600 decoration-solid underline">Back to all notes...</a>
      <h1 class="text-2xl font-bold"><?= htmlspecialchars($note['body']) ?></h1>
    </div>
  </main>
<?php
    require 'partials/footer.php' ?>