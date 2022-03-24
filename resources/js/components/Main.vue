<template>
    <div>
    <div class="container">
        <div class="row justify-content-around flex-wrap">
            <div class="my_height col-3 text-center m-3" v-for="(post,index) in posts" :key="index">
                <h1 class="mt-5 mb-4">{{post.title}}</h1>
                <div class="mb-4" v-if="post.category_id==1">Antipasti</div>
                <div class="mb-4" v-if="post.category_id==2">Primi</div>
                <div class="mb-4" v-if="post.category_id==3">Secondi Piatti di Carne</div>
                <div class="mb-4" v-if="post.category_id==4">Secondi Piatti di Pesce</div>
                <div class="mb-4" v-if="post.category_id==5">Dolci al Cucchiaio</div>
                <div class="mb-4" v-if="post.category_id==6">Torte</div>
                <div class="mb-4" v-if="post.category_id==7">Piatti Orientali</div>
                <div class="col-12 mt-5 mb-5">
                    <img class="w-100 product_img" :src="post.img" alt="">
                </div>
                <div class="mb-4 tags">
                 
                </div>
                <p><strong class="info_smart">ingredients:</strong> {{post.ingredients}}</p>
                <ul class="p-0">
                    <strong class="info_smart">Description:</strong> 
                    <li>
                        {{post.content}}
                    </li>
                </ul>
                <p><strong class="info_smart">Time Cooking:</strong> {{post.time_cooking}}</p>
            </div>
        </div>
    </div>
    </div>
</template>

<script>

export default{
    name:"Main",
    data(){
        return{
            posts:[
                "titolo1",
                "titolo2",
                "titolo3"
            ]
        }
    } ,
    created(){
        axios
        .get("/api/posts")
        .then((apirisp)=>{
            this.posts= apirisp.data;
        })
    }
}
</script>

<style scoped>

</style>