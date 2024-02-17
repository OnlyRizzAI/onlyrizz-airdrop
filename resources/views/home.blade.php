<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OnlyRizz</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased text-white bg-[#101920]">
        <div class="">
            <header class="absolute inset-x-0 top-0 z-50">
                <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="/" class="-m-1.5 p-1.5 text-3xl font-bold tracking-tight">
                            Only<span class="text-[#d41e55]">Rizz</span>
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-8">
                        @foreach($socials as $social)
                            <a href="{{ $social['link'] }}" target="_blank">
                                <div class="bg-[#d83666] rounded-full w-12 h-12 flex items-center justify-center">
                                    {{ svg($social['icon'], 'w-6 h-6 text-white') }}
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        @guest()
                            <a href="/auth/redirect" class="flex items-center px-4 py-2 bg-[#ff1058] rounded-md text-white font-bold">
                                Connect <span class="w-2"></span> @svg('fab-x-twitter', 'text-white w-6 h-6')
                            </a>
                        @endguest
                    </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div class="lg:hidden" role="dialog" aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0 z-50"></div>
                    <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                            </a>
                            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-500/10">
                                <div class="space-y-2 py-6">
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                                </div>
                                <div class="py-6">
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="relative isolate overflow-hidden bg-gradient-to-b from-[#c01b4c]-100/20 pt-14">
                <div class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-[#1a1f24] shadow-xl shadow-[#ff1058]-600/10 ring-1 ring-[#ff1058] sm:-mr-80 lg:-mr-96" aria-hidden="true"></div>
                <div class="mx-auto max-w-7xl px-6 py-32 sm:py-40 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">
                        <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-white sm:text-6xl lg:col-span-2 xl:col-auto">
                            Only<span class="text-[#d41e55]">Rizz</span> Engagement Airdrop
                        </h1>
                        <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                            <p class="text-lg leading-8 text-gray-100 font-bold">
                                Earn rewards for engaging.
                            </p>
                            <div class="mt-10 flex items-center gap-x-6">
                                @guest()
                                    <a href="/auth/redirect" class="flex items-center px-4 py-2 bg-[#ff1058] rounded-md text-white font-bold ring-2 ring-white/80">
                                        Connect <span class="w-2"></span> @svg('fab-x-twitter', 'text-white w-6 h-6')
                                    </a>
                                @endguest
                            </div>
                        </div>
                        <img src="https://images.unsplash.com/photo-1567532900872-f4e906cbf06a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1280&q=80" alt="" class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-cover sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">
                    </div>
                </div>
                <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-[#101920] sm:h-32"></div>
            </div>
        </div>

        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40 bg-[#101920]">
            @auth()
                <div class="text-3xl font-bold left-4 w-48 sm:w-fit mb-4">
                    Available Tasks
                </div>

                <form id="taskForm" method="POST" class="hidden">
                    @csrf
                </form>

                @foreach($tasks as $task)
                    <div class="flex justify-between bg-[#1a1f24] rounded-lg border border-red-500/25 py-4 px-4 mb-4">
                        <div @click="click">
                            @if($task->link)
                                <button type="button" class="flex items-center font-bold text-lg hover:underline" x-data @click.prevent="onTaskClicked({{ $task->id }})">
                                    {{ $task->title }} <div class="w-3"></div> <x-fas-arrow-up-right-from-square class="w-4 h-4" />
                                </button>
                            @else
                                <div class="font-bold text-lg">
                                    {{ $task->title }}
                                </div>
                            @endif

                            @if($task->help_text)
                                <div class="text-sm text-gray-200">
                                    {{ $task->help_text }}
                                </div>
                            @endif

                            @if($task->pivot->isCompleted())
                                <span class="inline-flex items-center rounded-md bg-pink-400/10 px-2 py-1 text-xs font-medium text-pink-400 ring-1 ring-inset ring-pink-400/20 mt-2">
                                    Verification Pending
                                </span>
                            @else
                                <div class="text-sm">
                                    Expires {{ (new \Carbon\Carbon($task->expires_at))->diffForHumans() }}
                                </div>
                            @endif
                        </div>

                        <div class="self-center font-bold text-red-500 text-xl">
                            + {{ $task->points }} pts
                        </div>
                    </div>
                @endforeach
            @endauth
        </div>

        <div class="bg-[#101920]">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
                <div class="mx-auto max-w-4xl divide-y divide-gray-100/10">
                    <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-100">
                        Frequently asked questions
                    </h2>
                    <dl class="mt-10 space-y-6 divide-y divide-gray-100/10">
                        <div class="pt-6">
                            <dt>
                                <!-- Expand/collapse question button -->
                                <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                                    <span class="text-base font-semibold leading-7">What&#039;s the best thing about Switzerland?</span>
                                    <span class="ml-6 flex h-7 items-center text-white">
                                        <!--
                                          Icon when question is collapsed.

                                          Item expanded: "hidden", Item collapsed: ""
                                        -->
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                        </svg>
                                        <!--
                                          Icon when question is expanded.

                                          Item expanded: "", Item collapsed: "hidden"
                                        -->
                                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                        </svg>
                                      </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" id="faq-0">
                                <p class="text-base leading-7 text-gray-200">I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                            </dd>
                        </div>

                        <!-- More questions... -->
                    </dl>
                </div>
            </div>
        </div>
    </body>
</html>
