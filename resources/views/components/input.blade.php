@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-green-600 rounded-xl focus:border-green-500 focus:ring-green-500  shadow-sm']) !!}>
