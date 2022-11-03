<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-4">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-4 mx-auto">
                            <div class="flex flex-col text-center w-full mb-10">
                                <h1 class="sm:text-2xl text-md font-medium">登録した参考書</h1>
                            </div>
                            <div class="mb-4 ml-4">
                                <button type="button" onclick="location.href='{{ route('books.create') }}'" class="text-blue-500">本を登録</a>
                            </div>
                            <div class="flex flex-wrap -m-4">
                                @foreach ($books as $book)
                                    <div class="p-4 md:w-1/3">
                                        <div class="flex rounded-lg h-full bg-slate-50 shadow-md hover:shadow-lg p-8 flex-col">
                                            <div class="flex items-center mb-6">
                                                <div
                                                    class="w-6 h-6 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                    </svg>
                                                </div>
                                                <h2 class="text-gray-900 text-lg font-medium">{{ $book->title }}</h2>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="leading-relaxed text-base">
                                                    学習期限: {{ $book->due_date }}<br>
                                                    総ページ数: {{ $book->page }}<br>
                                                    勉強開始日: {{ $book->start_date }}<br>
                                                </p>
                                                <button type="button" onclick="location.href='{{ route('books.show', $book->id) }}'" class="mt-3 text-blue-500 inline-flex items-center">check
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
