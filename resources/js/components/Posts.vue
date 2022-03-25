<template>
  <div class="containerr">
        <div class="row justify-content-around flex-wrap p-relative">
            <div class="my_height col-3 m-3 text-center " v-for="(post,index) in posts" :key="index">
                <h1 class="mt-5 mb-4">{{post.title}}</h1>
                <div>{{post.category.name}}</div>
                <div class="col-12 mt-5 mb-5">
                    <img class="w-100 product_img" :src="post.img" alt="">
                </div>
                <span class="mb-4 tags">
                    <span class="tag" v-for="tag in post.tags" :key="tag.slug">
                        {{tag.name}}
                    </span>
                </span>
                <p><strong class="info_smart">ingredients:</strong> {{post.ingredients}}</p>
                <ul class="p-0">
                    <strong class="info_smart">Description:</strong> 
                    <li>
                        {{post.content}}
                    </li>
                </ul>
                <p><strong class="info_smart">Time Cooking:</strong> {{post.time_cooking}}</p>  
                <!--link per la rotta del singolo post-->
            </div>
               
        </div>
    </div>
</template>

<script>
export default {
    name:"Main",
    data(){
        return{
            posts:[]
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

<style>

</style>