<!-- START: HEADER -->
<header class="{{ \Route::current()->getName()== 'index' ? 'absolute' :''}} w-full z-50 px-4">
    <div class="container mx-auto py-5">
        <div class="flex flex-stretch items-center">
            <div class="w-56 items-center flex">
                <a href="{{route('index')}}">
                    <img class="img-logo" src="{{url('/zhafirahcatering-frontend/images/content/ZCLOGO.svg')}}"
                        alt="Zhafirah Catering | Fulfill your momment with beautiful place" />
                </a>
            </div>
            <div class="w-full"></div>
            <div class="w-auto">
                <ul class="fixed bg-white inset-0 flex flex-col invisible items-center justify-center opacity-0 md:visible md:flex-row md:bg-transparent md:relative md:opacity-100 md:flex md:items-center"
                    id="menu">
                    <li class="mx-3 py-6 md:py-0">
                        <a href="{{route('about')}}"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">About</a>
                    </li>
                    <li class="mx-3 py-6 md:py-0">
                        <a href="#browse-the-room"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Catalog</a>
                    </li>
                    <li class="mx-3 py-6 md:py-0">
                        <a href="#review"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Review</a>
                    </li>
                    <li class="mx-3 py-6 md:py-0">
                        <a href="#contact"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Contact</a>
                    </li>

                    </li>
                    <li class="mx-3 py-6 md:py-0">
                        <a href="{{ route('dashboard.my-transaction.index') }}"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Transaksiku</a>
                    </li>
                    @auth
                    @if (Auth::user()->roles == 'ADMIN')
                    <li class="mx-3 py-6 md:py-0">
                        <a href="{{route('dashboard.index')}}"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Dashboard</a>
                    </li>
                    @endif

                    <li class="mx-3 py-6 md:py-0">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <Button href="{{route('logout')}}"
                                class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Logout</Button>

                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="mx-3 py-6 md:py-0">
                        <a href="{{route('login')}}"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Login</a>
                    </li>
                    <li class="mx-3 py-6 md:py-0">
                        <a href="{{route('register')}}"
                            class="text-black {{ \Route::current()->getName()== 'index' ? 'md:text-white' : 'md:text-blue'}} hover:underline">Register</a>
                    </li>

                    @endguest

                </ul>
            </div>
            <div class="w-auto">
                <ul class="items-center flex">
                    <li class="ml-6 block md:hidden">
                        <button id="menu-toggler"
                            class="relative flex z-50 items-center justify-center w-8 h-8 text-white md:text-white focus:outline-none">
                            <svg class="fill-current" width="18" height="17" viewBox="0 0 18 17">
                                <path
                                    d="M15.9773 0.461304H1.04219C0.466585 0.461304 0 0.790267 0 1.19609C0 1.60192 0.466668 1.93088 1.04219 1.93088H15.9773C16.5529 1.93088 17.0195 1.60192 17.0195 1.19609C17.0195 0.790208 16.5529 0.461304 15.9773 0.461304Z" />
                                <path
                                    d="M15.9773 7.68802H1.04219C0.466585 7.68802 0 8.01698 0 8.42281C0 8.82864 0.466668 9.1576 1.04219 9.1576H15.9773C16.5529 9.1576 17.0195 8.82864 17.0195 8.42281C17.0195 8.01692 16.5529 7.68802 15.9773 7.68802Z" />
                                <path
                                    d="M15.9773 14.9147H1.04219C0.466585 14.9147 0 15.2437 0 15.6495C0 16.0553 0.466668 16.3843 1.04219 16.3843H15.9773C16.5529 16.3843 17.0195 16.0553 17.0195 15.6495C17.0195 15.2436 16.5529 14.9147 15.9773 14.9147Z" />
                            </svg>
                        </button>
                    </li>
                    <li class="ml-6">
                        <a id="header-cart"
                            class="flex items-center justify-center w-8 h-8 text-white {{ \Route::current()->getName()== 'index' ? 'md:text-blue' :''}}"
                            href="{{route('category')}}">
                            <svg class="fill-current mr-3" width="26" height="24" viewBox="0 0 26 24"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" x="0px" y="0px">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon fill="#FFFFFF"
                                        points="22 14 20.5 14 20.5 1.5 3.5 1.5 3.5 22.5 16.5692139 22.5 17.9655629 23.174798 17.9697266 24 2 24 2 0 22 0" />
                                    <rect fill="#FFFFFF" x="6" y="5" width="12" height="1.5" />
                                    <rect fill="#FFFFFF" x="6" y="10" width="7" height="1.5" />
                                    <rect fill="#FFFFFF" x="6" y="15" width="5" height="1.5" />
                                    <path
                                        d="M18,24 C14.6862915,24 12,21.3137085 12,18 C12,14.6862915 14.6862915,12 18,12 C21.3137085,12 24,14.6862915 24,18 C24,21.3137085 21.3137085,24 18,24 Z M18,22.56 C20.5184185,22.56 22.56,20.5184185 22.56,18 C22.56,15.4815815 20.5184185,13.44 18,13.44 C15.4815815,13.44 13.44,15.4815815 13.44,18 C13.44,20.5184185 15.4815815,22.56 18,22.56 Z"
                                        fill="#FFFFFF" />
                                    <polygon fill="#FFFFFF" fill-rule="nonzero"
                                        points="20.6675142 15.6464466 21.7281744 16.7071068 17.1319803 21.3033009 13.9499998 18.1213203 15.01066 17.0606602 17.1319803 19.1819805" />
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- END: HEADER -->
