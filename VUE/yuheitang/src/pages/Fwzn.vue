<template>
	<div class="fwzn">
		<!-- ml  -->
		<router-link to="/home">
			<div class="ml-word"></div>
			<div class="ml-btn"></div>
		</router-link>
		<!-- banner  -->
		<div class="fwzn-ban">
			<div class="fwzn-ban-bg"></div>
			<div class="fwzn-word1 animated jackInTheBox"></div>
			<div class="fwzn-word2 animated fadeIn"></div>
			<div class="scqs-jt animated topGuide"></div>
		</div>
		<!--img-box-->
		<div class="img-box">
			<img src="" alt="" v-lazy="fwznimg1">
			<img src="" alt="" v-lazy="fwznimg2">
			<img src="" alt="" v-lazy="fwznimg3">
			<img src="" alt="" v-lazy="fwznimg4">
			<img src="" alt="" v-lazy="fwznimg5">
			<img src="" alt="" v-lazy="fwznimg6">
		</div>
		<!-- footer -->
		<div class="footer">
			<router-link to="/lxwm">
				<div class="footer-con">
					<div class="fwzn-footer-word animated slowFlash"></div>
					<div class="fwzn-footer-circle"></div>
					<div class="fwzn-footer-jt animated rightGuide"></div>
				</div>
			</router-link>
		</div>
	</div>
</template>
<script>
	import { swiper, swiperSlide } from 'vue-awesome-swiper';

	export default {
		name: "fwzn",
		data() {
			return {

				"fwznimg1": require('@/assets/images/fwzn-img1.jpg'),
				"fwznimg2": require('@/assets/images/fwzn-img2.jpg'),
				"fwznimg3": require('@/assets/images/fwzn-img3.jpg'),
				"fwznimg4": require('@/assets/images/fwzn-img4.jpg'),
				"fwznimg5": require('@/assets/images/fwzn-img5.jpg'),
				"fwznimg6": require('@/assets/images/fwzn-img6.jpg'),
			}
		},
		methods: {

		}
	}
</script>
<style scoped>
	/*banner*/
	.fwzn-ban {
		width: 18.75rem;
		height: 28.07rem;
		position: relative;
		overflow: hidden;
	}
	
	.fwzn-ban-bg {
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background: url(../assets/images/fwzn-ban.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.fwzn-word1 {
		width: 3.52rem;
		height: 1.75rem;
		position: absolute;
		top: 4.625rem;
		left: 2.05rem;
		background: url(../assets/images/fwzn-word1.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 2s;
		-webkit-animation-duration: 2s;
	}
	
	.fwzn-word2 {
		width: 12.6rem;
		height: 4.17rem;
		position: absolute;
		top: 18.5rem;
		left: 3.725rem;
		background: url(../assets/images/fwzn-word2.png) no-repeat;
		background-size: 100% 100%;
		animation-delay: 1s;
		-webkit-animation-delay: 1s;
	}
	
	.scqs-jt {
		width: 0.575rem;
		height: 1.575rem;
		position: absolute;
		top: 25.075rem;
		left: 50%;
		margin-left: 0.287rem;
		background: url(../assets/images/scqs-jt.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
	}
	/* footer */
	
	.footer {
		width: 18.75rem;
		height: 4.575rem;
		background: #fff;
		position: relative;
	}
	
	.footer-con {
		width: 12.75rem;
		height: 1.825rem;
		position: absolute;
		top: 0;
		left: 50%;
		margin-left: -6.375rem;
		background-color: #ea5c3f;
	}
	
	.fwzn-footer-word {
		width: 5.2rem;
		height: 0.67rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3375rem;
		left: 2.75rem;
		background: url(../assets/images/fwzn-bottom-word.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.fwzn-footer-circle {
		width: 0.55rem;
		height: 0.55rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3rem;
		right: 3.625rem;
		background: url(../assets/images/ppgs-bottom-circle.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.fwzn-footer-jt {
		width: 0.925rem;
		height: 0.275rem;
		position: absolute;
		top: 50%;
		margin-top: -0.16rem;
		right: 3rem;
		background: url(../assets/images/ppgs-bottom-jt.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
	}
</style>