<template>
	<div class="cpys">
		<!-- ml  -->
		<router-link to="/home">
			<div class="ml-word"></div>
			<div class="ml-btn"></div>
		</router-link>
		<!-- banner  -->
		<div class="cpys-ban">
			<div class="cpys-ban-bg"></div>
			<div class="cpys-word1 animated jackInTheBox"></div>
			<div class="cpys-word2 animated fadeIn"></div>
			<div class="scqs-jt animated topGuide"></div>
		</div>
		<!--img-box-->
		<div class="img-box">
			<img src="" alt="" v-lazy="cpysimg1">
			<div class="cpys-img2">
				<div class="cpys-img2-swiper">
					<div class="swiper-wrap">
						<swiper :options="swiperOption1" ref="mySwiper" id="swiper1">
							<!-- slides -->
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide1.png" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide2.png" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide3.png" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide4.png" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide5.png" />
							</swiper-slide>
							<!--pagination-->
							<div class="swiper-pagination cpys-swiper-pagination1" slot="pagination"></div>
						</swiper>
						<div class="xian"></div>
					</div>
				</div>
			</div>
			<img src="" alt="" v-lazy="cpysimg3">
			<img src="" alt="" v-lazy="cpysimg4">
			<div class="cpys-img5">
				<div class="cpys-img5-1"></div>
				<div class="cpys-img5-2"></div>
				<div class="cpys-img5-3"></div>
			</div>
			<img src="" alt="" v-lazy="cpysimg6">
			<div class="cpys-img5 cpys-img7">
				<div class="cpys-img5-1"></div>
				<div class="cpys-img5-2 cpys-img7-2"></div>
				<div class="cpys-img5-3"></div>
			</div>
			<img src="" alt="" v-lazy="cpysimg8">
			<div class="cpys-img9">
				<div class="cpys-img9-swiper">
					<div class="swiper-wrap">
						<swiper :options="swiperOption2" ref="mySwiper" id="swiper2">
							<!--slides-->
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide1.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide2.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide3.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide4.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/cpys-slide5.jpg" />
							</swiper-slide>
							<!--pagination-->
							<div class="swiper-pagination cpys-swiper-pagination2" slot="pagination"></div>
						</swiper>
					</div>
				</div>
			</div>
			<img src="" alt="" v-lazy="cpysimg10">
			<img src="" alt="" v-lazy="cpysimg11">
			<img src="" alt="" v-lazy="cpysimg12">
			<img src="" alt="" v-lazy="cpysimg13">
			<img src="" alt="" v-lazy="cpysimg14">
			<img src="" alt="" v-lazy="cpysimg15">
			<img src="" alt="" v-lazy="cpysimg16">
			<img src="" alt="" v-lazy="cpysimg17">
			<img src="" alt="" v-lazy="cpysimg18">
			<img src="" alt="" v-lazy="cpysimg19">
			<img src="" alt="" v-lazy="cpysimg20">
			<img src="" alt="" v-lazy="cpysimg21">
			<img src="" alt="" v-lazy="cpysimg22">
			<img src="" alt="" v-lazy="cpysimg23">
			<img src="" alt="" v-lazy="cpysimg24">
			<img src="" alt="" v-lazy="cpysimg25">
			<img src="" alt="" v-lazy="cpysimg26">
			<img src="" alt="" v-lazy="cpysimg27">
			<img src="" alt="" v-lazy="cpysimg28">
			<img src="" alt="" v-lazy="cpysimg29">
			<img src="" alt="" v-lazy="cpysimg30">
			<div class="cpys-img31">
				<a href="./bkcp/" class="img31-border">
					<div class="img31-text"></div>
					<div class="img31-bg">
						<div class="img31-bgin"></div>
					</div>
				</a>
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<router-link to="/kdfa">
				<div class="footer-con">
					<div class="cpys-footer-word animated slowFlash"></div>
					<div class="cpys-footer-circle"></div>
					<div class="cpys-footer-jt animated rightGuide"></div>
				</div>
			</router-link>
		</div>
	</div>
