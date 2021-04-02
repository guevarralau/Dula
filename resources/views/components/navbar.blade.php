<style>
    #menu-toggle:checked + #menu {
        display: block ;
    }
</style>
<header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-0 py-2">
    <div class="flex-1 flex justify-between items-center">
        <div class="flex-shrink-0 flex items-center">
            <a href="#" class="block lg:hidden">
                <img class=" h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
            </a>
        
            <a href="#" class="hidden lg:block">
                <img class=" h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
            </a>
        </div>
    </div>
    <label for="menu-toggle" class="cursor-pointer lg:hidden block">
        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </label>
    <input type="checkbox" class="hidden" id="menu-toggle" />
    <div class="hidden lg:flex lg:items-center lg:w-auto w-full flex-wrap" id="menu">
        <nav>
            <ul class="lg:flex items-center justify-between text-base text-w text-gray-700 font-semibold pt-4 lg:pt-0">
                @guest
                <li>
                    <a href="{{route('login')}}" 
                        class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400">
                        Login
                    </a>
                </li>
                <li>
                    <a href="{{route('register')}}" 
                        class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400">
                        Register
                    </a>
                </li>
                @endguest
                <li>
                    <a href="{{route('landingpage')}}" 
                        class="lg:p-4 py-3 px-0 block  border-b-2 border-transparent hover:border-indigo-400">
                        Home
                    </a>
                </li>
                @auth
                <li>
                    <a href="javascript:void"
                        onclick="document.getElementById('logout-form').submit()"
                        class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400">
                        Logout
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endauth
            </ul>
        </nav>
        @auth
        <a 
            href="#" 
            class="lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 cursor-pointer w-10 h-10"
        >
            <img 
                class="w-10 h-10 rounded-full border-2 border-transparent hover:border-indigo-400"
                src="https://vz.cnwimg.com/thumbc-300x300/wp-content/uploads/2019/07/lm.jpg" 
                alt="lisa">
        </a>
        @endauth
    </div>
    </div>
</header>