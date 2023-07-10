
<nav class="bg-transparent px-48 pt-4 border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
  <a href="{{ url('/') }}" class="flex items-center  no-underline text-rose-800">
      <i class="fa-solid fa-shop fa-2xl"></i>
      <span class="self-center text-2xl ml-2 font-semibold whitespace-nowrap dark:text-white">Sagita</span>
  </a>
  
  <div class="flex items-center md:order-2">
            <a href="{{ route('login') }}" class="inline-flex mr-7 justify-center no-underline items-center py-2 px-4 c text-base font-medium text-center text-white rounded-lg bg-lime-600 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                {{ __('Login') }}
            </a>
            <a href="{{ route('register') }}" class="inline-flex justify-center no-underline items-center py-2 px-4 c text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                {{ __('Register') }}
            </a>
  </div>
</nav>
