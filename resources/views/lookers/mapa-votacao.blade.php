@extends('layouts.main')

@section('title', 'SISEmendas - Mapa de Votação')

@section('content')

<div>
    @if ($user->carteira == '57258')
    <section class="p-2" data-aos="fade-down">
        <div class="mt-2 px-8">
            <div class="flex flex-col sm:flex-row justify-center items-center">
                <div style="background-color: #209D5C"
                class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-2 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                    Mapa Votação Deputados Aihara
                </div>
            </div>
        </div>
    </section>
    @elseif ($user->carteira == '57423')
    <section class="p-2" data-aos="fade-down">
        <div class="mt-2 px-8">
            <div style="background-color: #209D5C"
            class="flex flex-col sm:flex-row justify-center items-center">
                <div class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-2 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                    Mapa Votação Deputados Aihara
                </div>
            </div>
        </div>
    </section>
    @else
        <p>Deputado não encontrado.</p>
    @endif
</div>

@endsection
