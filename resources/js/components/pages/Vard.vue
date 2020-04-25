<template>
	<div class="container">
		<div class="row">
            <div class="col-12">
                <h1>Vård</h1>
                <div class="card-columns">
                    <card-component 
                        v-for="post in posts" 
                        v-bind:key="post.id" 
                        v-bind:title="post.title">
                    </card-component>
                </div>
            </div>
		</div>
	</div>
</template>

<script>
import Card from './parts/Card'
export default {
	data: function() {
		return {
            img_src: '/images/tros.webp',
            posts: [
                {
                    id: 0,
                    title: 'Heyo0'
                },
                {
                    id: 1,
                    title: 'Heyo1'
                },
                {
                    id: 2,
                    title: 'Heyo2'
                },
                {
                    id: 3,
                    title: 'Heyo3'
                },
                {
                    id: 4,
                    title: 'Heyo4'
                },
                {
                    id: 5,
                    title: 'Heyo5'
                },
                {
                    id: 6,
                    title: 'Heyo6'
                },
            ]
		}
    },
    components: {
        'card-component': Card
    },
    mounted () {
    }

}
</script>

<style>

</style>