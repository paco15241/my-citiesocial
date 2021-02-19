@if(session('message'))
    <div class="w-full bg-green-400 rounded-md py-2" x-data="{ open: true }" x-show="open === true">
        <div class="container mx-auto flex items-center justify-between w-full p-2 text-white">
            <span>
                <i class="fas fa-comment mr-1"></i>{{ session()->get('message') }}
            </span>
            <i class="fas fa-times cursor-pointer" @click="open = false"></i>
        </div>
    </div>
@endif
