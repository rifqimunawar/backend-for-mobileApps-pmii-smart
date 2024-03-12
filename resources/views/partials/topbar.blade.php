<ul class="navbar-nav ml-auto">


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="flex items-center justify-center">
        <div class="btn btn-danger mt-0">
            <form method="POST" action="{{ route('logout') }}" >
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                            this.closest('form').submit();" style="text-decoration: none;">
                    {{ __('Logout') }}
                </x-dropdown-link>
            </form>
        </div>
    </li>

</ul>
