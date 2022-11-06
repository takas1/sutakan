<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-4">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-4 mx-auto">
                            <div class="flex flex-col text-center w-full mb-10">
                                <h1 class="sm:text-2xl text-md font-medium mb-10">削除した参考書</h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">※ゴミ箱に入れてから30日経つと完全に削除されます</p>
                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                タイトル</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                        <tr>
                                            <td class="px-4 py-3 border-t-2 border-gray-200">{{ $book->title }}</td>
                                            <td class="px-2 py-3 border-t-2 border-gray-200">
                                                <button
                                                    class="flex ml-auto text-white text-sm bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded">
                                                    元に戻す
                                                </button>
                                            </td>
                                            <td class="px-2 py-3 border-t-2 border-gray-200">
                                                <button
                                                    class="flex ml-auto text-white text-sm bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded">
                                                    完全に削除
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
