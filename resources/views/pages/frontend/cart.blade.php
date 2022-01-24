@extends('layouts.frontend')

@section('content')

<!-- START: BREADCRUMB -->
    <section class="bg-gray-100 py-8 px-4">
      <div class="container mx-auto text-blue">
        <ul class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#" aria-label="current-page">Keranjang Kamu</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: COMPLETE YOUR ROOM -->
    <section class="md:py-16">
      <div class="container mx-auto px-4">
        <div class="flex -mx-4 flex-wrap">
          <div class="w-full px-4 mb-4 md:w-8/12 md:mb-0" id="shopping-cart">
            <div
              class="flex flex-start mb-4 mt-8 pb-3 border-b border-gray-200 md:border-b-0"
            >
              <h3 class="text-2xl text-blue ">Keranjang Pesanan</h3>
            </div>

            <div class="border-b border-gray-200 mb-4 hidden md:block">
              <div class="flex flex-start items-center pb-2 -mx-4 text-blue-light">
                <div class="px-4 flex-none">
                  <div class="" style="width: 90px">
                    <h6>Foto Produk</h6>
                  </div>
                </div>
                <div class="px-4 w-5/12">
                  <div class="">
                    <h6>Pesanan Produk dan Kategori</h6>
                  </div>
                </div>
                <div class="px-4 w-5/12">
                  <div class="">
                    <h6>Harga / Porsi</h6>
                  </div>
                </div>
                <div class="px-4 w-2/12">
                  <div class="text-center">
                    <h6>Action</h6>
                  </div>
                </div>
              </div>
            </div>



            @forelse ($carts as $item)
            <!-- START: ROW 1 -->
            <div
              class="flex flex-start flex-wrap items-center mb-4 -mx-4 text-blue"
              data-row="1">
              <div class="px-4 flex-none">
                <div class="" style="width: 90px; height: 90px">
                  <img
                    src="{{ $item->product->galleries()->exists() ? Storage::url($item->product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                    alt="chair-1"
                    class="object-cover rounded-xl w-full h-full"
                  />
                </div>
              </div>
              <div class="text-blue px-4 w-auto flex-1 md:w-5/12">
                <div class="">
                  <h6 class="font-semibold text-lg md:text-xl leading-8">
                   {{ $item->product->name }}
                  </h6>
                  <span class="text-sm md:text-lg text-blue-light ">{{$item->product->category}}</span>
                  <h6
                    class="font-semibold text-base md:text-lg block md:hidden"
                  >
                    IDR {{ number_format($item->product->price)}}
                  </h6>
                </div>
              </div>
              <div
                class="px-4 w-auto flex-none md:flex-1 md:w-5/12 hidden md:block"
              >
                <div class="">
                  <h6 class="font-semibold text-lg">IDR {{ number_format($item->product->price)}} </h6>
                </div>
              </div>
              <div class="px-4 w-2/12">
                <div class="text-center">
                  <form action="{{route('cart-delete', $item->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                    <button

                    class="text-red-600 border-none focus:outline-none px-3 py-1">
                    X
                  </button>

                  </form>
                </div>
              </div>
            </div>
            <!-- END: ROW 1 -->

            @empty

            <p id="cart-empty" class="text-center py-8">
                Ooops... Cart is empty
                <a href="{{route('index')}}" class="underline rounded bg-red-500">Shop Now</a>
              </p>
            @endforelse




            <!-- DETAILS PESANAM -->
          </div>
          <div class="text-blue w-full md:px-4 md:w-4/12" id="shipping-detail">
            <div class="bg-gray-100 px-4 py-6 md:p-8 md:rounded-3xl">
                    <form action="{{route('checkout')}}" method="POST">
                        @csrf
                        <div class="flex flex-start mb-6">
                        <h3 class="text-2xl"> Details Pesanan</h3>
                        </div>

                        <div class="flex flex-col mb-4">
                        <label for="complete-name" class="text-sm mb-2"
                            >Nama Lengkap</label
                        >
                        <input
                            data-input
                            name="name"
                            type="text"
                            id="complete-name"
                            class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                            placeholder="Input nama lengkap kamu"
                        />
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="name_acara" class="text-sm mb-2"
                                >Nama Acara</label
                            >
                            <input
                                data-input
                                name="name_acara"
                                type="text"
                                id="name_acara"
                                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                                placeholder="Input nama acara"
                            />
                            </div>


                        <div class="flex flex-col mb-4">
                        <label for="email" class="text-sm mb-2">Alamat Email</label>
                        <input
                            data-input
                            name="email"
                            type="email"
                            id="email"
                            class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                            placeholder="Input alamat email kamu"
                        />
                        </div>

                        <div class="flex flex-col mb-4">
                        <label for="date" class="text-sm mb-2">Tanggal Acara</label>
                        <input
                            data-input
                            name="tglacara"
                            type="date"
                            id="date"
                            class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                            placeholder="Input tanggal acara anda"
                        />
                        </div>

                        <div class="flex flex-col mb-4">
                        <label for="porsi" class="text-sm mb-2">Porsi Yang anda Pesan </label>
                        <input
                            data-input
                            name="porsi"
                            type="text"
                            id="porsi"
                            class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                            placeholder="Minimal pemesanan 100 Porsi"
                        />
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="deposit" class="text-sm mb-2">DP Atau Deposit awal</label>
                            <input
                                data-input
                                value="1500000"
                                name="deposit"
                                type= "number_format"
                                id="deposit"
                                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                                placeholder="Masukan deposit anda"
                            />
                            </div>
                        <div class="flex flex-col mb-4">
                        <label for="address" class="text-sm mb-2">Alamat / Lokasi Acara </label>
                        <input
                            data-input
                            name="address"
                            type="text"
                            id="address"
                            class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                            placeholder="Input your address"
                        />
                        </div>

                        <div class="flex flex-col mb-4">
                        <label for="phone-number" class="text-sm mb-2"
                            >Nomor Handphone</label
                        >
                        <input
                            data-input
                            name="phone"
                            type="tel"
                            id="phone-number"
                            class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                            placeholder="Input nomor telepon yang bisa di hubungi"
                        />
                        </div>


                            <label for="request_tambahan" class="text-sm mb-4"
                                >Request Protein</label
                            >
                            <select  name="request_tambahan" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name">
                                <option disabled>-------</option>
                                <option value="Ayam dan Daging">
                                    <p class="text-center">Ayam dan daging</p>

                                </option>
                                <option value="Daging dan Ikan">
                                    <p class="text-center">Daging dan Ikan</p>
                                </option>
                                <option value="Ikan dan Ayam">
                                    <p class="text-center">Ikan dan Ayam</p>
                                </option>
                            </select>



                                <label for="request_sambal" class="text-sm mb-2"
                                    >Request Sambal 1</label
                                >
                                <select  name="request_sambal" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name">
                                    <option disabled>-------</option>
                                    <option value="Sambal Hati kentang">
                                        <p class="text-center">Sambal Hati Kentang</p>

                                    </option>
                                    <option value="Stick Kentang">
                                        <p class="text-center">Stick Kentang</p>
                                    </option>
                                </select>



                                <label for="request_sambal2" class="text-sm mb-2"
                                    >Request Sambal 2</label
                                >
                                <select id="request_sambal2" name="request_sambal2" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded mb-4 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name">
                                    <option disabled>-------</option>
                                    <option value="Sambal Cenge">
                                        <p class="text-center">Sambal Cenge</p>

                                    </option>
                                    <option value="Sambal Terasi">
                                        <p class="text-center">Sambal Terasi</p>
                                    </option>
                                    <option value="Sambal Ijo">
                                        <p class="text-center">Sambal Ijo</p>
                                    </option>
                                </select>


                                <label for="request_saung" class="text-sm mb-2"
                                    >Request Saung</label
                                >
                                <select id="request_saung" name="request_saung" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded mb-4 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name">
                                    <option disabled>-------</option>
                                    <option value="Soft drink + 1 Tekwan, 2 Martabak Mini, 3 Sate, 4 Lupis ">
                                        <p class="text-center">Soft drink + 1 Tekwan, 2 Martabak Mini, 3 Sate, 4 Lupis</p>

                                    </option>
                                    <option value="Soft drink + 1 Bakso Mini, 2 Martabak Mini, 3 Sate, 4 Lupis">
                                        <p class="text-center">Soft drink + 1 Bakso Mini, 2 Martabak Mini, 3 Sate, 4 Lupis</p>
                                    </option>
                                    <option value="Soft drink + 1 Tekwan, 2 Bakso Mini, 3 Pisang, 4 Salad">
                                        <p class="text-center">Soft drink + 1 Tekwan, 2 Bakso Mini, 3 Pisang, 4 Salad</p>
                                    </option>
                                </select>


                        <div class="flex flex-col mb-4">
                        <label for="complete-name" class="text-sm mb-2"
                            >Piliha Servis Yang Ingin Kita Sajikan </label
                        >
                        <div class="flex -mx-2 flex-wrap">
                        <div class="px-2 w-6/12 h-24 mb-4">
                            <button
                                type="button"
                                data-value="KOTAK"
                                data-name="service"

                                class="border border-gray-200 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none"
                            >
                                <img
                                src="/zhafirahcatering-frontend/images/content/nasikotak.svg"
                                alt="Logo Kotak"
                                class="object-contain max-h-full"
                                />

                            </button>

                        </div>
                        <div class="px-2 w-6/12 h-24 mb-4">

                            <button
                                type="button"
                                data-value="PRASMANAN"
                                data-name="service"

                                class="border border-blue-600 focus:border-red-200 flex items-center justify-center rounded-xl bg-white w-full h-full focus:outline-none"
                            >
                                <img
                                src="/zhafirahcatering-frontend/images/content/prasmanan.svg"
                                alt="Logo Prasmanan"
                                class="object-contain max-h-full"
                                />
                            </button>

                        </div>


                        <select name="service" class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name">
                            <option disabled>-------</option>
                            <option value="PRASMANAN">
                                <p class="text-center">Prasmanan</p>

                            </option>
                            <option value="KOTAK">
                                <p class="text-center">Kotak</p>
                            </option>

                        </select>
                        </div>
                        </div>

                        </div>
                        <div class="text-center">
                        <button
                            type="submit"
                            enabled
                            class="bg-blue-light text-white hover:bg-black hover:text-pink-400 focus:outline-none w-full py-3 rounded-full text-lg focus:text-black transition-all duration-100 px-6"
                        >
                            Checkout Sekarang
                        </button>
                        </div>
                    </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END: COMPLETE YOUR ROOM -->

@endsection
