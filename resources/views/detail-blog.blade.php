<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Ahmad Shobirin" />
    <meta name="description" content="" />
    <meta name="keywords" content="blog, poem" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav id="header" class="fixed w-full z-10 top-0">
      <div
        id="progress"
        class="h-1 z-20 top-0"
        style="
          background: linear-gradient(
            to right,
            #4dc0b5 var(--scroll),
            transparent 0
          );
        "
      ></div>

      <div
        class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3"
      >
        <div class="pl-4">
          <a
            class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"
            href="#"
          >
            Ahmad Shobirin
          </a>
        </div>

        <div class="block lg:hidden pr-4">
          <button
            id="nav-toggle"
            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none"
          >
            <svg
              class="fill-current h-3 w-3"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>

        <div
          id="nav-content"
          class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20"
        >
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a
                class="inline-block py-2 px-4 text-gray-900 font-bold no-underline"
                href="#"
              >
                Blog
              </a>
            </li>
            <li class="mr-3">
              <a
                class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4"
                href="#"
              >
                Poem
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Container-->
    <div class="container w-full md:max-w-3xl mx-auto pt-20">
      <div
        class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal"
        style="font-family: Georgia, serif"
      >
        <!--Title-->
        <div class="font-sans">
          {{-- <span class="text-base md:text-sm text-teal-500 font-bold">&lt;</span>
          <a
            href="#"
            class="text-base md:text-sm text-teal-500 font-bold no-underline hover:underline"
          >
            BACK TO BLOG
          </a> --}}
          <h1
            class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl"
          >
            Welcome to Minimal Blog
          </h1>
          <p class="text-xs md:text-base font-normal text-gray-600">
            Published 19 February 2019
          </p>
        </div>

        <!--Post Content-->

        <!--Image Banner-->
        <div class="py-6">
          <img src="{{ URL::asset('image/sample-banner.jpg') }}" alt="Sample Banner" class="object-fill w-full">

          <p class="text-xs text-center text-gray-500 my-2">Picture bla bla bla ...</p>
        </div>

        <!--Lead Para-->
        <p class="py-6">
          👋 Welcome fellow
          <a
            class="text-teal-500 no-underline hover:underline"
            href="https://www.tailwindcss.com"
          >
            Tailwind CSS
          </a>
          and miminal monochrome blog fan. This starter template provides a
          starting point to create your own minimal monochrome blog using
          Tailwind CSS and vanilla Javascript.
        </p>

        <h1 class="py-2 font-sans">Heading 1</h1>
        <p class="py-6">
          The basic blog page layout is available and all using the default
          Tailwind CSS classes (although there are a few hardcoded style tags).
          If you are going to use this in your project, you will want to convert
          the classes into components.
        </p>

        <ol>
          <li class="py-3">
            Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero
            lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper
            venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo
            sit amet placerat in, interdum a ipsum. Morbi sit amet tellus
            scelerisque tortor semper posuere.
          </li>
          <li class="py-3">
            Morbi varius posuere blandit. Praesent gravida bibendum neque eget
            commodo. Duis auctor ornare mauris, eu accumsan odio viverra in.
            Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut
            odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus
            hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec
            felis.
          </li>
          <li class="py-3">
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris,
            tristique in risus ac, tristique rutrum velit. Mauris accumsan
            tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam
            ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit,
            elementum odio et, consequat tellus.
          </li>
        </ol>

        <blockquote
          class="border-l-4 border-teal-500 italic my-8 pl-8 md:pl-12"
        >
          Example of blockquote - Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet
          ligula.
        </blockquote>
			</pre>

        <!--/ Post Content-->
      </div>

      <!--Tags -->
      <div class="text-base md:text-sm text-gray-500 px-4 py-6">
        Tags:
        <a
          href="#"
          class="text-base md:text-sm text-teal-500 no-underline hover:underline"
        >
          Link
        </a>
        .
        <a
          href="#"
          class="text-base md:text-sm text-teal-500 no-underline hover:underline"
        >
          Link
        </a>
      </div>

      <!--Next & Prev Links-->
      <div class="font-sans flex justify-between content-center px-4 pb-12">
        <div class="text-left">
          <span class="text-xs md:text-sm font-normal text-gray-600"
            >&lt; Previous Post</span
          ><br />
          <p>
            <a
              href="#"
              class="break-normal text-base md:text-sm text-teal-500 font-bold no-underline hover:underline"
            >
              Blog title
            </a>
          </p>
        </div>
        <div class="text-right">
          <span class="text-xs md:text-sm font-normal text-gray-600">
            Next Post &gt;
          </span>
          <br />
          <p>
            <a
              href="#"
              class="break-normal text-base md:text-sm text-teal-500 font-bold no-underline hover:underline"
            >
              Blog title
            </a>
          </p>
        </div>
      </div>

      <!--/Next & Prev Links-->
    </div>
    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow">
      <div class="container max-w-4xl mx-auto flex py-8">
        <div class="w-full mx-auto flex flex-wrap">
          <div class="flex w-full md:w-1/2">
            <div class="px-8">
              <h3 class="font-bold text-gray-900">About</h3>
              <p class="py-4 text-gray-600 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse
                consectetur dapibus velit ut lacinia.
              </p>
            </div>
          </div>

          <div class="flex w-full md:w-1/2">
            <div class="px-8">
              <h3 class="font-bold text-gray-900">Social</h3>
              <ul class="list-reset items-center text-sm pt-3">
                <li>
                  <a
                    class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
                    href="#"
                  >
                    Add social link
                  </a>
                </li>
                <li>
                  <a
                    class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
                    href="#"
                  >
                    Add social link
                  </a>
                </li>
                <li>
                  <a
                    class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1"
                    href="#"
                  >
                    Add social link
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      /* Progress bar */
      // Source: https://alligator.io/js/progress-bar-javascript-css-variables/
      var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight',
        progress = document.querySelector('#progress'),
        scroll;
      var scrollpos = window.scrollY;
      var header = document.getElementById('header');
      var navcontent = document.getElementById('nav-content');

      document.addEventListener('scroll', function () {
        /* Refresh scroll % width */
        scroll = ((h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight)) * 100;
        progress.style.setProperty('--scroll', scroll + '%');

        /* Apply classes for slide in bar */
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add('bg-white');
          header.classList.add('shadow');
          navcontent.classList.remove('bg-gray-100');
          navcontent.classList.add('bg-white');
        } else {
          header.classList.remove('bg-white');
          header.classList.remove('shadow');
          navcontent.classList.remove('bg-white');
          navcontent.classList.add('bg-gray-100');
        }
      });

      // Javascript to toggle the menu
      document.getElementById('nav-toggle').onclick = function () {
        document.getElementById('nav-content').classList.toggle('hidden');
      };
    </script>
  </body>
</html>