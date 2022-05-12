<!doctype html>

    <!-- Header Area -->

    <header class="header-area  top-fixed">
		<div class="sticky-area">
			<div class="navigation">
				<div class="main-menu">

					<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:90px">
						<a class="navbar-brand" href="#">Home Town Trimmer</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="position:absolute; top:0px; height: 90px;">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarText">
							<ul class="navbar-nav mr-auto ml-5">
								<li class="nav-item">
									<a class="nav-link active" href="{{ route('home') }}">Home
										<span class="sub-nav-toggler"></span>
									</a>
								</li>

								<li class="nav-item">
									<a class="nav-link"href="{{ route('services') }}">Services
										<span class="sub-nav-toggler"></span>
									</a>
								</li>
                                @if(Auth::user()->role=='customer')
                                <li class="nav-item">
									<a class="nav-link"href="{{ route('barberslist') }}">Barbers List
										<span class="sub-nav-toggler"></span>
									</a>
								</li>
                                @endif
								<li class="nav-item">
									<a class="nav-link" href="#">Blog
										<span class="sub-nav-toggler"></span>
									</a>
									<ul class="sub-menu">
										<li><a href="#">Blog-Classic</a></li>
										<li><a href="#">Blog-Grid</a></li>
										<li><a href="#">Blog Details</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Contact</a>
								</li>
								@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
							</ul>
							@if (Route::has('register'))

							<div class="header-right-content">
								<a href="{{ route('register') }}" class="main-btn">Register</a>
								@endif
								@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
							@endguest
						</div>
					</div>

				</div>
			</nav>


		</div>
	</div>
</div>
</header>
    @section('navigation')

	@show




