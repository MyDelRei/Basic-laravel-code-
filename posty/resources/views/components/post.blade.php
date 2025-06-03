@props(['post'=>$post])
<div>
    <a href="{{ route('user.posts',$post->user) }}">{{ $post->user->name }}</a>
    <p>Posted : {{ $post->created_at->diffForHumans() }}</p>
    <p>{{ $post-> body }}</p>
    <div class="flex items-center">
        @if (!$post->likedBy(auth()->user()))
            <form action="{{ route('posts.like',$post->id) }}" method="post" class="mr-1" >
                @csrf
                <button type="submit" class="text-blue-500 cursor-pointer">Like</button>
            </form>
        @else
            <form action="{{ route('posts.unlike',$post->id) }}" method="post" class="mr-1" >
                @csrf
                @method("DELETE")
                <button type="submit" class="text-blue-500 cursor-pointer">Unlike</button>
            </form>

        @endif

        @can('delete',$post)
        <form action="{{ route('posts.delete',$post) }}" method="post" class="mr-1" >
            @csrf
            @method("DELETE")
            <button type="submit" class="text-blue-500 cursor-pointer">Delete</button>
        </form>
        @endcan
            

        

       
    </div>

    <span>{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count()) }}</span>
</div>