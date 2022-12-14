<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 pt-4 pb-12 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-2xl text-md font-medium">{{ $book->title }}</h1>
                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-center whitespace-no-wrap border-b border-gray-200">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                開始日</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                学習完了期限</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                総ページ</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                １日に読むページ数</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-4 py-3">{{ $book->start_date }}</td>
                                            <td class="px-4 py-3">{{ $book->due_date }}</td>
                                            <td class="px-4 py-3">{{ $book->page }}</td>
                                            <td class="px-4 py-3">{{ $book->page_per_day }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="my-8 px-12 text-lg">
                                    今のペースだと<span class="font-bold">{{ $completion_date->format('Y年m月d日') }}</span>に読み終わる
                                </div>
                                <div class="p-4">
                                    <button type="button" onclick="location.href='{{ route('books.edit', $book->id) }}'"
                                        class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                        編集
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
