<template>
    <div>
        <ul>
            <li v-for="(post,index) in posts" :key="index">
                 {{post.title}}
            </li>
        </ul>
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