<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <section class="text-gray-600 body-font">
                        <div class="container mx-auto flex px-5 py-4 items-center justify-center flex-col">
                            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero"
                                src="/images/hero.png">
                            <div class="text-center lg:w-2/3 w-full">
                                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">sutakan</h1>
                                <p class="mb-8 leading-relaxed">参考書を管理して、学習計画を立てよう</p>
                                <div class="flex justify-center">
                                    @guest
                                    <button onclick="location.href='{{ route('login') }}'"
                                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">ログイン
                                    </button>
                                    <button onclick="location.href='{{ route('register') }}'"
                                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">新規登録
                                    </button>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
