<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Intan & Taufik - Admin</title>
    <link type="image/x-icon"
          href="{{ asset('assets/img/favicon.ico') }}"
          rel="icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="dark:bg-gray-900"x-on:load.window="loading = false"
      x-data="{ loading: true }">
    <div class="cursor-loading fixed bottom-0 left-0 right-0 top-0 z-[100] flex h-full w-full items-center justify-center bg-gray-900/60"
         x-show="loading">
        <div role="status">
            <svg class="inline h-12 w-12 animate-spin fill-white text-gray-200 dark:text-gray-600"
                 aria-hidden="true"
                 viewBox="0 0 100 101"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                      fill="currentColor" />
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                      fill="currentFill" />
            </svg>
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <nav class="fixed top-0 z-[32] w-full border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <a class="ms-2 flex md:me-24"
                       href="/"
                       target="_blank">
                        <img class="me-3 block h-10 dark:hidden"
                             src="{{ asset('assets/img/logo-horizontal.png') }}"
                             alt="logo">
                        <img class="me-3 hidden h-10 dark:block"
                             src="{{ asset('assets/img/logo-horizontal-dark.png') }}"
                             alt="logo">
                    </a>
                </div>
                <div class="flex items-center"
                     id="right-pane">
                    <button class="rounded-lg p-2.5 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            id="theme-toggle"
                            type="button">
                        <svg class="hidden h-5 w-5"
                             id="theme-toggle-dark-icon"
                             aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor"
                             viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M11.7 2a10 10 0 1 0 9.8 13.3 1 1 0 0 0-1-1.3H20a8 8 0 0 1-7.6-10.6l.1-.4a1 1 0 0 0-.8-1Z"
                                  clip-rule="evenodd" />
                        </svg>
                        <svg class="hidden h-5 w-5"
                             id="theme-toggle-light-icon"
                             aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor"
                             viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                  d="M13 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0V3ZM6.3 5A1 1 0 0 0 5 6.2l1.4 1.5a1 1 0 0 0 1.5-1.5L6.3 5Zm12.8 1.3A1 1 0 0 0 17.7 5l-1.5 1.4a1 1 0 0 0 1.5 1.5L19 6.3ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-9 4a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H3Zm16 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2ZM7.8 17.7a1 1 0 1 0-1.5-1.5L5 17.7A1 1 0 1 0 6.3 19l1.5-1.4Zm9.9-1.5a1 1 0 0 0-1.5 1.5l1.5 1.4a1 1 0 0 0 1.4-1.4l-1.4-1.5ZM13 19a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="ms-3">
                        <div class="items-centers flex"
                             x-data="{ expanded: false }">
                            <button class="inline-flex items-center bg-white text-center text-sm font-medium text-gray-500 dark:bg-gray-800 dark:text-white"
                                    type="button"
                                    x-on:click="expanded = ! expanded"
                                    x-on:keydown.escape="expanded = false">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                     src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff&bold=true" />
                                <span class="hidden sm:mx-2 sm:block">
                                    Admin
                                </span>
                                <svg class="h-5 w-5 transition"
                                     aria-hidden="true"
                                     :class="expanded ? 'rotate-180' : ''"
                                     fill="currentColor"
                                     viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd">
                                    </path>
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <template x-teleport="nav">
                                <div class="min-w-80 w-fit-content absolute right-4 top-12 z-50 my-4 list-none divide-y divide-gray-100 rounded-xl bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                                     id="dropdown-user-menu"
                                     x-show="expanded"
                                     x-on:click.away="expanded = false"
                                     x-transition>
                                    <div class="px-4 py-3">
                                        <div class="flex items-center">
                                            <img class="h-11 w-11 rounded-full"
                                                 {{-- src="https://ui-avatars.com/api/?name={{ urlencode(Auth::User()->name) }}&background=0D8ABC&color=fff&bold=true"
                                                    alt="{{ Auth::User()->name }} avatar"  --}} />
                                            <div class="mx-2">
                                                <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                                                    <div class="inline-flex items-center">
                                                        {{-- {{ Auth::User()->name }} --}}

                                                        <div class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300"
                                                             id="tooltip-role"
                                                             role="tooltip">
                                                            {{-- {{ ucwords(Auth::User()->role) }} --}}
                                                            <div class="tooltip-arrow"
                                                                 data-popper-arrow>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="py-1 text-gray-700 dark:text-gray-300"
                                        aria-labelledby="dropdown-user-menu">
                                        <li>
                                            <a class="block px-4 py-2 text-sm hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                               href="#">Comments</a>
                                        </li>
                                    </ul>
                                    <ul class="pb-3 pt-1 text-gray-700 dark:text-gray-300"
                                        aria-labelledby="dropdown-user-menu">
                                        <li>
                                            <a class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:text-red-500 dark:hover:bg-gray-600"
                                               {{-- href="{{ route('auth.logout') }}" --}}>
                                                <svg class="mr-2 h-5 w-5 text-red-500"
                                                     aria-hidden="true"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill="none"
                                                     viewBox="0 0 24 24">
                                                    <path stroke="currentColor"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                                </svg>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="mt-16">
        @yield('content')
    </main>

    @yield('script')

    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>
</body>

</html>
