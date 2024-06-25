<div x-clock x-data="{ sidebarOpen = true }">
    <div x-cloak x-show="sidebarOpen" class="fixed inset-0 z-20 hidden transition-opacity pointer-events-none lg:block">
    </div>

    <!-- Overlay for Small Screens -->
    <div x-cloak x-show="sidebarOpen" @click="sidebarOpen = false"
        class="fixed inset-0 z-10 block bg-black opacity-50 lg:hidden"></div>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <div x-data="handleSwipe()" x-cloak
        :class="sidebarOpen ? 'translate-x-0 ease-out w-64 lg:w-64' : '-translate-x-full ease-in'"
        @touchstart="touchStart" @touchend="touchEnd"
        class="fixed inset-y-0 left-0 z-30 overflow-y-auto transition duration-300 transform bg-white border"
        style="height: calc(100% - [footer-height]px);">
        <div>
            <nav class="mt-24">
                <a class="{{ request()->segment(2) == 'dashboard' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }} "
                    href="{{ route('admin.dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4h6v6h-6z"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
                </a>


                <a class="{{ request()->segment(2) == 'banner' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{route('banner.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>

                    <span class="mx-3">Banner</span>
                </a>
                <a class="{{ request()->segment(2) == 'service' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{route('service.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>

                    <span class="mx-3">Services</span>
                </a>

                <a class="{{ request()->segment(2) == 'schemes' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{route('schemes.index')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>

                    <span class="mx-3">Schemes</span>
                </a>
                <a class="{{ request()->segment(2) == 'blogs' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{route('blogs.index')}}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 8h.01" />
                        <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                    </svg>

                    <span class="mx-3">Blog</span>
                </a>

                {{-- faq --}}
                <a class="{{ request()->segment(2) == 'faqs' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('faq.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-hexagon-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.425 1.414a3.33 3.33 0 0 1 3.026 -.097l.19 .097l6.775 3.995l.096 .063l.092 .077l.107 .075a3.224 3.224 0 0 1 1.266 2.188l.018 .202l.005 .204v7.284c0 1.106 -.57 2.129 -1.454 2.693l-.17 .1l-6.803 4.302c-.918 .504 -2.019 .535 -3.004 .068l-.196 -.1l-6.695 -4.237a3.225 3.225 0 0 1 -1.671 -2.619l-.007 -.207v-7.285c0 -1.106 .57 -2.128 1.476 -2.705l6.95 -4.098zm1.575 13.586a1 1 0 0 0 -.993 .883l-.007 .117l.007 .127a1 1 0 0 0 1.986 0l.007 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm1.368 -6.673a2.98 2.98 0 0 0 -3.631 .728a1 1 0 0 0 1.44 1.383l.171 -.18a.98 .98 0 0 1 1.11 -.15a1 1 0 0 1 -.34 1.886l-.232 .012a1 1 0 0 0 .111 1.994a3 3 0 0 0 1.371 -5.673z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <span class="mx-3">Faq</span>
                </a>


                <a class="{{ request()->segment(2) == 'csr' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('csr.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-hexagon-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.425 1.414a3.33 3.33 0 0 1 3.026 -.097l.19 .097l6.775 3.995l.096 .063l.092 .077l.107 .075a3.224 3.224 0 0 1 1.266 2.188l.018 .202l.005 .204v7.284c0 1.106 -.57 2.129 -1.454 2.693l-.17 .1l-6.803 4.302c-.918 .504 -2.019 .535 -3.004 .068l-.196 -.1l-6.695 -4.237a3.225 3.225 0 0 1 -1.671 -2.619l-.007 -.207v-7.285c0 -1.106 .57 -2.128 1.476 -2.705l6.95 -4.098zm1.575 13.586a1 1 0 0 0 -.993 .883l-.007 .117l.007 .127a1 1 0 0 0 1.986 0l.007 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm1.368 -6.673a2.98 2.98 0 0 0 -3.631 .728a1 1 0 0 0 1.44 1.383l.171 -.18a.98 .98 0 0 1 1.11 -.15a1 1 0 0 1 -.34 1.886l-.232 .012a1 1 0 0 0 .111 1.994a3 3 0 0 0 1.371 -5.673z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <span class="mx-3">CSR</span>
                </a>


                <a class="{{ request()->segment(2) == 'gallery' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('gallerysection.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-hexagon-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.425 1.414a3.33 3.33 0 0 1 3.026 -.097l.19 .097l6.775 3.995l.096 .063l.092 .077l.107 .075a3.224 3.224 0 0 1 1.266 2.188l.018 .202l.005 .204v7.284c0 1.106 -.57 2.129 -1.454 2.693l-.17 .1l-6.803 4.302c-.918 .504 -2.019 .535 -3.004 .068l-.196 -.1l-6.695 -4.237a3.225 3.225 0 0 1 -1.671 -2.619l-.007 -.207v-7.285c0 -1.106 .57 -2.128 1.476 -2.705l6.95 -4.098zm1.575 13.586a1 1 0 0 0 -.993 .883l-.007 .117l.007 .127a1 1 0 0 0 1.986 0l.007 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm1.368 -6.673a2.98 2.98 0 0 0 -3.631 .728a1 1 0 0 0 1.44 1.383l.171 -.18a.98 .98 0 0 1 1.11 -.15a1 1 0 0 1 -.34 1.886l-.232 .012a1 1 0 0 0 .111 1.994a3 3 0 0 0 1.371 -5.673z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <span class="mx-3">Gallery</span>
                </a>

                <a class="{{ request()->segment(2) == 'gallery' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('gallerysection.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-hexagon-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.425 1.414a3.33 3.33 0 0 1 3.026 -.097l.19 .097l6.775 3.995l.096 .063l.092 .077l.107 .075a3.224 3.224 0 0 1 1.266 2.188l.018 .202l.005 .204v7.284c0 1.106 -.57 2.129 -1.454 2.693l-.17 .1l-6.803 4.302c-.918 .504 -2.019 .535 -3.004 .068l-.196 -.1l-6.695 -4.237a3.225 3.225 0 0 1 -1.671 -2.619l-.007 -.207v-7.285c0 -1.106 .57 -2.128 1.476 -2.705l6.95 -4.098zm1.575 13.586a1 1 0 0 0 -.993 .883l-.007 .117l.007 .127a1 1 0 0 0 1.986 0l.007 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm1.368 -6.673a2.98 2.98 0 0 0 -3.631 .728a1 1 0 0 0 1.44 1.383l.171 -.18a.98 .98 0 0 1 1.11 -.15a1 1 0 0 1 -.34 1.886l-.232 .012a1 1 0 0 0 .111 1.994a3 3 0 0 0 1.371 -5.673z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <span class="mx-3">Report</span>
                </a>



                <a class="{{ request()->segment(2) == 'type' ? ' bg-sky-500 text-white flex items-center px-6 py-2  mr-3 flex-1 mt-2 item ' : 'mr-3 flex-1 mt-2 item hover:bg-sky-500 hover:text-white flex items-center px-6 py-2  text-gray-600' }}"
                    href="{{ route('type.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-hexagon-filled"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.425 1.414a3.33 3.33 0 0 1 3.026 -.097l.19 .097l6.775 3.995l.096 .063l.092 .077l.107 .075a3.224 3.224 0 0 1 1.266 2.188l.018 .202l.005 .204v7.284c0 1.106 -.57 2.129 -1.454 2.693l-.17 .1l-6.803 4.302c-.918 .504 -2.019 .535 -3.004 .068l-.196 -.1l-6.695 -4.237a3.225 3.225 0 0 1 -1.671 -2.619l-.007 -.207v-7.285c0 -1.106 .57 -2.128 1.476 -2.705l6.95 -4.098zm1.575 13.586a1 1 0 0 0 -.993 .883l-.007 .117l.007 .127a1 1 0 0 0 1.986 0l.007 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm1.368 -6.673a2.98 2.98 0 0 0 -3.631 .728a1 1 0 0 0 1.44 1.383l.171 -.18a.98 .98 0 0 1 1.11 -.15a1 1 0 0 1 -.34 1.886l-.232 .012a1 1 0 0 0 .111 1.994a3 3 0 0 0 1.371 -5.673z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <span class="mx-3">Type</span>
                </a>

            </nav>
        </div>
    </div>
</div>
