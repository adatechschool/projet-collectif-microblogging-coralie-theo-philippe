<x-guest-layout>
    <form method="POST" action="{{ route('post') }}">
        @csrf

        <!-- Title -->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

       <!-- Picture -->
       <div>
            <x-input-label for="picture" :value="__('Picture')" />
            <x-text-input id="picture" class="block mt-1 w-full" type="picture" name="picture" :value="old('picture')" required autofocus autocomplete="picture" />
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>

       <!-- Content -->
       <div>
            <x-input-label for="content" :value="__('Content')" />
            <x-text-input id="content" class="block mt-1 w-full" type="content" name="content" :value="old('content')" required autofocus autocomplete="content" />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
        

            <x-primary-button class="ms-4">
                {{ __('post') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
