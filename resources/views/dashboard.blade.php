<x-app-layout>
    <x-slot name="dashboard">


<div class="grid grid-cols-9 grid-rows-1 h-8  overflow-x-auto mt-1 mx-2 relative bg-gray-100 shadow-md sm:rounded-md mt-4 border border-gray-400">
<div class=" text-center font-medium text-slate-600 ">Image</div>
<div class="text-center font-medium text-slate-600">Tilte</div>
<div class="text-center font-medium text-slate-600">Category</div>
<div class="text-center font-medium text-slate-600">Price</div>
<div class="text-center font-medium text-slate-600">Description</div>
<div class="text-center pl-2 font-medium text-slate-600">Location</div>
<div class="text-center font-medium text-slate-600 pl-2">Created</div>
<div class="text-center font-medium text-slate-600">Modify</div>
<div class="text-center font-medium text-slate-600">Action</div>
</div>

@foreach($posts as $post)
                    <?php 
                    $image1=URL::asset('/images/camera.png');
                    if(isset($post->image1)){
                      $image1=$post->image1;
                      $image1=Storage::url($post->image1);
                    }
                    ?>
<form action="{{route('dashboard_update_ad')}}" method="POST" class=""> 
    @csrf
{{-- <button type="submit" value={{$post->id}} name="id" class="hover:bg-gray-100 ">             --}}

    <div class="grid  grid-cols-9 grid-rows-1  text-base overflow-x-auto mt-1 mx-2 relative shadow-md sm:rounded-lg mt-4 border border-gray-400">
    <div class="  texto text-left text-ellipsis overflow-hidden p-2"> <img src="{{$image1}}" alt=""> </div>
    <div class=" flex items-center texto text-center text-ellipsis overflow-hidden pl-2 pr-2"style="border-left:solid 1px; border-color:rgb(216, 216, 216)"> <p>{{$post->title}}</p>  </div>
    <div class=" texto text-center flex items-center text-ellipsis overflow-hidden pl-2 pr-2" style="border-left:solid 1px; border-color:rgb(216, 216, 216)">{{$post->category_id}}</div>
    <div class=" texto text-center flex items-center text-ellipsis overflow-hidden pl-2 pr-2" style="border-left:solid 1px; border-color:rgb(216, 216, 216)">{{$post->price}}</div>
    <div class=" texto text-left flex items-center text-ellipsis overflow-hidden pl-2 pr-2" style="border-left:solid 1px; border-color:rgb(216, 216, 216)">{{$post->description}}</div>
    <div class=" texto text-center flex items-center text-ellipsis overflow-hidden pl-2 pr-2" style="border-left:solid 1px; border-color:rgb(216, 216, 216)" >{{$post->location}}</div>
    <div class=" texto text-left flex items-center text-ellipsis overflow-hidden pl-2 pr-2" style="border-left:solid 1px; border-color:rgb(216, 216, 216)">{{$post->created_at}}</div>
    <div class=" texto text-left  flex items-center text-ellipsis overflow-hidden pl-2 pr-2" style="border-left:solid 1px; border-color:rgb(216, 216, 216)"> {{$post->updated_at}}</div>
    <div class=" space-x-2 font-mono texto text-left flex items-center text-ellipsis overflow-hidden pl-2 pr-2" style="border-left:solid 1px; border-color:rgb(216, 216, 216) ">
        <div class="grid w-full "><button href="" type="submit" value={{$post->id}} name="id" class=" inline font-medium text-center  rounded-md  hover:text-white hover:bg-gradient-to-r from-blue-900 via-blue-600 to-blue-500 text-blue-700 bg-white border border-blue-700 rounded-md pl-1 pr-1">Edit</a></div>
        </form>
            <form action="{{route('delete_ad',['id'=>$post->id])}}" method='POST'>
                @csrf
            <div class="grid w-full "><button href="" value={{$post->id}} name="id" class="inline font-medium text-center text-white rounded-md hover:text-white hover:bg-gradient-to-r from-red-900 via-red-600 to-red-500 text-red-800 bg-white border border-red-700 rounded-md ">Delete</button></div>
    </div>
</div>
{{-- </button>  --}}
</form>
    @endforeach

</x-slot>

</x-app-layout>