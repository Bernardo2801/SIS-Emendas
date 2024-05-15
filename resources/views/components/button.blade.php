<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#209D5C] border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#209D5C] hover:scale-105 focus:bg-[#209D5C] active:bg-[#209D5C] focus:outline-none focus:ring-2 focus:ring-[#209D5C] focus:ring-offset-2 transition ease-in-out duration-300']) }}>
    {{ $slot }}
</button>