</template>
<script>
	import { swiper, swiperSlide } from 'vue-awesome-swiper';

	export default {
		name: "cpys",
		data() {
			return {

				swiperOption1: {
					autoplay: true,
					loop: true,
					speed: 300,
					slidesPerView: 1,
					spaceBetween: 5,
					pagination: {
						el: '.cpys-swiper-pagination1',
						clickable: true,
					},

					autoplay: {
						disableOnInteraction: false,
					}
				},
				swiperOption2: {
					autoplay: true,
					loop: true,
					speed: 300,
					slidesPerView: 1,
					spaceBetween: 5,
					pagination: {
						el: '.cpys-swiper-pagination2',
						clickable: true,
					},

					autoplay: {
						disableOnInteraction: false,
					}
				},

				"cpysimg1": require('@/assets/images/cpys-img1.jpg'),
				"cpysimg3": require('@/assets/images/cpys-img3.jpg'),
				"cpysimg4": require('@/assets/images/cpys-img4.jpg'),
				"cpysimg6": require('@/assets/images/cpys-img6.jpg'),
				"cpysimg8": require('@/assets/images/cpys-img8.jpg'),
				"cpysimg10": require('@/assets/images/cpys-img10.jpg'),
				"cpysimg11": require('@/assets/images/cpys-img11.jpg'),
				"cpysimg12": require('@/assets/images/cpys-img12.jpg'),
				"cpysimg13": require('@/assets/images/cpys-img13.jpg'),
				"cpysimg14": require('@/assets/images/cpys-img14.jpg'),
				"cpysimg15": require('@/assets/images/cpys-img15.jpg'),
				"cpysimg16": require('@/assets/images/cpys-img16.jpg'),
				"cpysimg17": require('@/assets/images/cpys-img17.jpg'),
				"cpysimg18": require('@/assets/images/cpys-img18.jpg'),
				"cpysimg19": require('@/assets/images/cpys-img19.jpg'),
				"cpysimg20": require('@/assets/images/cpys-img20.jpg'),
				"cpysimg21": require('@/assets/images/cpys-img21.jpg'),
				"cpysimg22": require('@/assets/images/cpys-img22.jpg'),
				"cpysimg23": require('@/assets/images/cpys-img23.jpg'),
				"cpysimg24": require('@/assets/images/cpys-img24.jpg'),
				"cpysimg25": require('@/assets/images/cpys-img25.jpg'),
				"cpysimg26": require('@/assets/images/cpys-img26.jpg'),
				"cpysimg27": require('@/assets/images/cpys-img27.jpg'),
				"cpysimg28": require('@/assets/images/cpys-img28.jpg'),
				"cpysimg29": require('@/assets/images/cpys-img29.jpg'),
				"cpysimg30": require('@/assets/images/cpys-img30.jpg'),
			}
		},
		methods: {

		},
		computed: {
			swiper() {
				return this.$refs.mySwiper.swiper
			}
		}
	}
