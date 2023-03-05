<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-outline-primary']) }}>
    {{ $slot }}
</button>
