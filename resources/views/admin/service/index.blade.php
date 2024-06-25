@extends('admin.layout.main')
@section('body')
    <div class="w-full  bg-background">

        <div class="flex justify-between">
            <div class="text-2xl font-bold">Service</div>
            <a href='{{ route('service.create') }}'>
                <x-admin.component.button type="button">
                    <div class="flex items-center gap-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="svgicon" height="1em" viewBox="0 0 448 512">
                            <style>
                                .svgicon {
                                    fill: #ffffff;
                                }
                            </style>
                            <path
                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                        <span>Add Service</span>
                    </div>
                </x-admin.component.button>
            </a>
        </div>
        <div class='p-3 mt-10 bg-white rounded-lg shadow product-table font-main'>

            <div class="relative overflow-x-auto">
                <table class="w-full divide-y divide-gray-200">
                    <thead class="p-10 font-normal">
                        <tr class="">
                            <th scope="col " class="p-2 font-semibold ">
                                Service Name
                            </th>
                            <th scope="col" class="font-semibold ">
                                Service Order
                            </th>


                            <th scope="col" class="font-semibold ">
                                Image
                            </th>
                            <th scope="col" class="font-semibold ">
                                Created At
                            </th>
                            <th scope="col" class="font-semibold ">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    @foreach ($services as $key => $service)
                    {{-- @dd($service) --}}
                        <tbody class="text-center bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="">
                                    <div>{{ $service->title }}</div>
                                </td>
                                <td class="">
                                    <div>{{ $service->service_order }}</div>
                                </td>


                                <td class="p-2" style="width: 100px;">
                                    <img class="" src="{{ asset('/uploads/' . $service->service_image) }}" alt="Card"
                                        style="width: 70px;">
                                </td>
                                <td>
                                    @if ($service->created_at)
                                        <div>{{ $service->created_at->format('F j, Y') }}</div>
                                    @else
                                        <div>-</div>
                                    @endif
                                </td>


                                <td>
                                    <div class="flex justify-center p-2">
                                        <a href="{{ route('service.edit', $service->id) }}">
                                            <div class="bg-[#266688] py-1 px-2 mx-2 text-white flex rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path
                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg>


                                            </div>
                                        </a>

                                        <form method="POST" action="{{ route('service.destroy', $service->id) }}"
                                            id="delete-form-{{ $service->id }}">
                                            @csrf
                                            @method('delete')
                                            <button type="button" onclick="deleteSingleImage({{ $service->id }})"
                                                class="flex px-2 py-1 mx-2 text-white bg-red-500 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7l16 0"></path>
                                                    <path d="M10 11l0 6"></path>
                                                    <path d="M14 11l0 6"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg>
                                            </button>
                                        </form>


                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
            </div>


        </div>
        <div class="mt-3 ">
            {{-- {{ $banners->links('vendor.pagination.tailwind') }} --}}
        </div>

    </div>
@endsection
