@props(['align' => 'left'])

@php
    $textalignClass = [
        'left' => 'text-left',
        'right' => 'text-right',
        'center' => 'text-center',
][$align] ?? 'text-left';
@endphp

<td class="border px-6 py-4">
    {{ $slot }}
</td>
