<template>
	<div class=" border-bottom">
		<div class="container mb-2">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="#">Navbar</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<router-link :to="{ name: 'home' }" class="nav-link">home</router-link>
								</li>
								<li class="nav-item">
									<router-link :to="{ name: 'vard' }" class="nav-link">Vård</router-link>
								</li>
								<li class="nav-item">
									<router-link :to="{ name: 'skonhet' }" class="nav-link">Skönhet</router-link>
								</li>
								<li class="nav-item">
									<router-link :to="{ name: 'sport' }" class="nav-link">Sport</router-link>
								</li>
								<li class="nav-item">
									<router-link :to="{ name: 'mat' }" class="nav-link">Mat</router-link>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	
}
</script>