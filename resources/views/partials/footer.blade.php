<footer class="bg-white dark:bg-gray-900 mt-32">
    <div class="mx-auto w-full max-w-screen-xl">
      <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Navigation</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="{{ url('/') }}#jumbotron" class="text-black hover:underline">Home</a>
                </li>
                <li class="mb-4">
                    <a href="{{ url('/') }}#product-content" class="text-black hover:underline">Product</a>
                </li>
                <li class="mb-4">
                    <a href="{{ url('/checkout') }}" class="text-black hover:underline">Checkout</a>
                </li>
                <li class="mb-4">
                    <a href="{{ url('/') }}#contact-us" class="text-black hover:underline">Contact Us</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class="text-black hover:underline">Email</a>
                </li>
                <li class="mb-4">
                    <a href="https://api.whatsapp.com/send?phone=6285220914299&text=Hallo%2C%20saya%20ingin%20mengetahui%20layanan%20anda%2C%20bisa%20tolong%20dijelaskan%20lebih%20detail%3F" target="_blank" class="text-black hover:underline">Whatsapp</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-black hover:underline">Facebook</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="text-black hover:underline">Instagram</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a  class="text-black no-underline hover:underline">Privacy Policy</a>
                </li>
                <li class="mb-4">
                    <a  class="text-black no-underline hover:underline">Licensing</a>
                </li>
                <li class="mb-4">
                    <a  class="text-black no-underline hover:underline">Terms &amp; Conditions</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Available</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a class="text-black no-underline hover:underline">Shopee</a>
                </li>
                <li class="mb-4">
                    <a class="text-black no-underline hover:underline">Tokopedia</a>
                </li>
                <li class="mb-4">
                    <a class="text-black no-underline hover:underline">Blibli</a>
                </li>
                <li class="mb-4">
                    <a class="text-black no-underline hover:underline">Lazada</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a href="{{ url('/') }}" class="text-red-950 no-underline">Sagita</a>. All Rights Reserved.
        </span>
      </div>
    </div>
</footer>
