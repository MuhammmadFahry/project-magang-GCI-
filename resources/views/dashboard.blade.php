<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230526/pngtree-an-old-bookcase-in-a-library-image_2642908.jpg');
      background-size: cover;
      background-attachment: fixed;
    }
    .content-bg {
      background: rgba(255, 255, 255, 0.5); /* White background with 50% opacity */
      backdrop-filter: blur(10px); /* Blur effect */
    }
    .nav-link:hover {
      background: rgba(255, 255, 255, 0.1);
    }
    .nav-link.active {
      background: rgba(255, 255, 255, 0.2);
    }
  </style>
</head>
<body>
  <nav class="bg-gray-800 bg-opacity-90 shadow-lg">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <img class="h-8 w-auto" src="/foto/wungpuyuh.png" alt="Library Logo">
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <a href="#" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
              <a href="#library" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">Library</a>
              <a href="#team" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">Team</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
          <!-- Login button -->
          <div class="ml-3 relative">
            <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
          </div>
        </div>  
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <a href="#" class="block nav-link rounded-md px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
        <a href="#library" class="block nav-link rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white">Library</a>
        <a href="#team" class="block nav-link rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white">Team</a>
        <a href="{{ route('login') }}" class="block nav-link rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:text-white">Login</a>
      </div>
    </div>
  </nav>

  <div class="container mx-auto px-4 py-6">
    <!-- Home Content -->
    <div id="home" class="content-bg p-6 rounded-lg shadow-lg">
      <h1 class="text-3xl font-bold text-gray-800">Welcome to Perpustakaan Garuda</h1>
      <p class="text-gray-700 mt-4">Perpustakaan Garuda adalah sumber pengetahuan yang luas dengan koleksi buku yang beragam dan fasilitas modern untuk semua pengunjung. Kami berdedikasi untuk menyediakan akses informasi dan pengetahuan untuk semua kalangan.</p>
    </div>
    
    <!-- Library Content -->
    <div id="library" class="mt-6">
      <h1 class="text-3xl font-bold text-white">Library</h1>
      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="content-bg p-6 rounded-lg shadow-lg">
          <h2 class="text-xl font-bold mb-2">Buku Terpopuler</h2>
          <ul class="text-gray-700 list-disc pl-5">
            <li>Book Title 1</li>
            <li>Book Title 2</li>
            <li>Book Title 3</li>
          </ul>
        </div>
        <div class="content-bg p-6 rounded-lg shadow-lg">
          <h2 class="text-xl font-bold mb-2">Buku Baru</h2>
          <ul class="text-gray-700 list-disc pl-5">
            <li>Book Title 4</li>
            <li>Book Title 5</li>
            <li>Book Title 6</li>
          </ul>
        </div>
        <div class="content-bg p-6 rounded-lg shadow-lg">
          <h2 class="text-xl font-bold mb-2">Event Mendatang</h2>
          <p class="text-gray-700">Buku Baru Akan Datang: 25 Agustus 2024</p>
        </div>
      </div>
      <div class="mt-6 content-bg p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-2">Daftar Semua Buku</h2>
        <ul class="text-gray-700 list-disc pl-5">
          <li>Book Title 1</li>
          <li>Book Title 2</li>
          <li>Book Title 3</li>
          <li>Book Title 4</li>
          <li>Book Title 5</li>
          <li>Book Title 6</li>
          <li>Book Title 7</li>
          <li>Book Title 8</li>
          <li>Book Title 9</li>
        </ul>
      </div>
    </div>

    <!-- Team Content -->
    <div id="team" class="mt-6 ">
      <h1 class="text-3xl font-bold text-white">Team</h1>
      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="content-bg p-6 rounded-lg shadow-lg">
          <img src="https://www.example.com/librarian1.jpg" alt="Librarian 1" class="w-full h-48 object-cover rounded-lg">
          <h2 class="text-xl font-bold mt-2">Librarian 1</h2>
          <p class="text-gray-700">Deskripsi tentang pustakawan 1.</p>
        </div>
        <div class="content-bg p-6 rounded-lg shadow-lg">
          <img src="https://www.example.com/librarian2.jpg" alt="Librarian 2" class="w-full h-48 object-cover rounded-lg">
          <h2 class="text-xl font-bold mt-2">Librarian 2</h2>
          <p class="text-gray-700">Deskripsi tentang pustakawan 2.</p>
        </div>
        <div class="content-bg p-6 rounded-lg shadow-lg">
          <img src="https://www.example.com/librarian3.jpg" alt="Librarian 3" class="w-full h-48 object-cover rounded-lg">
          <h2 class="text-xl font-bold mt-2">Librarian 3</h2>
          <p class="text-gray-700">Deskripsi tentang pustakawan 3.</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const homeLink = document.querySelector('a[href="#home"]');
      const libraryLink = document.querySelector('a[href="#library"]');
      const teamLink = document.querySelector('a[href="#team"]');
      const homeContent = document.getElementById('home');
      const libraryContent = document.getElementById('library');
      const teamContent = document.getElementById('team');

      homeLink.addEventListener('click', function() {
        homeContent.classList.remove('hidden');
        libraryContent.classList.add('hidden');
        teamContent.classList.add('hidden');
      });

      libraryLink.addEventListener('click', function() {
        homeContent.classList.add('hidden');
        libraryContent.classList.remove('hidden');
        teamContent.classList.add('hidden');
      });

      teamLink.addEventListener('click', function() {
        homeContent.classList.add('hidden');
        libraryContent.classList.add('hidden');
        teamContent.classList.remove('hidden');
      });

      const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
      const mobileMenu = document.getElementById('mobile-menu');

      mobileMenuButton.addEventListener('click', function() {
        const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
        mobileMenuButton.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('hidden');
      });
    });
  </script>
</body>
</html>
