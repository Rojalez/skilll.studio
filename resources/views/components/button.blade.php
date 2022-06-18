<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn no-animation tracking-widest rounded text-white btn-'.$color ]) }}>
    {{ $slot }}
</button>
