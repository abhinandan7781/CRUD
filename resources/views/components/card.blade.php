@props(['highlight'=>false])

<div class="card group hover:transform hover:scale-[1.02] duration-300">
    <div class="prose">
        {{  $slot }}
    </div>
    <div class="mt-6 flex space-x-4">
        <a href="{{ $attributes->get('href') }}" class="btn-secondary group-hover:shadow-lg">
            <span class="inline-block">👁️ View Details</span>
        </a>
        <a href="{{ str_replace('show', 'edit', $attributes->get('href')) }}" class="btn-primary group-hover:shadow-lg">
            <span class="inline-block">✏️ Edit</span>
        </a>
    </div>
</div>