<template>
    <div class="card">
        <img class="card-img-top" :src="img_src" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</template>

<script>
export default {
	data: function() {
		return {
			img_src: '/images/tros.webp'
		}
    },
    props: ['title'],

}
</script>

<style>

</style>