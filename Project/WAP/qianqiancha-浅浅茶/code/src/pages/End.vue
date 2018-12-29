<template>
	<div class="end">
		<!-- 目录   -->
		<router-link to="/home">
			<div class="ml-btn animated microFlash loop"></div>
		</router-link>
		<!-- img-box -->
		<div class="end-bg">
			<!-- <div class="end-title animated fadeIn"></div> -->
			<a class="end-btn1 animated fadeInLeft" href="./bkcp/"></a>
			<a class="end-btn2 animated fadeInLeft" href="./vi/"></a>
		</div>
	</div>
</template>
<script>
	export default {
		name: "end",
		data() {
			return {

			}
		},
		methods: {}
	}
</script>
<style scoped>
	.end {
		width: 100%;
		height: 100%;
		background: url(../assets/images/end-bg.jpg) no-repeat;
		background-size: cover;
		overflow: hidden;
		position: relative;
	}

	.end-title{
		width: 9.25rem;
		height: 5.05rem;
		background: url(../assets/images/end-title.png) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		top: 6.87rem;
		left: 50%;
		margin-left: -4.6rem;
	}

	.end-btn1{
		display: block;
		width: 9.12rem;
		height: 2.02rem;
		background: url(../assets/images/end-btn1.png) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		top: 8.35rem;
		left: 50%;
		margin-left: -4.56rem;
		animation-delay: 0.3s;
		-webkit-animation-delay: 0.3s;
	}

	.end-btn2{
		display: block;
		width: 9.12rem;
		height: 2.02rem;
		background: url(../assets/images/end-btn2.png) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		top: 13.65rem;
		left: 50%;
		margin-left: -4.56rem;
		animation-delay: 0.6s;
		-webkit-animation-delay: 0.6s;
	}
</style>