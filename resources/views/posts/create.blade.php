<x-layout>
    <section class="px-6 py-8">
        <x-pannel class="max-w-sm mx-auto">
            <form action="/admin/posts" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" required />

                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>
                    <textarea name="excerpt" id="" rows="5" class="w-full text-sm focus:outline-none focus:ring" required></textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                    <textarea name="body" id="" rows="5" class="w-full text-sm focus:outline-none focus:ring" required></textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
                    <select name="category" id="category">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ucwords($category->name)}}</option>

                        @endforeach
                    </select>
                    @error('body')
                        <p class="text-red-500 text-xs mt-2">{{ $messages }}</p>
                    @enderror
                </div>

                <x-submit-button>
                    Submit
                </x-submit-button>
            </form>
        </x-pannel>
    </section>
</x-layout>
