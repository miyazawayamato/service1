@if ($errors->any())
    <div {{ $attributes }}>
        {{-- <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div> --}}
        <div class="font-medium text-red-600">上手く操作する事ができませんでした</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif