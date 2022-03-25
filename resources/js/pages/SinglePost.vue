<template>
  <div class="containerr">
        <div class="row justify-content-around flex-wrap p-relative">
            <div class="my_height col-3 m-3 text-center">
                <h1 class="mt-5 mb-4">{{post.title}}</h1>
                <div v-if="post.category">{{post.category.name}}</div>
                <div class="col-12 mt-5 mb-5">
                    <img class="w-100 product_img" :src="post.img" alt="">
                </div>
                <span class="mb-4 tags" v-if="post.tags.length > 0">
                    <span class="tag" v-for="(tag,index) in post.tags" :key="index">
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
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Main",
    data(){
        return{
            posts:{}               //deve ritornare un oggetto
        }
    } ,
    created(){
        axios                     //la chiamata axios avviene per verificare lo slug del singolo elemento
        .get("/api/posts")
        .then((apirisp)=>{
            this.post= apirisp.data;
        })
    }
}

</script>

<style>

</style>