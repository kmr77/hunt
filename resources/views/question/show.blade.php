<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の個別表示
        </h2>

        <x-message :message="session('message')" />

    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-4 sm:p-8">
            <div class="px-10 mt-4">

                <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                    <div class="mt-4">
                        <h1 class="text-lg text-gray-700 font-semibold">
                            {{ $question->question }}
                            <a href="{{route('question.edit', $question)}}"><x-primary-button class="bg-teal-700 float-right">編集</x-primary-button></a>
                        </h1>
                        <hr class="w-full">
                        
                        <p class="mt-4 text-gray-600 py-4 whitespace-pre-line"><span class="answer">{{$question->answer}}</span></p>
                        <div class="text-sm font-semibold flex flex-row-reverse">
                            <p> {{ $question->user->name }} • {{$question->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>