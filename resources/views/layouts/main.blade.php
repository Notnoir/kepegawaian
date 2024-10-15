<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  @vite('resources/css/app.css')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <!-- This is an example component -->
<div class="flex flex-row h-full relative">
  <!-- Sidebar -->
      <nav class="bg-gray-900 w-20  justify-between flex flex-col ">
        <div class="mt-10 mb-10">
          <a href="#">
            <img
              src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
              class="rounded-full w-10 h-10 mb-3 mx-auto"
            />
            {{-- <span class="text-xs ml-1 text-white">{{ auth()->user()->level }}</span> --}}
          </a>
          <div class="mt-10">
            <ul>
              <li class="mb-6">
                <a href="/">
                  <span>
                    <i class="fa-solid fa-house h-5 w-5 mx-8 text-gray-300 hover:text-green-500"></i>
                  </span>
                </a>
              </li>
              <li class="mb-6">
                <a href="/karyawan">
                  <span>
                    <i class="fa-solid fa-table h-5 w-5 mx-8 text-gray-300 hover:text-green-500"></i>
                  </span>
                </a>
              </li>
              <li class="mb-6">
                <a href="/golongan">
                  <span>
                    <i class="fa-solid fa-circle-info h-5 w-5 mx-8 text-gray-300 hover:text-green-500"></i>
                  </span>
                </a>
              </li>
              <li class="mb-6">
                <a href="/detail">
                  <span>
                    <i class="fa-solid fa-memo-circle-info h-5 w-5 mx-8 text-gray-300 hover:text-green-500"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="mb-4">
          <a href="{{ route('logout') }}">
            <span>
              <svg
                class="fill-current h-5 w-5 text-gray-300 mx-auto hover:text-red-500"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M13 4.00894C13.0002 3.45665 12.5527 3.00876 12.0004 3.00854C11.4481 3.00833 11.0002 3.45587 11 4.00815L10.9968 12.0116C10.9966 12.5639 11.4442 13.0118 11.9965 13.012C12.5487 13.0122 12.9966 12.5647 12.9968 12.0124L13 4.00894Z"
                  fill="currentColor"
                />
                <path
                  d="M4 12.9917C4 10.7826 4.89541 8.7826 6.34308 7.33488L7.7573 8.7491C6.67155 9.83488 6 11.3349 6 12.9917C6 16.3054 8.68629 18.9917 12 18.9917C15.3137 18.9917 18 16.3054 18 12.9917C18 11.3348 17.3284 9.83482 16.2426 8.74903L17.6568 7.33481C19.1046 8.78253 20 10.7825 20 12.9917C20 17.41 16.4183 20.9917 12 20.9917C7.58172 20.9917 4 17.41 4 12.9917Z"
                  fill="currentColor"
                />
              </svg>
            </span>
          </a>
        </div>
      </nav>
      <div class="px-16 py-4 text-gray-700 bg-gray-200 h-screen w-screen">
        @yield('content')
      </div>
</div>
  
@include('sweetalert::alert')
</body>
</html>