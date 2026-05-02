<x-layouts.app title="{{ $form->page_title }} | Parroquia Cristo Resucitado" description="{{ Str::limit(strip_tags((string) ($form->page_subtitle ?? '')), 160) }}">

    <section class="relative w-full bg-text-dark text-white overflow-hidden py-14 md:py-20">
        <div class="absolute inset-0 z-0 opacity-25 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-secondary/40 via-transparent to-transparent"></div>
        <div class="relative z-10 max-w-[900px] mx-auto px-4 text-center">
            @if(filled($form->badge_label))
                <span class="inline-flex items-center gap-1 rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white backdrop-blur-sm mb-4">
                    {{ $form->badge_label }}
                </span>
            @endif
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-black tracking-tight mb-4">
                {{ $form->page_title }}
            </h1>
            @if(filled($form->page_subtitle))
                <p class="text-gray-300 text-lg max-w-xl mx-auto leading-relaxed">
                    {{ $form->page_subtitle }}
                </p>
            @endif
        </div>
    </section>

    <section class="py-12 md:py-16 bg-background-light dark:bg-background-dark">
        <div class="max-w-xl mx-auto px-4">
            <div class="bg-white dark:bg-[#211c11] rounded-2xl p-8 shadow-sm border border-gray-100 dark:border-gray-800">
                @error('db')
                    <div class="mb-6 rounded-xl border border-red-200 dark:border-red-900/50 bg-red-50 dark:bg-red-950/30 px-4 py-3 text-sm text-red-800 dark:text-red-200">
                        {{ $message }}
                    </div>
                @enderror

                @error('form')
                    <div class="mb-6 rounded-xl border border-red-200 dark:border-red-900/50 bg-red-50 dark:bg-red-950/30 px-4 py-3 text-sm text-red-800 dark:text-red-200">
                        {{ $message }}
                    </div>
                @enderror

                <form action="{{ route('forms.store', ['slug' => $form->slug]) }}" method="POST" class="space-y-6">
                    @csrf

                    @foreach ($form->fields ?? [] as $field)
                        @php
                            $key = $field['key'] ?? '';
                            $label = $field['label'] ?? $key;
                            $type = $field['type'] ?? 'text';
                            $required = filter_var($field['required'] ?? false, FILTER_VALIDATE_BOOLEAN);
                        @endphp
                        @continue($key === '')

                        <div>
                            <label for="field_{{ $key }}" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ $label }}</label>

                            @if ($type === 'textarea')
                                <textarea name="{{ $key }}" id="field_{{ $key }}" rows="4"
                                    class="w-full rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary px-4 py-3 outline-none transition-colors"
                                    {{ $required ? 'required' : '' }}>{{ old($key) }}</textarea>
                            @else
                                @php $inputType = match ($type) { 'email' => 'email', 'tel' => 'tel', default => 'text' }; @endphp
                                <input type="{{ $inputType }}" name="{{ $key }}" id="field_{{ $key }}" value="{{ old($key) }}"
                                    class="w-full rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors"
                                    {{ $required ? 'required' : '' }}>
                            @endif

                            @error($key)
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    @endforeach

                    <button type="submit" class="w-full btn-primary justify-center py-3.5 text-base font-bold">
                        <span class="material-symbols-outlined text-xl">how_to_reg</span>
                        Enviar
                    </button>
                </form>
            </div>
            <p class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
                <a href="{{ route('home') }}" class="text-primary hover:underline">← Volver al inicio</a>
            </p>
        </div>
    </section>
</x-layouts.app>
