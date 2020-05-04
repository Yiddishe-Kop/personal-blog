<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog | Yiddishe Kop</title>

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


  @stack('head')
</head>

<body>
  <div class="bar w-full h-1 bg-brand"></div>
  <div class="min-h-screen bg-white flex flex-col">
    <nav class="bg-white border-b border-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <x-ui.logo class="flex-shrink-0 flex items-center" />
          <div class="sm:-my-px sm:ml-6 sm:flex items-center">
            <a href="/"
              class="ml-8 inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-900 focus:outline-none  transition duration-150 ease-in-out">
              Articles
            </a>
            <a href="#"
              class="ml-8 inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-700  focus:outline-none focus:text-gray-700  transition duration-150 ease-in-out">
              Projects
            </a>
            <a href="#"
              class="ml-8 inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-500 hover:text-gray-700  focus:outline-none focus:text-gray-700  transition duration-150 ease-in-out">
              Newsletter
            </a>
            <x-ui.avatar class="ml-4" />
            <button class="ml-6 text-gray-400 hover:text-gray-800">
              <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                stroke="currentColor" viewBox="0 0 24 24">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>

    <div class="py-10 bg-cool-gray-200 flex-1">

      @yield('content')

    </div>
  </div>
  <x-footer />
