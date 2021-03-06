<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#000000" />
		<title>{{ trans('panel.site_title') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
		@livewireStyles
		@stack('styles')
    </head>
    <body class="scrollbar-thin scrollbar-thumb-grayScrollbar scrollbar-track-grayScrollbar-light">
        <div class="font-sans text-gray-900 antialiased">
            @include('components.navbar-guest')
            <div class="min-w-full border-b border-b-4 shadow"></div>
            <div class="z-0 relative min-h-full bg-gray-200 dark:bg-gray-900">
                @yield('content')
            </div>
        </div>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
		<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
		@livewireScripts
		@yield('scripts')
		@stack('scripts')
		<script>
			function closeAlert(event){
			let element = event.target;
			while(element.nodeName !== "BUTTON"){
			element = element.parentNode;
			}
			element.parentNode.parentNode.removeChild(element.parentNode);
			}
		</script>
    </body>
</html>
