@props([
    'Question',
    'Answer',
    'Id',
])

<div class="border-b border-[#C9C2BC]">
    <h2 id="faq-heading-{{ $Id }}">
        <button
            type="button"
            class="flex items-center justify-between w-full gap-4 py-5 text-left"
            data-accordion-target="#faq-body-{{ $Id }}"
            aria-expanded="false"
            aria-controls="faq-body-{{ $Id }}"
        >
            <span class="text-base md:text-card-title font-normal leading-snug text-black hover:text-primary">
                {{ $Question }}
            </span>

            <svg
                data-accordion-icon
                class="w-4 h-4 shrink-0 text-[#A6A09A]"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.8"
                    d="m5 15 7-7 7 7"
                />
            </svg>
        </button>
    </h2>

    <div
        id="faq-body-{{ $Id }}"
        class="hidden"
        aria-labelledby="faq-heading-{{ $Id }}"
    >
        <div class="pb-5 leading-relaxed">
            <p class="text-black/55 text-sm md:text-body ">{{ $Answer }}</p>
        </div>
    </div>
</div>
