<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">                    
                    <a href="{{ route('dashboard') }}">
                        <svg viewBox="0 0 812 660" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto max-w-full max-h-full bg-white-100">
                            <g transform="translate(89.000000, 231.000000)" stroke="#FF2D20" stroke-width="20">
                                <path d="M634.811945,149.207 L634.812945,149.553 C634.796945,154.88 633.669945,166.006 622.604945,179.764 C609.959945,195.254 589.781945,196.209 588.705945,196.209 L588.590945,196.209 C583.792945,196.22 465.622945,196.775 347.928945,197.328 L340.337945,197.364 C335.278945,197.387 330.224945,197.412 325.185945,197.435 C215.277945,197.952 112.250945,198.435 110.108945,198.438 C102.701945,198.301 95.6919446,195.386 90.4009446,190.353 C82.7629446,183.232 82.3789446,173.22 82.3799446,172.069 L82.2409446,157.58 C82.2379446,154.818 80.4089446,150.777 79.1769446,148.306 L78.9249446,147.801 C78.7489446,147.453 78.6729446,147.302 78.6049446,147.166 C77.7099446,145.375 74.7469446,142.234 65.2559446,138.765 C65.0379446,138.691 64.8899446,138.631 64.7419446,138.572 C64.5419446,138.492 64.3429446,138.413 64.1029446,138.333 C63.3909446,138.049 62.8729446,137.821 62.2309446,137.562 C58.8309446,136.193 51.4449446,133.218 43.7279446,129.813 L42.7199446,129.367 C42.0469446,129.067 41.3729446,128.765 40.6989446,128.461 L39.6969446,128.006 C34.8909446,125.815 30.2019446,123.537 26.5159446,121.451 C17.4029446,116.355 7.63694457,105.267 2.90094457,91.011 C-0.81205543,79.836 -1.42305543,66.703 3.81194457,52.943 C10.4109446,35.632 21.3929446,24.043 33.1059446,16.285 C55.8759446,1.204 81.3969446,0.55 82.9719446,0.552 L189.856945,0 L196.426945,0 C209.720945,0.373 220.592945,6.618 226.355945,16.785 C232.252945,27.252 231.629945,40.662 224.947945,53.373 C211.798945,77.995 181.935945,80.716 178.903945,80.986 L178.250945,81 L97.0769446,81.54 L93.7699446,81.434 C91.4269446,81.571 89.9659446,81.871 88.6219446,82.671 C87.3119446,83.453 86.8239446,84.307 86.2879446,85.884 C84.1089446,91.31 89.5289446,97.321 89.5289446,97.321 L90.4929446,98.139 C90.6019446,98.256 101.954945,106.15 114.592945,114.861 L115.418945,115.43 C115.556945,115.526 115.694945,115.621 115.833945,115.715 L116.663945,116.288 C116.801945,116.383 116.940945,116.479 117.079945,116.574 L117.912945,117.148 L119.504945,118.244 L120.300945,118.791 L121.890945,119.884 C122.681945,120.428 123.470945,120.97 124.254945,121.508 L125.192945,122.153 C135.326945,129.111 144.482945,135.358 147.406945,137.255 C152.397945,140.467 153.163945,140.564 156.867945,141.126 C158.395945,141.357 160.463945,141.67 163.634945,142.338 L164.488945,142.516 C172.162945,144.108 179.225945,145.344 183.195945,146.003 C184.488945,146.216 185.120945,146.318 185.612945,146.395 L229.025945,146.131 C232.497945,146.278 235.814945,144.861 238.184945,142.488 C239.538945,141.131 240.535945,139.262 240.704945,137.233 C240.627945,135.901 240.398945,131.545 240.165945,123.19 C239.756945,110.814 247.789945,97.115 249.049945,94.959 C250.229945,93.147 258.465945,81.22 267.712945,67.84 L268.330945,66.947 C269.155945,65.752 269.988945,64.547 270.823945,63.338 C271.048945,63.013 271.273945,62.687 271.499945,62.362 L272.175945,61.383 C272.287945,61.22 272.400945,61.057 272.512945,60.894 L273.189945,59.917 C283.663945,44.761 293.905945,29.947 295.248945,28.065 C302.544945,18.477 312.935945,11.722 324.673945,9.156 C340.977945,5.648 356.463945,14.435 358.214945,15.514 C366.029945,20.126 549.797945,128.634 559.956945,134.905 C563.288945,136.948 565.791945,137.671 567.834945,137.671 C570.529945,137.671 572.519945,136.439 574.589945,134.819 C575.691945,134.017 577.968945,132.395 577.968945,125.872 C577.968945,122.319 577.255945,117.143 575.125945,109.544 C573.605945,104.044 570.421945,99.541 566.834945,95.994 C559.601945,88.839 550.821945,85.736 550.722945,85.736 L551.228945,85.824 L516.211945,73.301 L515.406945,72.956 L514.677945,72.469 C507.379945,67.669 503.323945,61.627 501.312945,55.586 C498.412945,46.876 499.731945,38.185 501.617945,33.306 C504.641945,24.557 509.904945,19.111 515.770945,15.866 C524.179945,11.214 533.789945,11.046 539.680945,12.218 C545.178945,13.918 577.532945,24.396 595.592945,30.409 L597.006945,30.88 C602.300945,32.648 606.149945,33.962 607.362945,34.442 C613.975945,37.009 619.365945,40.264 626.382945,48.506 C634.270945,57.744 634.927945,70.729 634.927945,72.466 L634.788945,147.997 C634.799945,148.352 634.808945,148.756 634.811945,149.207"></path>
                            </g>
                        </svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                <!-- Services link -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('services.index') }}" :active="request()->routeIs('services.index')">
                        {{ __('Services') }}
                    </x-nav-link>
                </div>

                <!-- Zones link -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('zones.index') }}" :active="request()->routeIs('zones.index')">
                        {{ __('Zones') }}
                    </x-nav-link>
                </div>

                <!-- Reserves link -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('reserves.index') }}" :active="request()->routeIs('reserves.index')">
                        {{ __('Reserves') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('services.index') }}" :active="request()->routeIs('services.index')">
                {{ __('Services') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('zones.index') }}" :active="request()->routeIs('zones.index')">
                {{ __('Zones') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('reserves.index') }}" :active="request()->routeIs('reserves.index')">
                {{ __('Reserves') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
