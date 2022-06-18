@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'input bg-grey rounded focus:ring-0 focus:outline-none focus:border-0']) !!}>
