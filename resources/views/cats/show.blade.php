<div>
    <h2 >
         {{ __('Add new Cat') }}
    </h2>
    <form enctype="multipart/form-data" class="mt-6 space-y-6" style="color:DarkRed;" method="POST" action="{{ route('cats.store')}}">
        @csrf
        <div>
            <x-input-label for="Header" :value="__('Header')" />
            <x-text-input id="Header" name="header" type="text" class="mt-1 block w-full" />
        </div>
        <div>
            <x-input-label for="Text" :value="__('Text')" />
            <x-text-input id="Text" name="text" type="text" class="mt-1 block w-full" />
        </div>
        <div>
            <x-input-label for="Image" :value="__('Image')" />
            <x-text-input id="Image" name="image" type="file" class="mt-1 block w-full" />
        </div>

        <x-primary-button class="ml-3">
            {{ __('POST') }}
        </x-primary-button>
    </form>
</div>
