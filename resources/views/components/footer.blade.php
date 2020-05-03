<footer class="bg-gray-800">
  <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
      <div class="grid grid-cols-2 gap-8 xl:col-span-2">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-600 uppercase">
              Blog
            </h4>
            <ul class="mt-4">
              <li>
                <a href="{{ route('blog.index') }}" class="text-base leading-6 text-gray-300 hover:text-white">
                  Articles
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Projects
                </a>
              </li>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-600 uppercase">
              Software
            </h4>
            <ul class="mt-4">
              <li>
                <a href="https://indesign.yiddishe-kop.com/" target="_blank"
                  class="text-base leading-6 text-gray-300 hover:text-white">
                  InDesign Scripts
                </a>
              </li>
              <li class="mt-4">
                <a href="/telescope" class="text-base leading-6 text-gray-300 hover:text-white">
                  Debug <small>[restricted]</small>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-600 uppercase">
              Company
            </h4>
            <ul class="mt-4">
              <li>
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  About
                </a>
              </li>
              <li class="mt-4">
                <a href="/#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="text-xs mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
      <div class="flex md:order-2">
        <p class="text-gray-300">Built with
          <a href="https://laravel.com/" class="text-white font-medium px-2" target="_blank" rel="noopener">
            <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" class="inline h-6">
          </a>
          ,
          <a href="https://github.com/alpinejs/alpine" class="text-white font-medium px-2" target="_blank"
            rel="noopener">
            <img src="https://pbs.twimg.com/profile_images/1216548453871951873/9xHO0vCF_400x400.jpg" alt="AlpineJS"
              class="inline h-6">
          </a>
          and
          <a href="https://tailwindcss.com/" class="text-white font-medium px-2" target="_blank" rel="noopener">
            <svg class="w-6 h-6 inline" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
              <title>Tailwind CSS</title>
              <path
                d="M13.5 11.1C15.3 3.9 19.8.3 27 .3c10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 27.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"
                transform="translate(5 16)" fill="url(#logoMarkGradient)" fill-rule="evenodd"></path>
              <defs>
                <linearGradient x1="0%" y1="0%" y2="100%" id="logoMarkGradient">
                  <stop stop-color="#2298BD"></stop>
                  <stop offset="1" stop-color="#0ED7B5"></stop>
                </linearGradient>
              </defs>
            </svg>
          </a>
        </p>
        <a href="https://github.com/Yiddishe-Kop"
          class="ml-3 pl-3 text-gray-400 hover:text-gray-300 border-gray-700 border-l-2" target="_blank" rel="noopener">
          <span class="sr-only">GitHub</span>
          <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <p class="mt-8 leading-6 text-gray-400 md:mt-0 md:order-1">
        &copy; {{ date('Y') }} by <a href="https://yiddishe-kop.com/" class="text-white font-medium underline"
          target="_blank" rel="noopener">Yehuda Neufeld</a>. All rights reserved.
      </p>
    </div>
  </div>
</footer>

{{-- AlpineJS --}}
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

@stack('footer')

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
  @csrf
</form>
</body>

</html>
