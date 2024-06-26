@props(['job'])

<div class="p-4 bg-white rounded flex flex-row gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration:300 shadow-md shadow-gray-400">
    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->title }}</a>
        <h3 class="font-bold text-xl mt-2 group-hover:text-blue-800 transition-colors duration:300">
            <a href="{{$job->url}}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - Salary Tk. {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
        <x-tag :$tag>Frontend</x-tag>
        @endforeach


    </div>
</div>