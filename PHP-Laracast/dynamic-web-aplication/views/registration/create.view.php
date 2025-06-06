<?php

    require base_path('views/partials/head.php') ?>
<?php
    require base_path('views/partials/nav.php') ?>
<?php
    require base_path('views/partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="/register" method="POST">
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email"
                       class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
                       placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                       value="<?= $_POST['email'] ?? '' ?>">
                  <?php
                      if (isset($errors)) : ?>
                        <span class="text-red-500 text-xs"><?= $errors['email'] ?></span>
                      <?php
                      endif; ?>
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="password"
                       class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300
                       placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                       value="<?= $_POST['password'] ?? '' ?>"
                >

                  <?php
                      if (isset($errors)) : ?>
                        <span class="text-red-500 text-xs"><?= $errors['password'] ?></span>
                      <?php
                      endif; ?>
              </div>
            </div>

            <div>
              <button type="submit"
                      class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Create account
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </main>
<?php
    require base_path('views/partials/footer.php') ?>