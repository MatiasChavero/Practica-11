<?php require 'head.php'; ?>

<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">The Pirate Cinema</a>
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#contenidoMenu"
				aria-controls="contenidoMenu"
				aria-expanded="false"
				aria-label="Mostrar/Ocultar Navegacion"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="contenidoMenu">
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<a href="#" class="nav-link text-white">Inicio</a>
					</li>
					<li class="nav-item dropdown">
						<a 
							href="#"
							class="nav-link dropdown-toggle text-white"
							id="submenuGeneros"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false" 
						>
							Géneros
						</a>
						<ul class="dropdown-menu" aria-labelledby="submenuGeneros">
							<li>
								<a href="#" class="dropdown-item">Acción</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Aventura</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Comedia</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Crimen</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Drama</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Romance</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Terror</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Thriller</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a 
							href="#" 
							class="nav-link dropdown-toggle text-white"
							id="submenuPeliculas"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false" 
						>
							Peliculas
						</a>
						<ul class="dropdown-menu" aria-labelledby="submenuPeliculas">
							<li>
								<a href="#" class="dropdown-item">Estrenos</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Ranking</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Más Vistas</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Películas</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a 
							href="#" 
							class="nav-link text-white"
							id="submenuSeries"
							role="button"
							data-bs-toggle="dropdown"
							aria-expanded="false" 
						>
							Series
						</a>
						<ul class="dropdown-menu" aria-labelledby="submenuSeries">
							<li>
								<a href="#" class="dropdown-item">Series</a>
							</li>
							<li>
								<a href="#" class="dropdown-item">Episodios</a>
							</li>
						</ul>
					</li>
				</ul>
				<for action="" class="d-flex">
					<input 
						type="text" 
						class="form-control me-2"
						aria-label="Buscar"
						placeholder="Buscar" 
					>
					<button class="btn btn-primary" type="submit">Buscar</button>
				</form>
			</div>
		</div>
	</nav>
</header>
