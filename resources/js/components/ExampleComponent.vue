<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>

                    <div>
                        <p v-for="artikel in artikels">
                            <a v-bind:href="'posts/'+posts.title">artikels.title</a>
                        </p>
                        <infinite-loading @distance="1" @infinite="infiniteHandler" ></infinite-loading>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                artikels: [],
                page:1
            }
        },
        methods: {
            infiniteHandler($state){
                console.log("Loading");
            }
        }
    }
</script>
