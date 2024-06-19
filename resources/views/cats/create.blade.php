<div>
    <h2 >
         {{ __('Add new Cat') }}
    </h2>
    <form enctype="multipart/form-data" class="mt-6 space-y-6" style="color:DarkRed;" method="POST" action="{{ route('cats.store')}}">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="Name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name') }}"/>
            @error('name')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-input-label for="dob" :value="__('Date Of Birth')" />
            <x-text-input id="Dob" name="dob" type="text" class="mt-1 block w-full" value="{{ old('dob') }}"/>
            @error('dob')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <x-input-label for="owner_name" :value="__('Name of the owner')" />
            <x-text-input id="Owner_name" name="owner_name" type="owner_name" class="mt-1 block w-full" value="{{ old('owner_name') }}"/>
            @error('owner_name')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>

        <x-primary-button class="ml-3">
            {{ __('POST') }}
        </x-primary-button>
    </form>
</div>
