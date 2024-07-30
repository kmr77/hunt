<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            投稿の一覧
        </h2>

        <x-message :message="session('message')" />

    </x-slot>

    {{-- 投稿一覧表示用のコード --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{$user->name}}さん、こんにちは！
        <dl id="accordion">
        @foreach ($questions as $question)
            <dt><span class="question">問{{ $question->id }}）{{ $question->question }}</span><a href="{{route('question.show', $question)}}"><span class="edit-btn">修正</span></a></dt>
            <dd><span class="answer">{{$question->answer}}</span></dd>
            @endforeach
        </dl>
    </div>
</x-app-layout>