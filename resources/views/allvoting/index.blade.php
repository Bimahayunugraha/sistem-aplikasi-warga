@extends('layouts.main')

@section('content')

<div id="blog" class="container px-4 xl:px-4 py-28">
    <div class="mx-auto container">
        <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
            <span class="font-semibold text-lg text-primary mb-2 block">
            Voting
            </span>
            <h2
               class="
               font-bold
               text-3xl
               sm:text-4xl
               md:text-[40px]
               text-dark
               mb-4
               "
               >
               Voting Pemilihan
            </h2>
            <p class="text-base text-body-color">
               Gunakan suara Anda dengan benar saat melakukan voting.
            </p>
        </div>
        <div tabindex="0"  aria-label="Group of cards" class="focus:outline-none mt-12 lg:mt-24">
            <div  class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-8">
                @if ($candidates->count())
                <div>
                    <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-white overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center transform hover:scale-105 transition duration-500 cursor-pointer ease-in-out" src="{{ asset('storage/' . $candidates[0]->image) }}" alt="">
                        <div class="py-4 px-8 w-full bg-indigo-700">
                            <div class="flex justify-between ">
                                <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $candidates[0]->name }}</p>
                                <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $candidates[0]->start_date->format('l, d M Y') }}</p>
                            </div>
                            <div class="flex justify-between ">
                                <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">Sampai</p>
                            </div>
                            <div class="flex justify-between ">
                                <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $candidates[0]->vice_name }}</p>
                                <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $candidates[0]->end_date->format('l, d M Y') }}</p>
                            </div>

                        </div>
                        <div class="p-6">
                            <h1 class="tracking-widest text-4xl title-font font-medium text-gray-900 mb-3">
                                {{ Str::limit($candidates[0]->title, 10, '...') }}
                            </h1>
                            <p class="leading-relaxed mb-3 focus:outline-none text-gray-700 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">{{ $candidates[0]->excerpt }}</p>          
                            <div class="w-full flex justify-end" >
                                <button class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                                    <span class=" text-base tracking-wide text-indigo-700">Read more</span>
                                    <svg class="ml-3 lg:ml-6 text-indigo-700" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                        <path d="M11.7998 1L18.9998 8.53662L11.7998 16.0732" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1 8.53662H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div tabindex="0" class="focus:outline-none rounded-xl overflow-hidden" aria-label="card 1">
                    <img role="img" aria-label="code editor" tabindex="0" class="focus:outline-none w-full object-cover object-center" src="{{ asset('storage/' . $candidates[0]->image) }}" alt="" />
                    <div class="py-4 px-8 w-full flex justify-between bg-indigo-700">
                        <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $candidates[0]->name }} - {{ $candidates[0]->vice_name }}</p>
                        <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH Oct, 2020</p>
                    </div>
                    <div class="bg-white px-10 py-6">
                        <h1 tabindex="0" class="focus:outline-none text-4xl text-gray-900 font-semibold tracking-wider">{{ $candidates[0]->title }}</h1>
                        <p tabindex="0" class="focus:outline-none text-gray-700 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">{{ $candidates[0]->excerpt }}</p>
                        <div class="w-full flex justify-end" >
                            <button class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                                <span class=" text-base tracking-wide text-indigo-700">Read more</span>
                                <svg class="ml-3 lg:ml-6 text-indigo-700" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                    <path d="M11.7998 1L18.9998 8.53662L11.7998 16.0732" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 8.53662H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="h-5 w-2"></div>
                    </div>
                </div> --}}
                @foreach ($candidates->skip(1) as $candidate)
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8">
                    <div tabindex="0" class="focus:outline-none selection:h-auto rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-white overflow-hidden">
                        <img tabindex="0" class="lg:h-48 md:h-36 w-full object-cover object-center transform hover:scale-105 transition duration-500 cursor-pointer ease-in-out" src="{{ asset('storage/' . $candidate->image) }}" alt="">
                        <div class="py-4 px-4 w-full bg-indigo-700">
                            <div class="flex justify-between ">
                                <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $candidate->name }}</p>
                                <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH Oct, 2020</p>
                            </div>
                            <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $candidate->vice_name }}</p>
                        </div>
                        <div class="p-6">
                            <h1 class="tracking-wider text-4xl title-font font-medium text-gray-900 mb-3">
                                {{ Str::limit($candidate->title, 10, '...') }}
                            </h1>
                            <p class="leading-relaxed mb-3 focus:outline-none text-gray-700 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">{{ $candidate->excerpt }}</p>          
                            <div class="w-full flex justify-end" >
                                <button class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                                    <span class=" text-base tracking-wide text-indigo-700">Read more</span>
                                    <svg class="ml-3 lg:ml-6 text-indigo-700" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                        <path d="M11.7998 1L18.9998 8.53662L11.7998 16.0732" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1 8.53662H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-8 rounded-xl">
                        <div tabindex="0" class="focus:outline-none " aria-label="card 2" >
                            <img tabindex="0" role="img" aria-label="gaming" class="focus:outline-none w-full object-cover object-center" src="{{ asset('storage/' . $candidate->image) }}" alt="games" />
                            <div class="py-2 px-4 w-full flex justify-between bg-indigo-700">
                                <p tabindex="0" class="focus:outline-none  text-sm text-white font-semibold tracking-wide">{{ $candidate->name }} - {{ $candidate->vice_name }}</p>
                                <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">13TH Oct, 2020</p>
                            </div>
                            <div class="bg-white px-3 lg:px-6 py-4">
                                <h1 tabindex="0" class="focus:outline-none text-lg text-gray-900 font-semibold tracking-wider">{{ $candidate->title }}</h1>
                                <p tabindex="0" class="focus:outline-none text-gray-700 text-sm lg:text-base lg:leading-8 pr-4 tracking-wide mt-2">{{ $candidate->excerpt }}</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="lg:py-16 md:py-20 px-4 py-24 items-center flex justify-center flex-col-reverse lg:flex-row md:gap-28 gap-16">
            <div class="xl:pt-24 w-full xl:w-1/2 relative pb-12 lg:pb-0">
                <div class="relative">
                    <div class="absolute">
                        <div class="">
                            <h1 class="my-2 text-gray-800 font-bold text-2xl">
                                Data pengajuan keluhan kosong
                            </h1>
                            <p class="my-2 text-gray-800">Anda harus menambahkan data pengajuan keluhan
                                terlebih dahulu.</p>
                        </div>
                    </div>
                    <div>
                        <img src="https://i.ibb.co/G9DC8S0/404-2.png" />
                    </div>
                </div>
            </div>
            <div>
                <img src="https://i.ibb.co/ck1SGFJ/Group.png" />
            </div>
        </div>
        @endif
    </div>
</div>

<div class="container flex justify-center">
    {{ $candidates->links() }}
</div>

{{-- Footer start --}}
    @include('partials.footer')
{{-- Footer end --}}


@endsection