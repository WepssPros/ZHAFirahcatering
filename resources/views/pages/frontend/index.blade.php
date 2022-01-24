@extends('layouts.frontend')

@section('content')

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<!-- START: HERO -->
    <section class="flex items-center hero">
      <div
        class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center flex flex-col justify-center hero-caption"
      >
        <h1 data-aos="fade-up" data-aos-duration="1500" class="text-blue sm:text-blue text-3xl md:text-5xl  leading-tight font-semibold ">
          Selamat Datang di <br class="" />Zhafirah Catering
        </h1>
        <h2 data-aos="fade-down" data-aos-duration="1500" class="px-8 text-base sm:text-blue md:px-0 md:text-lg my-6 tracking-wide text-blue">
          Kami menyediakan berbagai menu catering berkelas yang
          <br class="hidden lg:block" />membuat moment bahagiamu terasa lebih indah
        </h2>
        <div>
          <a data-aos="zoom-in" data-aos-duration="2000"
            href="#browse-the-room"
            class="bg-blue-light text-white hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200"
            >Explore Now</a
          >
        </div>
      </div>
      <div class="w-full inset-0 md:relative md:w-1/2">
        <div class="relative hero-image">
          <div class="overlay inset-0 bg-black opacity-35 z-10"></div>
          <div class="overlay right-0 bottom-0 md:inset-0" >
            <button data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500"
              class="video hero-cta focus:outline-none z-30 modal-trigger "
              data-content='<div class="w-screen pb-56 md:w-88 md:pb-56 relative z-50">
              <div class="absolute w-full h-full  ">
                <iframe
                  width="100%"
                  height="100%"
                  src="https://www.youtube.com/embed/T3FMdJb31fc?start=1"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>
              </div>
            </div>'
            ></button>
          </div>
          <img
            src="/zhafirahcatering-frontend/images/content/section1.png"
            alt="hero 1"
            class="absolute inset-0 md:relative w-full h-full object-cover object-center rounded"
          />
        </div>
      </div>
    </section>
    <!-- END: HERO -->

    <!-- START: BROWSE THE ROOM -->
    <section class="flex bg-gray-100 py-16 px-4" id="browse-the-room">
      <div class="container mx-auto">
        <div data-aos="slide-up" data-aos-duration="1000" class="flex flex-start mb-4">
          <h3 class="text-blue text-2xl capitalize font-semibold">
            Kategori Apa Saja <br class="" />yang akan kami layani untuk Anda
          </h3>
        </div>
        <div data-aos="slide-left" data-aos-duration="1500" class="text-left mb-10 -mt-5">
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
        </div>
        <div class="grid grid-rows-2 grid-cols-9 gap-4">
          <div
            class="relative col-span-9 row-span-1 md:col-span-4 card"
            style="height: 180px"
          >
            <div data-aos="fade-right" data-aos-duration="1000" class="card-shadow rounded-xl">
              <img
                src="/zhafirahcatering-frontend/images/content/Frame 3.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div data-aos="zoom-in" data-aos-duration="1500"
              class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
            >
              <h5  class="text-lg font-semibold text-white ">Wedding</h5>
              <span class="text-white">18.309 items</span>
            </div>
            <a href="{{route('category')}}" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div data-aos="fade-up" data-aos-duration="1000"
            class="relative col-span-9 row-span-1 md:col-span-2 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="/zhafirahcatering-frontend/images/content/syukuran.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div data-aos="zoom-in" data-aos-duration="1500"
              class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
            >
              <h5 class="text-lg font-semibold text-white ">Aqiqah / Syukuran</h5>
              <span class="text-white">77.392 items</span>
            </div>
            <a href="{{route('category')}}" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div data-aos="fade-left" data-aos-duration="1000"
            class="relative col-span-9 row-span-1 md:col-span-3 md:row-span-2 card"
          >
            <div class="card-shadow rounded-xl">
              <img
                src="/zhafirahcatering-frontend/images/content/Lamaran.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div data-aos="zoom-in" data-aos-duration="1500"
              class="overlay right-0 left-0 top-0 bottom-0 md:bottom-auto flex justify-center md:items-center flex-col pl-48 md:pl-0 pt-0 md:pt-12"
            >
              <h5 class="text-lg font-semibold text-white">Lamaran</h5>
              <span class="text-white">22.094 items</span>
            </div>
            <a href="{{route('category')}}" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
          <div  data-aos="fade-left" data-aos-duration="1000" class="relative col-span-9 row-span-1 md:col-span-4 card">
            <div class="card-shadow rounded-xl">
              <img
                src="/zhafirahcatering-frontend/images/content/Frame 5.png"
                alt=""
                class="w-full h-full object-cover object-center overlay overflow-hidden rounded-xl"
              />
            </div>
            <div data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300"
              class="overlay left-0 top-0 bottom-0 flex justify-center flex-col pl-48 md:pl-72"
            >
              <h5 class="text-lg font-semibold text-white">Others</h5>
              <span class="text-white">837 items</span>
            </div>
            <a href="{{route('category')}}" class="stretched-link">
              <!-- fake children -->
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END: BROWSE THE ROOM -->

    <!-- START: JUST ARRIVED -->
    <section class="flex flex-col py-16">
      <div class="container mx-auto mb-4" >
        <div class="flex justify-center text-center mb-4">
          <h3 class="text-2xl text-blue capitalize font-semibold" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
            Product Baru  <br class="" />Musim  ini untukmu
          </h3>
        </div>
        <div data-aos="slide-left" data-aos-duration="1500" class="text-center mb-10 -mt-5">
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
            <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
        </div>
      </div>
      <div class="overflow-x-hidden px-4" id="carousel">
        <div class="container mx-auto"></div>
        <!-- <div class="overflow-hidden z-10"> -->
        <div class="flex -mx-4 flex-row relative">
          <!-- START: JUST ARRIVED ROW 1 -->
            @foreach ($products as $product)
            <div data-aos="slide-up" data-aos-delay="300" class="px-4 relative card group">
                <div
                  class="rounded-xl overflow-hidden card-shadow relative"
                  style="width: 287px; height: 386px"
                >
                  <div
                    class="absolute opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center w-full h-full bg-black bg-opacity-35"
                  >
                    <div
                      class="bg-white text-black rounded-full w-16 h-16 flex items-center justify-center"
                    >
                      <svg
                        class="fill-current"
                        width="43"
                        height="24"
                        viewBox="0 0 43 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z"
                        />
                        <path
                          d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z"
                        />
                      </svg>
                    </div>
                  </div>
                  <img
                    src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                    alt=""
                    class="w-full h-full object-cover object-center"
                  />
                </div>
                <h5 class="text-lg font-semibold text-blue mt-4">{{ $product->name }}</h5>
                <span class="text-blue-light">IDR {{ number_format($product->price) }}</span>
                <a href="{{ route('details',$product->slug) }}" class="stretched-link">
                  <!-- fake children -->
                </a>
              </div>
            @endforeach


          <!-- END: JUST ARRIVED ROW 1 -->


        </div>
        <!-- </div> -->
      </div>
    </section>
    <!-- END: JUST ARRIVED -->

    <!-- START: CLIENTS REVIEW -->
    <section class="blog text-gray-700 body-font flex " id="review">
        <div class="container px-5 py-24 mx-auto" >
            <div class="flex justify-center text-center mb-10 -mt-20 ">
                <h3 class="text-2xl text-blue capitalize font-semibold" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300">
                  Apakata Mereka ? <br class="" />Tentang Zhafirah Catering
                </h3>
            </div>
            <div data-aos="slide-right" data-aos-duration="1500" class="text-center mb-10 -mt-10">
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"
                    class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center"
                        style="background-image: url(https://images.unsplash.com/photo-1550005809-91ad75fb315f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2849&q=80">

                        <div class="h-56 w-72 ml-8 mt-16 absolute flex justify-center items-center">
                            <img
                            class="object-cover h-20 w-20 rounded-full"
                            src="https://images.unsplash.com/photo-1484608856193-968d2be4080e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80"
                            alt=""
                            />
                        </div>
                    </div>
                    <div
                    class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">

                        <div class="header-content inline-flex ">
                        <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-purple-100">
                            <div class="h-2 w-2 rounded-full m-1 bg-purple-500 " ></div>
                        </div>
                        <div class="category-title flex-1 text-sm font-bold text-blue-weps">Wedding</div>
                        </div>
                        <div class="title-post font-medium text-blue-900">Mba Indra Sutiawan</div>
                        <div class="summary-post text-base text-justify text-blue-light ">
                            Kamu butuh Katering dengan harga murah untuk acara kamu? Zhafirah Catering solusinya!
                        </div>

                        <button class=" bg-blue-light text-blue-500 mt-6 mb-6 mx-32 rounded p-2 text-sm ">
                            <span class="text-white">Explore
                                </span>
                            </button>
                        <div class="flex justify-center">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4 ml-2">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600"
                class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center"
                        style="background-image: url(https://images.unsplash.com/photo-1591604466107-ec97de577aff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2851&q=80">

                        <div class="h-56 w-72 ml-8 mt-16 absolute flex justify-center items-center">
                            <img
                            class="object-cover h-20 w-20 rounded-full"
                            src="https://i.pravatar.cc/100?img=5"
                            alt=""
                            />
                        </div>
                    </div>
                    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">

                        <div class="header-content inline-flex ">
                        <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-purple-100">
                            <div class="h-2 w-2 rounded-full m-1 bg-purple-500 " ></div>
                        </div>
                        <div class="category-title flex-1 text-sm font-bold text-blue-weps">Akad</div>
                        </div>
                        <div class="title-post font-medium text-blue-900">Mba Yani </div>
                        <div class="summary-post text-base text-left text-blue-light">
                            <p>
                                Alhamdulillah !! bisa berkesempatan menggunakan jasa Zhafirah Catering dari Proses Lamaran Sampai Akad kelar Engga mengecewakan,
                                Masakannya Enak-Enak ,<br>
                                Pokoknya Recommended banget Zhafirah Catering !!
                            </p>
                        </div>

                        <button class=" bg-blue-light text-blue-500 mt-6 mb-6 mx-32 rounded p-2 text-sm ">
                            <span class="text-white">Explore
                                </span>
                            </button>
                        <div class="flex justify-center">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4 ml-2">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900"
                class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center"
                        style="background-image: url(https://images.unsplash.com/photo-1542036813441-fc9a620d539d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2851&q=80">

                        <div class="h-56 w-72 ml-8 mt-16 absolute flex justify-center items-center">
                            <img
                            class="object-cover h-20 w-20 rounded-full"
                            src="https://i.pravatar.cc/100?img=4"
                            alt=""
                            />
                        </div>
                    </div>
                    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">

                        <div class="header-content inline-flex ">
                        <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-purple-100">
                            <div class="h-2 w-2 rounded-full m-1 bg-purple-500 " ></div>
                        </div>
                        <div class="category-title flex-1 text-sm font-bold text-blue-weps">Lamaran</div>
                        </div>
                        <div class="title-post font-medium text-blue-900">Mas Indra Rahman</div>
                        <div class="summary-post text-base text-justify text-blue-light">
                            Bingung mau cari Katering hits kekinian yang super higienis? Bebas bahan pengawet dan praktis? Zhafirah Catering solusinya!
                        </div>

                        <button class=" bg-blue-light text-blue-500 mt-6 mb-6 mx-32 rounded p-2 text-sm ">
                            <span class="text-white">Explore
                                </span>
                            </button>
                        <div class="flex justify-center">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4 ml-2">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"class="mr-4">
                            </div>
                    </div>
                </div>


          </div>
        </div>
    </section>
    <!-- END: CLIENTS -->

    {{-- SECTION HOW TO PESAN --}}
    <section>
        <div class="bg-white text-white py-8" >
        <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24" >
          <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
            <p class="ml-2 text-blue uppercase tracking-loose">PROSES KERJA</p>
            <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2 text-blue-light">Proses Kerja Pelayanan</p>
            <div data-aos="slide-left" data-aos-duration="1500" class="text-left mb-5">
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            </div>
            <p class="text-sm md:text-base text-blue-light  mb-4">
                Inilah panduan Anda untuk proses pemesanan paket menu di Zhafirah Catering  2021. Ikuti semua langkah untuk mengetahui proses pemesanan dengan  tepat.
            </p>
            <div data-aos="slide-left" data-aos-duration="1500" class="text-center mb-10">
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            </div>
            <a href="#browse-the-room"
            class="bg-transparent mr-auto hover:bg-blue-800 text-blue-500 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-blue-800 hover:border-transparent">
            Pesan Sekarang</a>
            {{-- Chartpie --}}
            <div class="bg-white shadow-lg rounded-lg mt-5" id="chartpie"></div>
            {{-- Chartipe --}}
          </div>
          <div class="ml-0 md:ml-12 lg:w-2/3 sticky" >
            <div class="container mx-auto w-full h-full">
              <div class="relative wrap overflow-hidden p-10 h-full">
                <div class="border-2-2 border-yellow-555 absolute h-full border"
                  style="right: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                <div class="border-2-2 border-yellow-555 absolute h-full border"
                  style="left: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                <div data-aos="slide-right" data-aos-duration="1500" data-aos-delay="200" class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                  <div class="order-1 w-5/12"></div>
                  <div class="order-1 w-5/12 px-1 py-4 text-right">
                    <p class="mb-3 text-base text-blue-900">Contoh 1-6 May, 2021</p>
                    <h4 class="mb-3 font-bold text-lg md:text-2xl text-blue-light">Registrasi</h4>
                    <p class="text-sm md:text-base leading-snug text-blue-500 text-opacity-100">
                        Daftarkan diri anda menggunakan alamat Email dan Masukan Data diri di Form Registrasi
                    </p>
                    <div data-aos="slide-right" data-aos-duration="1500" class="text-right mb-5">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                  </div>
                </div>
                <div data-aos="slide-left" data-aos-duration="1500" data-aos-delay="500" class="mb-8 flex justify-between items-center w-full right-timeline">
                  <div class="order-1 w-5/12"></div>
                  <div class="order-1  w-5/12 px-1 py-4 text-left">
                    <p class="mb-3 text-base text-blue-900">6-9 May, 2021</p>
                    <h4 class="mb-3 font-bold text-lg md:text-2xl text-blue-900">Reservasi</h4>
                    <p class="text-sm md:text-base leading-snug text-blue-500 text-opacity-100">
                        Pilih acara / kategori apa yang Anda ingin pesan dan daftar akun anda di form registerasi itu dengan mengisi formulir yang sesuai dengan acara itu. Semudah itu loh.
                    </p>
                    <div data-aos="slide-left" data-aos-duration="1500" class="text-left mb-5">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                  </div>
                </div>
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline" data-aos="slide-right" data-aos-duration="1500" data-aos-delay="800">
                  <div class="order-1 w-5/12"></div>
                  <div class="order-1 w-5/12 px-1 py-4 text-right">
                    <p class="mb-3 text-base text-blue-900"> 10 May, 2021</p>
                    <h4 class="mb-3 font-bold text-lg md:text-2xl text-blue-900">Konfirmasi</h4>
                    <p class="text-sm md:text-base leading-snug text-blue-500 text-opacity-100">
                      Admin Kami akan melakukan Konfirmasi Pemesanan anda, dan jangan lupa mengirim bukti pembayaran anda yaa !! :)
                    </p>
                    <div data-aos="slide-right" data-aos-duration="1500" class="text-right mb-5">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                  </div>
                </div>

                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                  <div class="order-1 w-5/12"></div>

                  <div class="order-1  w-5/12 px-1 py-4" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="800">
                    <p class="mb-3 text-base text-blue-900">12 May, 2021 Hari (H) </p>
                    <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left text-blue-900">Team Zhafirah Catering </h4>
                    <p class="text-sm md:text-base leading-snug text-blue-500 text-opacity-100">
                     Team Zhafirah Catering sudah tiba di lokasi anda Dan , Kami Siap menjadi mitra terbaik bagi industri dalam memberikan pelayanan jasa boga yang dapat dipercaya dan diandalkan.
                    </p>
                    <div data-aos="slide-left" data-aos-duration="1500" class="text-left mb-5">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                  </div>
                </div>
              </div>
              <img class="mx-auto -mt-36 md:-mt-36" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
            </div>
          </div>
        </div>
      </div>
      </section>
    {{-- END SECTION HOW TO PESAN --}}

    <!-- START: MINI PROFILE SECTION -->
    <!-- This is an example component -->
    <div class="bg-white p-28">
        <div class='md:flex'>
            <div data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300"
                class="md:w-6/12 text-white bg-gray-50 p-8 sm:rounded-tr-lg md:rounded-tr-none md:rounded-bl-lg rounded-tl-lg flex items-center">
                <div>
                    <h1 class="text-4xl mb-5 font-bold text-blue-900">Lokasi <span class="text-blue-900">Zhafirah</span> Catering</h1>
                    <div data-aos="slide-left" data-aos-duration="1500" class="text-left mb-2 -mt-5">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                    <h2 class="text-sm  text-blue-900 mb-5">
                        Perumahan Teguh Permai IV  Paal Lima, Kota Baru, Paal Lima, Jambi , Kota Jambi, Jambi 36129
                    </h2>
                    <h2 class="text-sm  text-blue-900 mb-1">
                        No Tlp : 082246668262 Reyhan
                    </h2>
                    <h2 class="text-sm  text-blue-900 mb-10">
                        No Tlp : 085266023503 Siti Aisyah
                    </h2>
                    <div data-aos="slide-left" data-aos-duration="1500" class="text-center -mt-10 mb-2">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                    <div class="flex">
                        <div class="mr-8 text-blue-900">
                            <p class="text-2xl font-bold">5000+</p>
                            <p class="text-sm">Konsumen</p>
                        </div>
                        <div class="mr-8 text-blue-900">
                            <p class="text-2xl font-bold">3+</p>
                            <p class="text-sm">Team</p>
                        </div>
                        <div class="text-blue-900">
                            <p class="text-2xl font-bold">10000+</p>
                            <p class="text-sm">Event</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="1500" data-aos-delay="600"
                class="ml-10 md:w-4/12 relative">
                <div class="bg-gray-500 w-full h-full opacity-60 absolute sm:rounded-bl-lg md:rounded-bl-none md:rounded-tr-lg rounded-br-lg"></div>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe
                            width="700"
                            height="500"
                            id="gmap_canvas" src="https://maps.google.com/maps?q=JAMBI%20PERUMAHAN%20TEGUH%20PERMAI%20IV%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe><a href="https://123movies-to.org"></a><br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:1500px;}
                            </style>
                                <a href="https://www.embedgooglemap.net">embedded maps</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:250%;}</style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: MINI PROFILE SECTION -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var chart = document.querySelector('#chartpie')
        var options = {
            series: [81, 72, 91, 85],
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total Pesanan ',
                            formatter: function(w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return 5341
                            }
                        }
                    }
                }
            },
            labels: ['Other', 'Aqiqah / Syukuran', 'Weding', 'Akad'],
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


@endsection
