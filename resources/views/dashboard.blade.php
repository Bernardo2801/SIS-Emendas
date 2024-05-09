@extends('layouts.main')

@section('title', 'Home SisEmendas')

@section('content')

<div>
    @if ($user->carteira == '57258')
    <section class="mt-4" data-aos="fade-down">
        <div class="mt-8 px-8 sm:px-24 md:px-60 lg:px-60 xl:px-60 2xl:px-60 grid grid-cols-1 xl:grid-cols-2">
            <div class="w-full rounded-xl flex flex-col items-left justify-center">
                <h1 class="text-4xl py-1 font-bold text-gray-800">Deputado Gustavo Gayer</h1>
                <h2 class="text-2xl py-1 font-semibold text-black border-b-2 border-gray-800 w-max">57ª Legislatura</h2>
                <h2 class="text-xl py-1 font-semibold mt-2">Qualquer dúvida ou erro, entre em contato com o suporte:</h2>
                <a href="https://wa.me/+5561983184699" class="w-max text-lg font-light hover:text-blue-600 hover:font-medium">(61) 98318-4699</a>
            </div>
            <div
                class="w-full py-4 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <img class="rounded-xl" src="/img/foto-aihara.png" alt="Foto Gayer">
            </div>
        </div>
    </section>
    @elseif ($user->carteira == '57423')
    <section class="mt-4" data-aos="fade-down">
        <div class="mt-8 px-8 sm:px-24 md:px-60 lg:px-60 xl:px-60 2xl:px-60 grid grid-cols-1 xl:grid-cols-2">
            <div class="w-full rounded-xl flex flex-col items-left justify-center">
                <h1 class="text-4xl py-1 font-bold text-gray-800">Deputado Gustavo Gayer</h1>
                <h2 class="text-2xl py-1 font-semibold text-black border-b-2 border-gray-800 w-max">57ª Legislatura</h2>
                <h2 class="text-xl py-1 font-semibold mt-2">Qualquer dúvida ou erro, entre em contato com o suporte:</h2>
                <a href="https://wa.me/+5561983184699" class="w-max text-lg font-light hover:text-blue-600 hover:font-medium">(61) 98318-4699</a>
            </div>
            <div
                class="w-full py-4 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <img class="rounded-xl" src="/img/foto-gayer.png" alt="Foto Gayer">
            </div>
        </div>
    </section>
    @else
        <p>Deputado não encontrado.</p>
    @endif
</div>

@endsection
