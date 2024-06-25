@extends('layouts.main')

@section('title', 'SISEmendas - Formulário Pedidos OGU 2025')

@section('content')

    <div>
        @if ($user->carteira == '57258')
            <section class="p-2" data-aos="fade-down">
                <div class="mt-2 px-8">
                    <div class="flex flex-col sm:flex-row justify-center items-center">
                        <div style="background-color: #209D5C"
                            class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-2 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                            <iframe
                                src="https://docs.google.com/forms/d/e/1FAIpQLSeaTMAuCeBNNjTsfxT8yDUKoJZ7s0mex-IjwiJKQUUKUGH7Nw/viewform?embedded=true"
                                width="640" height="1886" frameborder="0" marginheight="0"
                                class="w-full h-[700px] sm:w-full sm:h-[670px] md:w-full md:h-[700px] lg:w-full lg:h-[720px] xl:w-full xl:h-[730px] 2xl:w-full 2xl:h-[730px]">
                                marginwidth="0">Carregando…</iframe>
                        </div>
                    </div>
                </div>
            </section>
        @elseif ($user->carteira == '57423')
            <section class="p-2" data-aos="fade-down">
                <div class="mt-2 px-8">
                    <div style="background-color: #209D5C" class="flex flex-col sm:flex-row justify-center items-center">
                        <div
                            class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-2 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                            Votos Deputados Gayer
                        </div>
                    </div>
                </div>
            </section>
        @else
            <p>Deputado não encontrado.</p>
        @endif
    </div>

@endsection
