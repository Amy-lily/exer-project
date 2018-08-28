<template>
	<div class="lxwm">
		<!-- ml  -->
		<router-link to="/home">
			<div class="ml-word"></div>
			<div class="ml-btn"></div>
		</router-link>
		<!-- banner  -->
		<div class="lxwm-ban">
			<div class="lxwm-ban-bg"></div>
			<div class="lxwm-word1 animated jackInTheBox"></div>
			<div class="lxwm-word2 animated fadeIn"></div>
			<div class="scqs-jt animated topGuide"></div>
		</div>
		<!--img-box-->
		<div class="img-box">
			<img src="" alt="" v-lazy="lxwmimg1">
			<img src="" alt="" v-lazy="lxwmimg2">
			<img src="" alt="" v-lazy="lxwmimg3">
			<img src="" alt="" v-lazy="lxwmimg4">
			<img src="" alt="" v-lazy="lxwmimg5">
		</div>
		<!-- footer -->
		<div class="footer">
			<router-link to="/">
				<div class="footer-con">
					<div class="lxwm-footer-word animated slowFlash"></div>
					<div class="lxwm-footer-circle"></div>
					<div class="lxwm-footer-jt animated rightGuide"></div>
				</div>
			</router-link>
		</div>
	</div>
</template>
<script>
	import { swiper, swiperSlide } from 'vue-awesome-swiper';
	import axios from 'axios';

	export default {
		name: "lxwm",
		data() {
			return {

				"lxwmimg1": require('@/assets/images/lxwm-img1.jpg'),
				"lxwmimg2": require('@/assets/images/lxwm-img2.jpg'),
				"lxwmimg3": require('@/assets/images/lxwm-img3.jpg'),
				"lxwmimg4": require('@/assets/images/lxwm-img4.jpg'),
				"lxwmimg5": require('@/assets/images/lxwm-img5.jpg'),
				
			}
		},
		methods: {

		}

	}
</script>
<style scoped>
	/*banner*/
	
	.lxwm-ban {
		width: 18.75rem;
		height: 28.1rem;
		position: relative;
		overflow: hidden;
	}
	
	.lxwm-ban-bg {
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background: url(../assets/images/lxwm-ban.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.lxwm-word1 {
		width: 3.57rem;
		height: 1.75rem;
		position: absolute;
		top: 4.625rem;
		left: 2.05rem;
		background: url(../assets/images/lxwm-word1.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 2s;
		-webkit-animation-duration: 2s;
	}
	
	.lxwm-word2 {
		width: 10.85rem;
		height: 3.92rem;
		position: absolute;
		top: 19rem;
		left: 4.725rem;
		background: url(../assets/images/lxwm-word2.png) no-repeat;
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
	/*img-box*/
	
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
	
	.lxwm-footer-word {
		width: 2.72rem;
		height: 0.67rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3375rem;
		left: 4.17rem;
		background: url(../assets/images/lxwm-bottom-word.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.lxwm-footer-circle {
		width: 0.55rem;
		height: 0.6rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3rem;
		right: 4.67rem;
		background: url(../assets/images/ppgs-bottom-circle.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.lxwm-footer-jt {
		width: 0.925rem;
		height: 0.275rem;
		position: absolute;
		top: 50%;
		margin-top: -0.16rem;
		right: 4.07rem;
		background: url(../assets/images/ppgs-bottom-jt.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
	}
</style>