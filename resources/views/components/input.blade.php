@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full p-2 border border-gray-300 focus:border-[#209D5C] focus:ring-[#209D5C] rounded-xl shadow-sm w-full']) !!}>
