<x-app-layout>

<x-slot name="header">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Create New Post') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Input what you will put in your post.") }}
        </p>
    </header>
</x-slot>

<x-slot name="slot"><div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
            <form enctype="multipart/form-data" class="mt-6 space-y-6" style="color:DarkRed;" method="POST" action="{{ route('api.postCats')}}">
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
    </div>
</div>
</x-slot>

</x-app-layout>