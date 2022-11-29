<?php $BASEURL = 'http://localhost/php-mvc-wpu/public'; ?>
<nav class="bg-neutral-800">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between">

      <div class="flex space-x-4 text-white/80">
        <!-- logo -->
        <div>
          <a href="<?= $BASEURL ?>" class="flex items-center py-5 px-2 text-white text-[18px] font-normal">
            <span class="font-bold">Developer</span>
          </a>
        </div>

        <!-- primary nav -->
        <div class="hidden md:flex items-center space-x-1">
          <a href="<?= $BASEURL ?>/about/index" class="py-5 px-3 hover:text-white">About</a>
          <a href="<?= $BASEURL ?>/talents/index" class="py-5 px-3 hover:text-white">Talents</a>
        </div>
      </div>

      <!-- secondary nav -->
      <div class="hidden md:flex items-center space-x-4">
        <a href="<?= $BASEURL ?>/auth/login" class="py-2 px-6 hover:bg-indigo-800 text-white rounded transition duration-300">Login</a>
        <a href="<?= $BASEURL ?>/auth/register" class="py-2 px-6 bg-neutral-700 hover:bg-indigo-800 text-white/80 hover:text-white rounded transition duration-300">Signup</a>
      </div>

      <!-- mobile button goes here -->
      <div class="md:hidden flex items-center">
        <button class="mobile-menu-button text-white">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- mobile menu -->
  <div class="mobile-menu hidden md:hidden py-4 px-4 flex-col gap-4">
    <a href="<?= $BASEURL ?>/about/index" class="block py-2 px-4 text-sm hover:bg-gray-200">About</a>
    <a href="<?= $BASEURL ?>/talents/index" class="block py-2 px-4 text-sm hover:bg-gray-200">Talents</a>

    <div class="flex justify-between gap-4">
      <a href="<?= $BASEURL ?>/auth/login" class="flex-1 py-2 bg-neutral-700 hover:bg-indigo-800 text-white/80 hover:text-white rounded transition duration-300 text-center">Login</a>
      <a href="<?= $BASEURL ?>/auth/register" class="flex-1 py-2 bg-neutral-700 hover:bg-indigo-800 text-white/80 hover:text-white rounded transition duration-300 text-center">Signup</a>
    </div>
  </div>
</nav>