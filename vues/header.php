<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b-2 border-marron drop-shadow-lg">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="./img/logo.png" class="h-20" alt="Arcadia Logo">
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="hidden md:inline-block lg:inline-block text-vertclair focus:ring-4 
      focus:outline-none focus:ring-blue-300 font-light rounded-lg text-sm px-4 py-2 text-center ">
      <img src="./img/connexion.png" class="h-10 items-center">Connexion</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 
      w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 
      focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 
      dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 font-light border border-gray-100 rounded-lg bg-gray-50
      md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
      <li class="block w-40 h-10 py-2 pl-3 pr-4 flex items-center justify-center text-sm md:text-white
         md:bg-jauneor rounded-lg md:hover:text-marron md:p-3">
        <a href="index.php">Accueil</a>
      </li>
      <li class="block w-40 h-10 py-2 pl-3 pr-4 flex items-center justify-center text-sm md:text-white
         md:bg-jauneor rounded-lg md:hover:text-marron md:p-3">
        <a href="#">Animaux & habitats</a>
      </li>
      <li class="block w-40 h-10 py-2 pl-3 pr-4 flex items-center justify-center text-sm md:text-white
         md:bg-jauneor rounded-lg md:hover:text-marron md:p-3">
        <a href="#">Services</a>
      </li>
      <li class="block w-40 h-10 py-2 pl-3 pr-4 flex items-center justify-center text-sm md:text-white
         md:bg-jauneor rounded-lg md:hover:text-marron md:p-3">
        <a href="#">Contact</a>
      </li>
      <li>
        <a href="#" class="md:hidden block md:py-0 py-2 md:px-0 px-3 md:text-white rounded md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Connexion</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
