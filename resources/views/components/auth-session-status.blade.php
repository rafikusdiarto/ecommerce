@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative']) }}>
        {{-- {{ $status }} --}}
        Register successfully, please login here !
    </div>
@endif
