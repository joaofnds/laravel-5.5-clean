<v-toolbar>
    <v-toolbar-title>Laravel</v-toolbar-title>

    <v-spacer></v-spacer>

    <v-toolbar-items>
        @auth
            <v-menu>
                <v-btn flat tag="a" slot="activator">
                    {{ Auth::user()->name }}
                </v-btn>

                <v-list>
                    <v-list-tile onclick="event.preventDefault(); document.getElementById('logout-form').submit();" @click="">
                        <v-list-tile-title>Logout</v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-menu>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @else
            <v-btn flat tag="a" href="{{ route('login') }}">Login</v-btn>
            <v-btn flat tag="a" href="{{ route('register') }}">Register</v-btn>
        @endauth
    </v-toolbar-items>
</v-toolbar>