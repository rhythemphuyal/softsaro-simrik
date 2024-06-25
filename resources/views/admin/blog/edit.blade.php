@extends('admin.layout.main')
@section('body')
    <div class="flex items-center gap-2">
        <a href="{{ route('blogs.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="text-xl font-bold">Edit Blog</div>
    </div>
    <div class="w-full bg-white rounded-lg shadow-lg mt-30 text-slate-600">
        <form method="post" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="p-6 mt-3">
                <div class="flex flex-col">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900" htmlFor="">
                            Blog Title
                        </label>
                        <div>
                            <x-admin.component.input-field name="title" inputType="text" value="{{ $blog->title }}" />
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                            Banner order
                        </label>
                        <div>
                            <x-admin.component.input-field name="banner_order" inputType="text"
                                value="{{ $blog->order }}" />
                        </div>
                    </div>

                    {{-- image --}}
                    <div class="mt-3">
                        <label class='text-sm font-semibold'>Image</label>
                        <x-admin.component.input-field name="blog_image" inputType="file" ids="output"
                            value="{{ $blog->blog_image }}" />

                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                            Blog Description
                        </label>
                        <div>
                            <x-admin.component.textarea class="tinymce" name="description"
                                value="{{ $blog->description }}" />
                        </div>
                    </div>

                    <div class="flex justify-end">

                        <x-admin.component.button type="submit">
                            Edit
                        </x-admin.component.button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
