<template>
   <header>
       <nav>
           <li><router-link :to="{ name: 'home' }">home</router-link></li>
           <li><router-link :to="{ name: 'about' }">about us</router-link></li>
      </nav>
   </header>
</template>

<script>

export default{
    name:"Header",
}
</script>

<style scoped>

</style>