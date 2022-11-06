<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-2">
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 pt-4 pb-12 mx-auto">
                            <div class="flex flex-col text-center w-full mb-12">
                                <h1 class="sm:text-2xl text-md font-medium mb-10">参考書の登録</h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">※入力項目はすべて必須です</p>
                            </div>
                            <form action="{{ route('books.store') }}" method="POST">
                                @csrf
                                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    @if ($errors->any())
                                    <div class="text-red-500 mb-6">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="flex flex-wrap -m-2">
                                        <div class="p-2 w-full mb-6">
                                            <div class="relative">
                                                <label for="title" class="leading-7 text-sm text-gray-600">タイトル</label>
                                                <input type="text" id="title" name="title" value="{{ old('title') }}" autofocus
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-1/2 mb-2">
                                            <div class="relative">
                                                <label for="due_date" class="leading-7 text-sm text-gray-600">学習完了期限</label>
                                                <input type="date" id="due_date" name="due_date" value="{{ old('due_date') }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-1/2 mb-2">
                                            <div class="relative">
                                                <label for="start_date" class="leading-7 text-sm text-gray-600">開始日</label>
                                                <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-1/2">
                                            <div class="relative">
                                                <label for="page" class="leading-7 text-sm text-gray-600">総ページ数</label>
                                                <input type="number" id="page" name="page" value="{{ old('page') }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-1/2">
                                            <div class="relative">
                                                <label for="page_per_day" class="leading-7 text-sm text-gray-600">1日に読むページ数</label>
                                                <input type="number" id="page_per_day" name="page_per_day" value="{{ old('page_per_day') }}"
                                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-4 w-full mt-4">
                                            <button type="submit"
                                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                保存
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
