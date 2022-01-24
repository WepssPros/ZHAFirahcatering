@extends('layouts.frontend')

@section('content')

<!-- START: BREADCRUMB -->
    <section class="bg-gray-100 py-8 px-4">
      <div class="text-blue container mx-auto">
        <ul class="breadcrumb">
          <li>
            <a href="{{route('index')}}">Home</a>
          </li>
          <li>
            <a href="#" aria-label="current-page">Success Checkout</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- END: BREADCRUMB -->

<!-- START: CONGRATS -->
    <section class="">
      <div class="container mx-auto min-h-screen">
        <div class=" text-blue flex flex-col items-center justify-center">
          <div class="w-full md:w-4/12 text-center">
            <img
              src="/zhafirahcatering-frontend/images/content/success.svg"
              alt="congrats illustration"
            />
            <h2 class="text-3xl font-semibold mb-6">Selamat Pesanan anda telah dibuat !</h2>
            <p class="text-lg mb-12">
              Pesananan yang anda beli akan kami kirimkan saat Hari H silahkan Konfirmasi Pembayaran anda
              untuk info lebih lanjut silahkan hubungi kami
            </p>
            <a
              href="{{route('dashboard.my-transaction.index')}}"
              class="text-white bg-blue-light focus:outline-none w-full py-3 rounded-full text-lg focus:text-black transition-all duration-200 px-8 cursor-pointer"
            >
              Lihat Transaksi Saya
            </a>

            <a
              href="https://wa.widget.web.id/55c7b5" target="_blank"
              class=" text-white bg-green-500 focus:outline-none w-full py-3 ml-6 rounded-full text-lg focus:text-black transition-all duration-200 px-8 cursor-pointer"
            >
            Hubungi  Admin Zhafirah
            </a>
            

          </div>
        </div>
      </div>
    </section>
    <!-- END: CONGRATS -->

@endsection
