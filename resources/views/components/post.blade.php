<div class="flex flex-col align-middle w-full ">
    <div class="flex flex-col">
        <div class="font-bold text-4xl">
            {{$post->title}}
        </div>
        <div class="flex flex-row items-center justify-between">
            <div class="text-gray-600">{{$post->user->name}}</div>
            <div class="text-gray-400 text-sm">{{date('d/m/Y H:i', strtotime($post->publish_date))}}</div>
        </div>
    </div>
    <div class="mt-12 text-justify">
        {{$post->description}}
    </div>
</div>
