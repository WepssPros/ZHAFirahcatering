@extends('layouts.frontend')

@section('content')

 <!-- START: BREADCRUMB -->
    <section class="bg-gray-100 py-8 px-4">
      <div class="container mx-auto">
        <ul class="breadcrumb text-blue">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#">Wedding</a>
          </li>
          <li>
            <a href="#" aria-label="current-page">Detail Produk</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: DETAILS -->
        <section class="container mx-auto">
        <div class="flex flex-wrap my-4 md:my-12">
            <div class="w-full md:hidden px-4">
            <h2 class="text-5xl font-semibold text-blue">{{$product->name}}</h2>
            <span class="text-xl text-blue-light">IDR {{ number_format($product->price) }}</span>
            <span class="text-xl text-blue-light">/ Porsi</span>

            </div>
            <div class="flex-1">
            <div class="slider">
                <div class="thumbnail">
                    @foreach ($product->galleries as $item)

                    <div class="px-2">
                        <div
                            class="item {{ $loop-> first ? 'selected' : ''}}"
                            data-img="{{ Storage::url($item->url) }}"
                        >
                            <img
                            src="{{ Storage::url($item->url) }}"
                            alt="front"
                            class="object-cover w-full h-full rounded-lg"
                            />
                        </div>
                    </div>

                    @endforeach


                </div>
                <div class="preview">
                <div class="item rounded-lg h-full overflow-hidden">
                    <img
                    src="{{ $product->galleries()->exists() ? Storage::url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                    alt="front"
                    class="object-cover w-full h-full rounded-lg"
                    />
                </div>
                </div>
            </div>
            </div>
            <div class="flex-1 px-4 md:p-6">
            <h2 class="text-5xl font-semibold text-blue pb-4">{{$product->name}}</h2>
            <p class="text-xl text-blue-light ">IDR {{ number_format($product->price) }}
                <span class="text-xl text-blue-light ">/ Porsi</span>
            </p>

            <form action="{{ route('cart-add', $product->id) }}" method="POST">
                @csrf
                <button
                class="transition-all duration-200 bg-blue-light text-white focus:bg-black focus:text-white rounded-full px-8 py-3 mt-4 inline-flex"
                >

                    <svg class="fill-current mr-3"
                        width="26"
                        height="24"
                        viewBox="0 0 26 24" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"  version="1.1" x="0px" y="0px">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon fill="#FFFFFF"
                                        points="22 14 20.5 14 20.5 1.5 3.5 1.5 3.5 22.5 16.5692139 22.5 17.9655629 23.174798 17.9697266 24 2 24 2 0 22 0"/>
                                            <rect fill="#FFFFFF" x="6" y="5" width="12" height="1.5"/>
                                            <rect fill="#FFFFFF" x="6" y="10" width="7" height="1.5"/>
                                            <rect fill="#FFFFFF" x="6" y="15" width="5" height="1.5"/>
                                <path d="M18,24 C14.6862915,24 12,21.3137085 12,18 C12,14.6862915 14.6862915,12 18,12 C21.3137085,12 24,14.6862915 24,18 C24,21.3137085 21.3137085,24 18,24 Z M18,22.56 C20.5184185,22.56 22.56,20.5184185 22.56,18 C22.56,15.4815815 20.5184185,13.44 18,13.44 C15.4815815,13.44 13.44,15.4815815 13.44,18 C13.44,20.5184185 15.4815815,22.56 18,22.56 Z" fill="#FFFFFF"/>
                                <polygon fill="#FFFFFF" fill-rule="nonzero" points="20.6675142 15.6464466 21.7281744 16.7071068 17.1319803 21.3033009 13.9499998 18.1213203 15.01066 17.0606602 17.1319803 19.1819805"/>
                            </g>
                    </svg>
                Booking Sekarang !
                </button>
            </form>
            <hr class="my-8" />

            <h6 class="text-xl font-semibold mb-4 text-blue">Menu Paket</h6>
            <p class="text-xl font- leading-7 mb-6 text-blue-light ">
                {!! $product->description_menu !!}
            </p>

            </div>
        </div>
        </section>
    <!-- END: DETAILS -->

    <!-- START: COMPLETE YOUR ROOM -->
    <section class="bg-gray-100 px-4 py-16">
      <div class="container mx-auto">
        <div class="flex flex-start mb-4">
          <h3 class="text-2xl capitalize font-semibold text-blue">
            Rekomendasi Untuk Mu <br class="" />Produk Lainnya
          </h3>
        </div>
        <div class="flex overflow-x-auto mb-4 -mx-3">
            @foreach ($recommendations as $recommendation)
            <div class="px-3 flex-none" style="width: 320px">
              <div class="rounded-xl p-4 pb-8 relative bg-white">
                <div class="rounded-xl overflow-hidden card-shadow w-full h-36">
                  <img
                    src="{{ $recommendation->galleries()->exists() ? Storage::url($recommendation->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                    alt=""
                    class="w-full h-full object-cover object-center"
                  />
                </div>
                <h5 class="text-lg font-semibold mt-4 text-blue">{{$recommendation->name}}</h5>
                <span class="text-blue-light">IDR {{ number_format($recommendation->price) }}</span>
                <a href="{{ route('details',$recommendation->slug) }}" class="stretched-link">
                  <!-- fake children -->
                </a>
              </div>
            </div>
            @endforeach


        </div>
      </div>
    </section>
    <!-- END: COMPLETE YOUR ROOM -->

@endsection
