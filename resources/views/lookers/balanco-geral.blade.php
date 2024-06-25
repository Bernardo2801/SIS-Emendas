@extends('layouts.main')

@section('title', 'SISEmendas - Balanço Geral')

@section('content')

    <div>
        @if ($user->carteira == '57258')
            <section class="p-2" data-aos="fade-down">
                <div class="mt-2 px-8">
                    <div class="flex flex-col sm:flex-row justify-center items-center">
                        <div style="background-color: #209D5C"
                            class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-2 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                            <iframe
                                src="https://lookerstudio.google.com/embed/reporting/ced4c11d-1afc-4e7d-a6cb-9992c1b889ab/page/DBreD"
                                frameborder="0" style="border:0" allowfullscreen
                                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
                                class="w-full h-[700px] sm:w-full sm:h-[670px] md:w-full md:h-[700px] lg:w-full lg:h-[720px] xl:w-full xl:h-[730px] 2xl:w-full 2xl:h-[730px]"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        @elseif ($user->carteira == '57423')
            <section class="p-2" data-aos="fade-down">
                <div class="mt-2 px-8">
                    <div class="flex flex-col sm:flex-row justify-center items-center">
                        <div style="background-color: #209D5C"
                            class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-2 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                            <iframe
                                src="https://lookerstudio.google.com/embed/reporting/a92db18c-25c0-4c50-b1c8-8d62424706ce/page/DBreD"
                                frameborder="0" style="border:0" allowfullscreen
                                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"
                                class="w-full h-[700px] sm:w-full sm:h-[670px] md:w-full md:h-[700px] lg:w-full lg:h-[720px] xl:w-full xl:h-[730px] 2xl:w-full 2xl:h-[730px]"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <p>Deputado não encontrado.</p>
        @endif
    </div>

@endsection
