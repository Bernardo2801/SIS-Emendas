@extends('layouts.main')

@section('title', 'SISEmendas - Consulta por Ministério/Temática')

@section('content')

<div>
    @if ($user->carteira == '57258')
    <section class="p-2" data-aos="fade-down">
        <div class="mt-2 px-8">
            <div class="flex flex-col sm:flex-row justify-center items-center">
                <div class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-6 bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                    <iframe src="https://lookerstudio.google.com/embed/reporting/4df4f486-8fab-4e01-9ac6-01392e272276/page/DBreD" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox" class="w-full h-[700px] sm:w-full sm:h-[670px] md:w-full md:h-[700px] lg:w-full lg:h-[720px] xl:w-full xl:h-[730px] 2xl:w-full 2xl:h-[730px]"></iframe>
                </div>
            </div>
        </div>
    </section>
    @elseif ($user->carteira == '57423')
    <section class="p-2" data-aos="fade-down">
        <div class="mt-2 px-8">
            <div class="flex flex-col sm:flex-row justify-center items-center">
                <div class="w-full h-full sm:w-full sm:h-full md:w-full md:h-full lg:w-full lg:h-full xl:w-full xl:h-full 2xl:w-[1230px] 2xl:h-full p-6 bg-gray-800 rounded-lg shadow-lg hover:shadow-2xl mb-4 mr-2 flex flex-col sm:flex-row justify-center items-center justify-center items-center">
                    <iframe src="https://lookerstudio.google.com/embed/reporting/f7b67359-a54a-477f-aa8f-7acf35abd5f9/page/DBreD" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox" class="w-full h-[700px] sm:w-full sm:h-[670px] md:w-full md:h-[700px] lg:w-full lg:h-[720px] xl:w-full xl:h-[730px] 2xl:w-full 2xl:h-[730px]"></iframe>
                </div>
            </div>
        </div>
    </section>
    @else
        <p>Deputado não encontrado.</p>
    @endif
</div>

@endsection
