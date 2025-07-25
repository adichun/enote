<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<div class="container mx-auto p-4 mt-10">
    <div class="mt-10 mb-4 border-2">
        <button>Form</button>
    </div>
    <div class="flex" x-data="{ tab: 'satu' }">
    <!-- Sidebar kiri -->
    <div class="w-48 bg-gray-100 p-4 space-y-2">
        <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-r-2xl bg-amber-500 hover:bg-amber-500" :class="{ 'bg-amber-500 text-white': tab === 'satu' }" @click.prevent="tab = 'satu'">
            <svg xmlns="http://www.w3.org/2000/svg" fill="orange" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
            </svg>
            <p>Catatan</p>
        </a>
        <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-r-2xl hover:bg-blue-200" :class="{ 'bg-blue-500 text-white': tab === 'dua' }" @click.prevent="tab = 'dua'">
            <svg xmlns="http://www.w3.org/2000/svg" fill="orange" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
            </svg>
            <p>Pengingat</p>
        </a>
        <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-r-2xl hover:bg-blue-200" :class="{ 'bg-blue-500 text-white': tab === 'tiga' }" @click.prevent="tab = 'tiga'">
            <svg xmlns="http://www.w3.org/2000/svg" fill="orange" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>
            <p>Arsip</p>
        </a>
        <a href="#" class="flex items-center gap-2 px-3 py-2 rounded-r-2xl hover:bg-blue-200" :class="{ 'bg-blue-500 text-white': tab === 'empat' }" @click.prevent="tab = 'empat'">
            <svg xmlns="http://www.w3.org/2000/svg" fill="orange" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>
            <p>Sampah</p>
        </a>
    </div>

    <!-- Konten kanan -->
    <div class="flex-1 p-6 bg-white h-full">
        <div x-show="tab === 'satu'">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem corrupti perferendis consectetur harum? Dolores quae sit unde, quas cum, doloremque obcaecati alias mollitia laborum, tempore facere consectetur voluptatibus ipsum nostrum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt delectus dolor, perspiciatis repudiandae omnis laudantium explicabo quidem dicta cumque asperiores debitis nihil non ducimus nisi, eaque neque ad soluta sapiente.
        </div>
        <div x-show="tab === 'dua'">
            @if (Auth::check())
                Hello, {{ Auth::user() }}
            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                    Logout
                </button>
            </form>

        </div>
        <div x-show="tab === 'tiga'">Konten untuk Tab 3</div>
        <div x-show="tab === 'empat'">Konten untuk Tab 4</div>
    </div>
    </div>
</div>



    <!-- Konten lainnya -->
@endsection