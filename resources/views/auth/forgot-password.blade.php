<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <div class="mb-4 px-4 py-6">
            <div class="mb-4">
                <a href="{{ route('login') }}" class="text-[#17693e] font-semibold text-sm border border-transparent rounded-xl text-center inline-flex items-center me-2 uppercase hover:scale-105 transition ease-in-out duration-300"><ion-icon name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
            </div>
            <h2 class="font-bold text-2xl text-[#17693e]">Esqueceu sua senha?</h2>
            <p class="text-[#17693e] py-4">Sem problemas. Apenas entre em contato com o suporte que enviaremos no seu email sua nova senha.</p>
            <a href="https://api.whatsapp.com/send/?phone=%2B5577999103979&text&type=phone_number&app_absent=0" target="_blank">
                <button type="button" class="text-white items-center bg-[#209D5C] hover:bg-[#17693e] font-semibold text-xs     border border-transparent rounded-xl px-5 py-2 text-center inline-flex items-center me-2 uppercase hover:scale-105 focus:bg-[#209D5C] active:bg-[#114d2d] focus:outline-none transition ease-in-out duration-300">
                    <ion-icon name="person-outline" size="small" class="mr-2"></ion-icon>
                    </svg>
                    Clique aqui e fale com o suporte
                </button>
            </a>
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />
    </x-authentication-card>
</x-guest-layout>
