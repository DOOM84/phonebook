<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" target="_blank" href="http://cv.efootball.space">
               <!-- <img src="" alt="DOOM" width="112" height="28">-->
                <span>DOOM</span>
            </a>
            <div class="navbar-menu is-active">
                <router-link to="/home" class="navbar-item">Home</router-link>
                <router-link to="/about" class="navbar-item">About</router-link>
            </div>



            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "Myheader"
    }
</script>

<style scoped>

</style>