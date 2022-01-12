<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="{{ url('home') }}" class="tm-nav-link {{request()->is('home') ? 'active' : ''}}">Home</a></li>
								<li class="tm-nav-li"><a href="{{ url('about') }}" class="tm-nav-link {{request()->is('about') ? 'active' : ''}}">About</a></li>
								<li class="tm-nav-li"><a href="{{ url('contact') }}" class="tm-nav-link {{request()->is('contact') ? 'active' : ''}}">Contact</a></li>
								<li class="tm-nav-li"><a href="{{ url('login') }}" class="tm-nav-link {{request()->is('login') ? 'active' : ''}}">Login</a></li>
								<li class="tm-nav-li"><a href="{{ url('registrasi') }}" class="tm-nav-link {{request()->is('registrasi') ? 'active' : ''}}">Registrasi</a></li>
							</ul>
						</nav>	