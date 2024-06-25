@extends('admin.layout.main')
@section('body')
    <div class="flex items-center gap-2">
        <a href="{{ route('type.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </a>
        <div class="text-xl font-bold">Add Type</div>
    </div>
    <div class="w-full bg-white rounded-lg shadow-lg mt-30 text-slate-600">
        <form method="post" action="{{ route('type.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="p-6 mt-3">
                <div class="flex flex-col">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900" htmlFor="">
                            Title
                        </label>
                        <div>
                            <x-admin.component.input-field name="title" inputType="text" />
                        </div>
                    </div>



                    <div class="grid grid-cols-2 gap-3 mt-5">

                        <div class="">

                            <label for="countries" class="block mb-2 text-sm font-medium">Select
                                Services</label>
                            <select id="status-select" name="service_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm my-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option disabled selected>Choose a Services</option>
                               @foreach ($service as  $services)

                               <option  value="{{ $services->id }}">
                                   {{ $services->title }}
                               </option>
                               @endforeach




                            </select>
                        </div>

                        <div class="">

                            <label for="countries" class="block mb-2 text-sm font-medium">Select
                                Scheme</label>
                            <select id="status-select" name="scheme_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm my-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option disabled selected>Choose a Services</option>
                                @foreach ($scheme as  $schemes)

                                <option  value="{{ $schemes->id }}">
                                    {{ $schemes->title }}
                                </option>
                                @endforeach




                            </select>
                        </div>
                    </div>


                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                            Description
                        </label>
                        <div>
                            <x-admin.component.textarea class="tinymce" name="description" inputType="text" />
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900 " htmlFor="">
                            Featured Image
                        </label>
                        <div>
                            <x-admin.component.input-field name="featured_image" onchange="loadFile()" inputType="file"
                                ids="output" />
                        </div>
                    </div>

                    <div>
                        <label class="block my-2 text-sm font-medium text-gray-900" htmlFor="">
                            Image
                        </label>
                        <div>
                            <x-admin.component.input-field name="image" inputType="file" ids="output"
                                onchange="loadFiles()" />
                        </div>
                    </div>







                    <div class="flex justify-end">

                        <x-admin.component.button type="submit">
                            Submit
                        </x-admin.component.button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
