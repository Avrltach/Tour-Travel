<nav id="navbar" class="fixed top-0 left-0 w-full z-50 bg-transparent transition-colors duration-300">
  <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-between space-x-8 w-full">
        <div class="shrink-0 flex items-center space-x-2">
          <a href="#" class="flex items-center space-x-2">
            <img class="block w-auto h-8 dark:hidden" src="{{asset('images/cakrawala.png') }}" alt="Cakrawala Logo">
            <span class="text-lg font-semibold text-gray-200 dark:text-white">Cakrawala</span>
          </a>
        </div>
        <ul class="hidden lg:flex items-center gap-6 md:gap-8 py-3"> 
          <li><a href="#" class="flex text-sm font-medium text-gray-200 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Home</a></li>
          <li><a href="#" class="flex text-sm font-medium text-gray-200 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">About Us</a></li>
          <li><a href="#" class="flex text-sm font-medium text-gray-200 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Package</a></li>
          <li><a href="#" class="text-sm font-medium text-gray-200 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Gallery</a></li>
          <li><a href="#" class="text-sm font-medium text-gray-200 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Contact</a></li>
        </ul>
      </div>
      <div class="flex items-center lg:space-x-2">
        <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1" aria-controls="ecommerce-navbar-menu-1" aria-expanded="false" class="inline-flex lg:hidden items-center justify-center hover:bg-gray-100 rounded-md dark:hover:bg-gray-700 p-2 text-gray-200 dark:text-white">
          <span class="sr-only">Open Menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
          </svg>                
        </button>
      </div>
    </div>

    <div id="ecommerce-navbar-menu-1" class="bg-gray-50 dark:bg-gray-700 dark:border-gray-600 border border-gray-200 rounded-lg py-3 hidden px-4 mt-4">
      <ul class="text-gray-200 dark:text-white text-sm font-medium dark:text-white space-y-3">
        <li><a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Home</a></li>
        <li><a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">About Us</a></li>
        <li><a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Package</a></li>
        <li><a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Gallery</a></li>
        <li><a href="#" class="hover:text-primary-700 dark:hover:text-primary-500">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<script>
  window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    const scrollY = window.scrollY;

    if (scrollY > 50) {
      // Scroll > 50px → bg #1E2129 + shadow
      navbar.style.backgroundColor = '#1E2129';
      navbar.classList.add('shadow-md');
    } else {
      // Scroll < 50px → transparan
      navbar.style.backgroundColor = 'transparent';
      navbar.classList.remove('shadow-md');
    }
  });
</script>
