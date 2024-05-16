<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full items-center py-2 bg-[#209D5C] border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#17693e] hover:scale-105 focus:bg-[#209D5C] active:bg-[#114d2d] focus:outline-none transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>
