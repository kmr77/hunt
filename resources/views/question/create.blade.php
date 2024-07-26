<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の新規作成
        </h2>
        <x-input-error class="mb-4" :messages="$errors->all()"/>

        <x-message :message="session('message')" />
    </x-slot>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mx-4 sm:p-8">
        <form method="post" action="{{route('question.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="md:flex items-center mt-8">
                <div class="w-full flex flex-col">
                <label for="title" class="font-semibold leading-none mt-4">カテゴリ</label>
                <select name="category_num" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md">
                    <option value="1">銃猟一種</option>
                    <option value="2">銃猟二種</option>
                    <option value="3">わな</option>
                    <option value="4">網</option>
                </select>
                </div>
            </div>

            <div class="md:flex items-center mt-8">
                <div class="w-full flex flex-col">
                <label for="title" class="font-semibold leading-none mt-4">問題</label>
                <input type="text" name="question" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="question" value="{{old('question')}}" placeholder="問題">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold leading-none mt-4">答え</label>
                <input type="text" name="answer" class="w-auto py-2 placeholder-gray-300 border border-gray-300 rounded-md" id="answer" value="{{old('answer')}}" placeholder="答え">
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
            
        </form>
    </div>
</div>

</x-app-layout>