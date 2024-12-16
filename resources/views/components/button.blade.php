@aware(['type' => 'error'])

{{-- Btn class --}}
<button
    {{ $attributes
        ->merge(['type' => 'button', 'data-customerid' => 1])
        ->class(['flex items-center justify-center px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-md cursor-pointer hover:bg-gray-50 fw-medium'])
    }}
>
    @if ($type == 'success')
        Sucesso
    @endif
    @if ($type == 'error')
        Erro
    @endif
</button>