</script>
<style>
	.cpys-ban {
		width: 18.75rem;
		height: 28.07rem;
		position: relative;
		overflow: hidden;
	}
	
	.cpys-ban-bg {
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background: url(../assets/images/cpys-ban.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.cpys-word1 {
		width: 3.72rem;
		height: 1.77rem;
		position: absolute;
		top: 4.625rem;
		left: 2.05rem;
		background: url(../assets/images/cpys-word1.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 2s;
		-webkit-animation-duration: 2s;
	}
	
	.cpys-word2 {
		width: 10.9rem;
		height: 4.27rem;
		position: absolute;
		top: 18.5rem;
		left: 4.725rem;
		background: url(../assets/images/cpys-word2.png) no-repeat;
		background-size: 100% 100%;
		animation-delay: 1s;
		-webkit-animation-delay: 1s;
	}
	/*img-box*/
	
	.cpys-img2 {
		width: 100%;
		height: 18.2rem;
		background: url(../assets/images/cpys-img2.jpg) no-repeat;
		background-size: 100% 100%;
		position: relative;
	}
	
	.cpys-img2 .cpys-img2-swiper {
		width: 16rem;
		height: 17rem;
		position: absolute;
		top: 0.67rem;
		left: 50%;
		margin-left: -8rem;
		overflow: hidden;
	}
	
	#swiper1 .cpys-swiper-pagination1 {
		bottom: -1.5rem;
	}
	
	.xian {
		width: 6.0rem;
		height: 0;
		border: 0.5px solid #a0a0a0;
		position: absolute;
		bottom: 1.4rem;
		left: 50%;
		margin-left: -3rem;
	}
	/*swiper1*/
	
	.swiper-container-horizontal>.cpys-swiper-pagination1 .swiper-pagination-bullet {
		width: 0.35rem;
		height: 0.35rem;
		border: 1px solid #a6a6a6;
		background: #ffffff;
		margin: 0 0.52rem;
	}
	
	.swiper-container-horizontal>.cpys-swiper-pagination1 .swiper-pagination-bullet-active {
		width: 0.55rem;
		height: 0.55rem;
		background: #ea5c3f!important;
		border: none;
		margin-top: 0.07rem;
	}
	/*swiper1*/
	
	.cpys-img5,
	.cpys-img7 {
		width: 18.75rem;
		height: 14.87rem;
		background: url(../assets/images/cpys-img5.jpg) no-repeat;
		background-size: 100% 100%;
		position: relative;
	}
	
	.cpys-img5-1 {
		width: 13.55rem;
		height: 1.3rem;
		background: url(../assets/images/cpys-img5.1.png) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		top: 0;
		left: 50%;
		margin-left: -6.77rem;
		z-index: 99;
	}
	
	.cpys-img5-2,
	.cpys-img6-2 {
		width: 17.95rem;
		height: 14.27rem;
		background: url(../assets/images/cpys-img5.2.gif) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		top: 0.65rem;
		left: 50%;
		margin-left: -8.97rem;
	}
	
	.cpys-img5-3 {
		width: 18.75rem;
		height: 14.87rem;
		background: url(../assets/images/cpys-img5.3.png) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		top: 0;
		left: 0;
		z-index: 999;
	}
	
	.cpys-img7 {
		background: url(../assets/images/cpys-img7.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.cpys-img7-2 {
		background: url(../assets/images/cpys-img7.2.gif) no-repeat;
		background-size: 100% 100%;
	}
	
	.cpys-img9 {
		width: 100%;
		height: 25.95rem;
		background: #f6f6f6;
		position: relative;
	}
	
	.cpys-img9-swiper {
		width: 17.25rem;
		height: 24.82rem;
		position: absolute;
		top: 0;
		left: 50%;
		margin-left: -8.62rem;
		overflow: hidden;
	}
	
	#swiper2 .cpys-swiper-pagination2 {
		bottom: 1.37rem;
	}
	/*swiper2*/
	
	.swiper-container-horizontal>.cpys-swiper-pagination2 .swiper-pagination-bullet {
		width: 0.45rem;
		height: 0.45rem;
		border: 1px solid #0c475d;
		background: transparent;
		margin: 0 0.3rem;
	}
	
	.swiper-container-horizontal>.cpys-swiper-pagination2 .swiper-pagination-bullet-active {
		width: 0.6rem;
		height: 0.6rem;
		background: url(../assets/images/cpys-swiper-pagination2-icon.png) no-repeat;
		background-size: 100% 100%;
		border: none;
	}
	/*swiper2*/
	
	.cpys-img31 {
		width: 100%;
		height: 4.57rem;
		background: white;
		overflow: hidden;
		position: relative;
	}
	
	.img31-border {
		width: 14.45rem;
		height: 2.82rem;
		position: absolute;
		top: 0;
		left: 50%;
		margin-left: -7.225rem;
		background: url(../assets/images/img31-border.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.img31-text {
		width: 9.92rem;
		height: 0.87rem;
		position: absolute;
		top: 0.87rem;
		left: 50%;
		margin-left: -4.96rem;
		background: url(../assets/images/img31-text.png) no-repeat;
		background-size: 100% 100%;
		z-index: 999;
	}
	
	.img31-bg {
		width: 14.07rem;
		height: 2.4rem;
		position: absolute;
		top: 0.2rem;
		left: 0.2rem;
		overflow: hidden;
	}
	
	.img31-bgin {
		width: 30rem;
		height: 2.4rem;
		background: #fedfd9;
		transform: skewX(-40deg);
		-webkit-transform: skewX(-40deg);
		position: absolute;
		left: 0;
		animation: more 3s ease-in infinite alternate-reverse;
		-webkit-animation: more 3s ease-in infinite alternate-reverse;
	}
	
	@keyframes more {
		from {
			left: 109%;
		}
		to {
			left: -50%;
		}
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
	
	.cpys-footer-word {
		width: 6.3rem;
		height: 0.67rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3375rem;
		left: 1.7rem;
		background: url(../assets/images/cpys-bottom-word.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.cpys-footer-circle {
		width: 0.6rem;
		height: 0.6rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3rem;
		right: 3.2rem;
		background: url(../assets/images/ppgs-bottom-circle.png) no-repeat;
		background-size: cover;
	}
	
	.cpys-footer-jt {
		width: 0.925rem;
		height: 0.275rem;
		position: absolute;
		top: 50%;
		margin-top: -0.16rem;
		right: 2.62rem;
		background: url(../assets/images/ppgs-bottom-jt.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
	}
</style>