@extends('layouts.main')

@section('title', 'Home SisEmendas')

@section('content')


    @if ($user->carteira == '57258')
        <section class="mt-4">
            <div class="mt-8 px-8 sm:px-24 grid grid-cols-1 xl:grid-cols-2 gap-6 py-4">
                <div class="w-full rounded-xl flex flex-col justify-center">
                    <h1 class="text-lg py-1 font-semibold">57ª Legislatura</h1>
                    <h2 class="text-2xl py-1 font-bold">Deputado Pedro Aihara</h2>
                    <p class="text-lg py-1 font-normal text-gray-600">Qualquer dúvida ou erro, entre em contato com o
                        suporte:</p>
                    <a href="https://wa.me/+5561983184699"
                        class="w-max text-lg font-light hover:text-blue-600 hover:font-medium">(61) 98318-4699</a>
                    <h1 class="text-lg py-1 font-semibold">Acesso rápido:</h1>
                    <a class="text-lg font-light hover:text-blue-600 hover:font-medium py-2" href="https://docs.google.com/spreadsheets/d/1Z5EsxfeT1FWtJsokvf3V37yQWC9WOTy7ghu13A-EWE4/export?format=pdf&portrait=false&size=a4">
                        > RELATÓRIO DE PEDIDOS DE EMENDAS</a>


                    <a class="text-lg font-light hover:text-blue-600 hover:font-medium py-2" href="https://docs.google.com/spreadsheets/d/1Z5EsxfeT1FWtJsokvf3V37yQWC9WOTy7ghu13A-EWE4/export?format=pdf&portrait=false&size=a4">
                        >
                        RELATORIO EMENDAS PAGAS</a>


                    <a class="text-lg font-light hover:text-blue-600 hover:font-medium py-2" href="https://docs.google.com/spreadsheets/d/1Z5EsxfeT1FWtJsokvf3V37yQWC9WOTy7ghu13A-EWE4/export?format=pdf&portrait=false&size=a4">
                        > RELATORIO EMENDAS APTAS A PAGAR</a>


                    <a class="text-lg font-light hover:text-blue-600 hover:font-medium py-2" href="https://docs.google.com/spreadsheets/d/1Z5EsxfeT1FWtJsokvf3V37yQWC9WOTy7ghu13A-EWE4/export?format=pdf&portrait=false&size=a4">
                        > RELATORIO EMENDAS PENDENTES</a>

                    <a class="text-lg font-light hover:text-blue-600 hover:font-medium py-2" href="https://docs.google.com/spreadsheets/d/1Z5EsxfeT1FWtJsokvf3V37yQWC9WOTy7ghu13A-EWE4/export?format=pdf&portrait=false&size=a4">
                        > RELATORIO GERAL</a>
                </div>
                <div
                    class="w-full py-4 hidden sm:block transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                    <img class="rounded-xl" src="/img/foto-aihara.png" alt="Logo Sis Emendas">
                </div>
            </div>
        </section>
    @elseif ($user->carteira == '57423')
        <section data-aos="fade-down">
            <div class="mt-2 px-8">
                <div class="flex justify-center items-center">
                    <div class="p-5 w-[1200px] min-h-[400px]">
                        <div class="mt-4">
                            <div id="tab1" class="tab-content text-gray-700">
                                <div class="mt-8 grid grid-cols-1 xl:grid-cols-2 gap-10 py-4">
                                    <div class="w-full rounded-xl flex flex-col justify-center">
                                        <h2 class="text-4xl py-1 font-bold text-gray-800">Deputado Gustavo Gayer</h2>
                                        <h2 class="text-2xl py-1 font-semibold text-black border-b-2 border-gray-800 w-max">
                                            57ª Legislatura</h2>
                                        <p class="text-lg py-1 font-normal text-gray-600 py-2">Qualquer dúvida ou erro,
                                            entre em contato com o suporte:</p>
                                        <a href="https://wa.me/+5561983184699"
                                            class="w-max text-lg font-light hover:text-blue-600 hover:font-medium">(61)
                                            98318-4699</a>
                                    </div>
                                    <div class="w-full py-4">
                                        <img class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300"
                                            src="/img/foto-gayer.png" alt="Logo Sis Emendas">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <p>Deputado não encontrado.</p>
    @endif


    <div class="whats">
        <a href="https://wa.me/+556183466330" target="_blank">
            <img src="/img/whatsapp.png" width="70px" alt="Fale conosco pelo WhatsApp" title="Fale conosco pelo WhatsApp">
        </a>
    </div>

@endsection
