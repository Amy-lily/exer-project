<template>
    <div class="subpage">
        <!-- 目录 -->
        <router-link to="/home">
            <div class="nav-btn"></div>
        </router-link>
        <!-- banner -->
        <div class="sub-banner">banner</div>
        <!-- content -->
        <div class="img-box">
            <!-- <img src="" alt="" v-lazy="subpageimg1"> -->
        </div>
        <!-- footer -->
        <div class="sub-footer">
            <router-link to="/">
                <div class="footer-img footer-pre animated slowFlash"></div>
            </router-link>
            <router-link to="/">
                <div class="footer-img footer-next animated slowFlash"></div>
            </router-link>
        </div>
    </div>
</template>
<script>
export default {
    name: 'subpage',
    data() {
        return {
            // "subpageimg1": require('@/assets/images/subpageimg1.jpg')
        }
    },
    methods: {

    },
    computed: {

    },
    mounted: function() {

    },
    beforeDestroy: function() {

    },
    components: {

    }
}
</script>
<style scoped>
/*banner*/

.sub-banner {
    width: 100%;
    height: 25.0rem;
    background: #ccc;
}
</style>
