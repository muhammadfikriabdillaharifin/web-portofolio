@extends('layouts.app')

@section('content')
    <section class="bg-neutral-primary flex h-screen flex-col items-center justify-center">
        <div class="mx-auto max-w-screen-2xl px-4 py-8 text-center lg:py-16">
            <h1 class="text-heading mb-6 text-4xl font-bold tracking-tighter md:text-5xl lg:text-6xl">We invest in the world’s potential</h1>
            <p class="text-body mb-8 text-base font-normal md:text-xl">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock
                long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
                <button type="button"
                    class="bg-brand hover:bg-brand-strong focus:ring-brand-medium shadow-xs rounded-base box-border inline-flex items-center justify-center border border-transparent px-5 py-3 text-base font-medium text-white focus:outline-none focus:ring-4">
                    Getting started
                    <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </button>
                <button type="button"
                    class="text-body bg-neutral-secondary-medium border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-neutral-tertiary shadow-xs rounded-base box-border border px-5 py-3 text-base font-medium leading-5 focus:outline-none focus:ring-4">Learn
                    more</button>
            </div>
        </div>
    </section>
@endsection
