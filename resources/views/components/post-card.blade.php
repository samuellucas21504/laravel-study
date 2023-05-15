<a class="w-full border border-gray-400 p-3 rounded-md cursor-pointer hover:bg-gray-200 transition-all ease-in-out delay-100" href="{{route('post', $post->slugged_title)}}">
    <div class="flex flex-row items-baseline justify-between">
        <div class="font-bold text-2xl text-gray-950">
            {{$post->title}}
        </div>
        <div class="flex flex-row gap-1 text-gray-600 text-sm">
            <div>{{$post->user->name}}</div>
            <div>{{date('d/m/Y', strtotime($post->publish_date))}}</div>
        </div>
    </div>
    <div>
        {{trim(substr($post->description, 0, 48)) . "..."}}
    </div>
</a>
