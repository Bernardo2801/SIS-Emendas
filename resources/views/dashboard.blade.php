@extends('layouts.main')

@section('title', 'Home SisEmendas')

@section('content')

<div>
    @if ($user->carteira == '57258')
    <section class="mt-4" data-aos="fade-down">
        <div class="mt-8 px-8 sm:px-24 md:px-60 lg:px-60 xl:px-60 2xl:px-60 grid grid-cols-1 xl:grid-cols-2">
            <div class="w-full rounded-xl flex flex-col items-left justify-center">
                <h1 class="text-2xl py-1 font-bold">Fale consco</h1>
                <h2 class="text-lg py-1 font-semibold">Email</h2>
                <a href="mailto:atendimento@aspar.com.br">atendimento@aspar.com.br</a>
                <h2 class="text-lg py-1 font-semibold">WhatsApp</h2>
                <a href="https://wa.me/+5561983184699">(61) 98318-4699</a>
                <h2 class="text-lg py-1 font-semibold">Redes Sociais</h2>
                <div>
                    <a href="https://instagram.com/asparassessoria"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                    <a href="https://github.com/Aspar-Assessoria-e-Tecnologia"><ion-icon name="logo-github"></ion-icon></a>
                </div>
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
                <h1 class="text-2xl py-1 font-bold">Fale consco</h1>
                <h2 class="text-lg py-1 font-semibold">Email</h2>
                <a href="mailto:atendimento@aspar.com.br">atendimento@aspar.com.br</a>
                <h2 class="text-lg py-1 font-semibold">WhatsApp</h2>
                <a href="https://wa.me/+5561983184699">(61) 98318-4699</a>
                <h2 class="text-lg py-1 font-semibold">Redes Sociais</h2>
                <div>
                    <a href="https://instagram.com/asparassessoria"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                    <a href="https://github.com/Aspar-Assessoria-e-Tecnologia"><ion-icon name="logo-github"></ion-icon></a>
                </div>
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
