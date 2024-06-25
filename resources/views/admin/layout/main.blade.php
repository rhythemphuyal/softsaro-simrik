<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @include('admin.links.style')
    @include('admin.links.javascript')
    <title>Admin</title>
</head>

<body>
    <div x-cloak x-data="{ sidebarOpen: true }" class="flex font-roboto ">
        <div class="fixed w-full top-0 z-[999] bg-white">
            @include('admin.message.index')

            @include('admin.layout.navbar')
        </div>
        @include('admin.layout.sidebar')
        <main :class="sidebarOpen ? 'ml-64' : 'ml-0'" class="flex-1 w-full mt-10 mb-2 overflow-x-hidden ">
            <div class="w-full px-6 py-8 max-sm:px-4 mt-7">
                @yield('body')
            </div>
        </main>
    </div>


</body>


</html>
