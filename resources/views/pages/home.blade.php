@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="bg-neutral-primary flex h-screen flex-col items-center justify-center">
        <div class="mx-auto max-w-3xl px-4 py-8 text-center lg:py-16">
            <div class="max-w-(50vw)">
                <p class="text-body mb-8 text-base font-normal uppercase md:text-xl">Get to know me</p>
                <h1 class="text-heading mb-6 text-2xl font-bold tracking-tighter md:text-3xl lg:text-4xl">Hi, I'm Muhammad Fikri Abdillah Arifin
                </h1>
                <h1 class="text-heading mb-6 text-2xl font-bold tracking-tighter md:text-3xl lg:text-4xl">a Software Engineer
                </h1>
                <p class="text-body mb-8 text-base font-normal md:text-xl">I have passion for Web, Desktop, and Mobile platforms. Fueled by an interest
                    in Machine Learning and Cybersecurity, I strive to build secure, data-driven solutions for real-world impact.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
                    <a href="#about-me"
                        class="bg-brand hover:bg-brand-strong focus:ring-brand-medium shadow-xs rounded-base box-border inline-flex items-center justify-center border border-transparent px-5 py-3 text-base font-medium text-white focus:outline-none focus:ring-4">
                        More About Me
                        <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-me" class="scroll-mt-8 bg-white p-8 dark:bg-gray-900">
        <h1 class="mb-6 text-left text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
            About Me
        </h1>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

            <div class="flex flex-col justify-center p-6 text-justify md:col-span-2 dark:border-gray-700 dark:bg-gray-800">
                <p class="text-lg font-normal leading-relaxed text-gray-500 dark:text-gray-400">
                    Saya adalah seorang pengembang web yang berfokus pada ekosistem Laravel dan teknologi frontend modern seperti Vue.js dan Tailwind CSS.
                    <br><br>
                    Dengan pengalaman dalam membangun aplikasi skala enterprise, saya menikmati tantangan dalam menciptakan kode yang bersih, efisien, dan mudah
                    dipelihara. Teks ini sengaja dibuat agak panjang untuk mendemonstrasikan bagaimana gambar di sebelahnya akan menyesuaikan tingginya secara
                    otomatis.
                </p>
            </div>

            <div class="relative h-full overflow-hidden rounded-lg shadow-xl md:col-span-1 dark:shadow-gray-800">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" class="absolute inset-0 h-full w-full object-cover"
                    alt="Profile Image">
            </div>

        </div>
    </section>

    <section id="interests" class="scroll-mt-8 bg-gray-50 p-8 dark:bg-gray-900/50">
        <h1 class="mb-8 text-left text-3xl font-extrabold uppercase tracking-tight text-gray-900 dark:text-white">
            Interests
        </h1>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-5">

            <div class="flex items-center rounded-lg border border-blue-100 bg-blue-50/50 p-4 dark:border-gray-700 dark:bg-gray-800">
                <img class="h-10 w-10 object-contain" src="https://www.svgrepo.com/show/355248/cyber-security.svg" alt="Cybersecurity">
                <div class="ml-4">
                    <p class="text-left text-xs font-bold uppercase tracking-wider text-blue-800 dark:text-blue-400">Cybersecurity</p>
                </div>
            </div>

            <div class="flex items-center rounded-lg border border-purple-100 bg-purple-50/50 p-4 dark:border-gray-700 dark:bg-gray-800">
                <img class="h-10 w-10 object-contain" src="https://www.svgrepo.com/show/355081/artificial-intelligence.svg" alt="Machine Learning">
                <div class="ml-4">
                    <p class="text-left text-xs font-bold uppercase tracking-wider text-purple-800 dark:text-purple-400">Machine Learning</p>
                </div>
            </div>

            <div class="flex items-center rounded-lg border border-green-100 bg-green-50/50 p-4 dark:border-gray-700 dark:bg-gray-800">
                <img class="h-10 w-10 object-contain" src="https://www.svgrepo.com/show/449724/code.svg" alt="Web Development">
                <div class="ml-4">
                    <p class="text-left text-xs font-bold uppercase tracking-wider text-green-800 dark:text-green-400">Web Dev</p>
                </div>
            </div>

            <div class="flex items-center rounded-lg border border-orange-100 bg-orange-50/50 p-4 dark:border-gray-700 dark:bg-gray-800">
                <img class="h-10 w-10 object-contain" src="https://www.svgrepo.com/show/449942/smartphone.svg" alt="Mobile Development">
                <div class="ml-4">
                    <p class="text-left text-xs font-bold uppercase tracking-wider text-orange-800 dark:text-orange-400">Mobile Dev</p>
                </div>
            </div>

            <div class="flex items-center rounded-lg border border-indigo-100 bg-indigo-50/50 p-4 dark:border-gray-700 dark:bg-gray-800">
                <img class="h-10 w-10 object-contain" src="https://www.svgrepo.com/show/449755/desktop-computer.svg" alt="Desktop Development">
                <div class="ml-4">
                    <p class="text-left text-xs font-bold uppercase tracking-wider text-indigo-800 dark:text-indigo-400">Desktop Dev</p>
                </div>
            </div>

        </div>
    </section>

    <section id="tech-stack" class="scroll-mt-8 bg-white p-8 dark:bg-gray-900">
        <h1 class="mb-8 text-left text-3xl font-extrabold uppercase tracking-tight text-gray-900 dark:text-white">
            Tech Stack
        </h1>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">Laravel 12</p>
                </div>
            </div>

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">Node.js</p>
                </div>
            </div>

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg" alt="CodeIgniter">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">CodeIgniter</p>
                </div>
            </div>

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">Python</p>
                </div>
            </div>

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">JavaScript</p>
                </div>
            </div>

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="SQL">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">SQL & Database</p>
                </div>
            </div>

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg"
                    alt="Tailwind CSS">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">Tailwind CSS</p>
                </div>
            </div>

            <div
                class="flex items-center rounded-lg border border-gray-200 bg-white p-3 shadow-sm transition-shadow hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <img class="h-8 w-8 object-contain" src="https://www.vectorlogo.zone/logos/flowbite/flowbite-icon.svg" alt="Flowbite">
                <div class="ml-3">
                    <p class="text-left text-xs font-bold uppercase text-gray-900 dark:text-white">Flowbite</p>
                </div>
            </div>

        </div>
    </section>

    <section id="projects" class="scroll-mt-8 bg-white p-8 dark:bg-gray-900">
        <h1 class="mb-8 text-left text-3xl font-extrabold uppercase tracking-tight text-gray-900 dark:text-white">
            Projects
        </h1>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:gap-12">

            <div class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="Project Integration">
                </div>

                <div class="flex grow flex-col p-5">
                    <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Integration System SIPD & E-Renggar
                    </h2>
                    <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                        Pengembangan konsep bridging data antara sistem informasi perencanaan pembangunan daerah (Kemendagri) dengan e-Renggar (Kemenkes RI) untuk
                        sinkronisasi anggaran kesehatan.
                    </p>

                    <div class="mt-auto border-t border-gray-100 pt-4 dark:border-gray-700">
                        <p class="text-2xs mb-2 font-semibold uppercase text-gray-400">Built with:</p>
                        <div class="flex flex-wrap gap-2">
                            <div class="flex items-center rounded border border-gray-200 bg-gray-50 px-2 py-1 dark:border-gray-600 dark:bg-gray-700">
                                <img class="mr-1.5 h-3 w-3 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                                    alt="Laravel">
                                <span class="text-2xs font-bold uppercase text-gray-700 dark:text-gray-200">Laravel</span>
                            </div>
                            <div class="flex items-center rounded border border-gray-200 bg-gray-50 px-2 py-1 dark:border-gray-600 dark:bg-gray-700">
                                <img class="mr-1.5 h-3 w-3 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                                    alt="SQL">
                                <span class="text-2xs font-bold uppercase text-gray-700 dark:text-gray-200">SQL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="Renkesda System">
                </div>

                <div class="flex grow flex-col p-5">
                    <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Reporting System Renkesda 2025
                    </h2>
                    <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">
                        Sistem pelaporan kegiatan pelatihan Perencanaan Pembangunan Kesehatan (Renkesda) untuk memonitoring progres perencanaan di tingkat
                        Kabupaten/Kota.
                    </p>

                    <div class="mt-auto border-t border-gray-100 pt-4 dark:border-gray-700">
                        <p class="text-2xs mb-2 font-semibold uppercase text-gray-400">Built with:</p>
                        <div class="flex flex-wrap gap-2">
                            <div class="flex items-center rounded border border-gray-200 bg-gray-50 px-2 py-1 dark:border-gray-600 dark:bg-gray-700">
                                <img class="mr-1.5 h-3 w-3 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"
                                    alt="Python">
                                <span class="text-2xs font-bold uppercase text-gray-700 dark:text-gray-200">Python</span>
                            </div>
                            <div class="flex items-center rounded border border-gray-200 bg-gray-50 px-2 py-1 dark:border-gray-600 dark:bg-gray-700">
                                <img class="mr-1.5 h-3 w-3 object-contain" src="https://www.vectorlogo.zone/logos/flowbite/flowbite-icon.svg" alt="Flowbite">
                                <span class="text-2xs font-bold uppercase text-gray-700 dark:text-gray-200">Flowbite</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="certificates" class="scroll-mt-8 bg-gray-50 p-8 dark:bg-gray-900/50">
        <h1 class="mb-8 text-left text-3xl font-extrabold uppercase tracking-tight text-gray-900 dark:text-white">
            Certificates
        </h1>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:gap-12">

            <div
                class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition-all hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Google Cybersecurity">
                </div>
                <div class="flex grow flex-col p-5">
                    <h2 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Google Cybersecurity Professional Certificate</h2>
                    <div class="mb-5 flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Google via Coursera</span>
                        <span class="mx-2 text-gray-300">•</span>
                        <span>2025</span>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Validate
                            Certificate</a>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition-all hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="FGA Cybersecurity">
                </div>
                <div class="flex grow flex-col p-5">
                    <h2 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">FGA: Cybersecurity Specialist</h2>
                    <div class="mb-5 flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Komdigi RI x Google</span>
                        <span class="mx-2 text-gray-300">•</span>
                        <span>2025</span>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 dark:bg-blue-600">Validate
                            Certificate</a>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition-all hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="SQL Analytics">
                </div>
                <div class="flex grow flex-col p-5">
                    <h2 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Advanced SQL for Data Analytics</h2>
                    <div class="mb-5 flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>DataCamp</span>
                        <span class="mx-2 text-gray-300">•</span>
                        <span>2024</span>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 dark:bg-blue-600">Validate
                            Certificate</a>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition-all hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="Laravel Developer">
                </div>
                <div class="flex grow flex-col p-5">
                    <h2 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Professional Laravel Developer</h2>
                    <div class="mb-5 flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Dicoding Indonesia</span>
                        <span class="mx-2 text-gray-300">•</span>
                        <span>2024</span>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 dark:bg-blue-600">Validate
                            Certificate</a>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition-all hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="Machine Learning">
                </div>
                <div class="flex grow flex-col p-5">
                    <h2 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Machine Learning Specialization</h2>
                    <div class="mb-5 flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Stanford University x DeepLearning.AI</span>
                        <span class="mx-2 text-gray-300">•</span>
                        <span>2024</span>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 dark:bg-blue-600">Validate
                            Certificate</a>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition-all hover:shadow-md dark:border-gray-700 dark:bg-gray-800">
                <div class="aspect-video w-full overflow-hidden bg-gray-100 dark:bg-gray-700">
                    <img class="h-full w-full object-cover transition-transform duration-300 hover:scale-105"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="Node.js Developer">
                </div>
                <div class="flex grow flex-col p-5">
                    <h2 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Fullstack Node.js Developer</h2>
                    <div class="mb-5 flex items-center text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Udemy Academy</span>
                        <span class="mx-2 text-gray-300">•</span>
                        <span>2023</span>
                    </div>
                    <div class="mt-auto">
                        <a href="#"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 dark:bg-blue-600">Validate
                            Certificate</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="scroll-mt-8 bg-white p-8 dark:bg-gray-900">
        <h1 class="mb-12 text-left text-3xl font-extrabold uppercase tracking-tight text-gray-900 dark:text-white">
            Contact
        </h1>

        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">

            <div class="flex flex-col space-y-8">
                <div>
                    <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Let's Connect</h2>
                    <p class="text-gray-500 dark:text-gray-400">
                        Saya selalu terbuka untuk diskusi mengenai integrasi sistem, analisis data kesehatan, atau peluang kolaborasi lainnya. Silakan hubungi saya
                        melalui saluran di bawah ini.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 dark:bg-blue-900">
                            <svg class="h-5 w-5 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-bold uppercase text-gray-900 dark:text-white">Email</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">anda@email.com</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 dark:bg-blue-900">
                            <svg class="h-5 w-5 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-bold uppercase text-gray-900 dark:text-white">LinkedIn</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">linkedin.com/in/username</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 dark:bg-blue-900">
                            <svg class="h-5 w-5 text-blue-600 dark:text-blue-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-bold uppercase text-gray-900 dark:text-white">Location</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Kementerian Kesehatan RI, Jakarta</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="mb-2 block text-left text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                        <input type="text" id="name"
                            class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email" class="mb-2 block text-left text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                        <input type="email" id="email"
                            class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="message" class="mb-2 block text-left text-sm font-medium text-gray-900 dark:text-white">Message</label>
                        <textarea id="message" rows="4"
                            class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Let's talk about..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full rounded-lg bg-blue-700 px-5 py-3 text-center text-sm font-medium text-white transition-colors hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </section>
@endsection
