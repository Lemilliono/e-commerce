<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="{{asset ('css/stylewelcome.css') }}">
            <link rel="stylesheet" href="{{asset ('css/stylefooter.css') }}">
            <link rel="stylesheet" href="{{asset ('css/styleheader.css') }}">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,500">
        </head>
        <body>
            <nav class="header_menu">
                <div class="name">
                        <a href=>MICROUMANIA</a>
                </div>
                <div class="username">
                    <a href="{{ route('register') }}">REGISTER</a>
                </div>
                <div class="links">
                    <a href=>NEWS</a>
                    <a class="shop" href=>SHOP</a>
                    <a href=>CART</a>
                </div>
                </nav>

		<main>
            <h1>WELCOME !</h1>
			@yield('main')
		</main>
                <footer>
                    <a href="https://www.facebook.com/ecole.etna" title="Facebook">
                        <img alt="Facebook" src="{{url ('/images/logos/facebook-logo.jpg') }}" width="50" height="50" />
                    </a>
                    <a href="https://twitter.com/etna_io" title="Twitter">
                        <img alt="Twitter" src="{{url ('images/logos/twitter-logo.jpg') }}" width="50" height="50" />
                    </a>
            </footer>
        </body>
    </html>
