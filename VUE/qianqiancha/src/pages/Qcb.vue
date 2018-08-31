<template>
	<div class="qcb">
		<!-- 目录   -->
		<router-link to="/home">
			<div class="ml-btn animated microFlash loop"></div>
		</router-link>
		<!-- banner -->
		<div class="qcb-ban">
			<div class="qcb-logo animated flipInX"></div>
			<div class="qcb-word1 animated popIn"></div>
			<div class="qcb-word2 animated fadeIn"></div>
		</div>
		<!-- img-box -->
		<div class="img-box">
			<img src="" alt="" v-lazy="qcbimg1">
			<img src="" alt="" v-lazy="qcbimg2">
			<img src="" alt="" v-lazy="qcbimg3">
			<img src="" alt="" v-lazy="qcbimg4">
			<img src="" alt="" v-lazy="qcbimg5">
			<img src="" alt="" v-lazy="qcbimg6">
			<img src="" alt="" v-lazy="qcbimg7">
			<img src="" alt="" v-lazy="qcbimg8">
			<img src="" alt="" v-lazy="qcbimg9">
			<img src="" alt="" v-lazy="qcbimg10">
			<img src="" alt="" v-lazy="qcbimg11">
			<img src="" alt="" v-lazy="qcbimg12">
			<img src="" alt="" v-lazy="qcbimg13">
			<img src="" alt="" v-lazy="qcbimg14">
			<img src="" alt="" v-lazy="qcbimg15">
		</div>
		<!-- footer -->
		<div class="qcb-footer">
			<router-link to="/ydx">
				<div class="btn qcb-pre animated slowFlash"></div>
			</router-link>
			<router-link to="/end">
				<div class="btn qcb-next animated slowFlash"></div>
			</router-link>
		</div>
	</div>
</template>
<script>
	export default {
		name: "qcb",
		data() {
			return {
				qcbimg1: require("@/assets/images/qcb-img1.jpg"),
				qcbimg2: require("@/assets/images/qcb-img2.jpg"),
				qcbimg3: require("@/assets/images/qcb-img3.jpg"),
				qcbimg4: require("@/assets/images/qcb-img4.jpg"),
				qcbimg5: require("@/assets/images/qcb-img5.jpg"),
				qcbimg6: require("@/assets/images/qcb-img6.jpg"),
				qcbimg7: require("@/assets/images/qcb-img7.jpg"),
				qcbimg8: require("@/assets/images/qcb-img8.jpg"),
				qcbimg9: require("@/assets/images/qcb-img9.jpg"),
				qcbimg10: require("@/assets/images/qcb-img10.jpg"),
				qcbimg11: require("@/assets/images/qcb-img11.jpg"),
				qcbimg12: require("@/assets/images/qcb-img12.jpg"),
				qcbimg13: require("@/assets/images/qcb-img13.jpg"),
				qcbimg14: require("@/assets/images/qcb-img14.jpg"),
				qcbimg15: require("@/assets/images/qcb-img15.jpg"),

			}
		},
		methods: {}
	}
</script>
<style scoped>
	/*banner*/
	
	.qcb-ban {
		width: 18.75rem;
		height: 30.15rem;
		position: relative;
		background: url(../assets/images/qcb-ban.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.qcb-logo {
		width: 3.25rem;
		height: 2.075rem;
		position: absolute;
		top: 0;
		left: 50%;
		margin-left: -1.625rem;
		background: url(../assets/images/qcb-logo.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.qcb-word1 {
		width: 14.25rem;
		height: 3.875rem;
		position: absolute;
		top: 3.15rem;
		left: 50%;
		margin-left: -7.225rem;
		background: url(../assets/images/qcb-word1.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
		animation-delay: 0.4s;
		-webkit-animation-delay: 0.4s;
	}
	
	.qcb-word2 {
		width: 13.95rem;
		height: 1.675rem;
		position: absolute;
		top: 7.65rem;
		left: 50%;
		margin-left: -7.225rem;
		background: url(../assets/images/qcb-word2.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
		animation-delay: 0.8s;
		-webkit-animation-delay: 0.8s;
	}
	/*footer*/
	
	.qcb-footer {
		width: 18.75rem;
		height: 5rem;
		position: relative;
		background: #ffffff;
	}
	
	.btn {
		width: 3.5rem;
		height: 2.225rem;
		position: absolute;
		bottom: 2.42rem;
	}
	
	.qcb-pre {
		background: url(../assets/images/qcb-pre.png) no-repeat;
		background-size: 100% 100%;
		left: 3.57rem;
	}
	
	.qcb-next {
		background: url(../assets/images/qcb-next.png) no-repeat;
		background-size: 100% 100%;
		right: 3.57rem;
	}
</style>