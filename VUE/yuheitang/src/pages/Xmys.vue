<template>
	<div class="xmys">
		<!-- ml  -->
		<router-link to="/home">
			<div class="ml-word"></div>
			<div class="ml-btn"></div>
		</router-link>
		<!-- banner  -->
		<div class="xmys-ban">
			<div class="xmys-ban-bg"></div>
			<div class="xmys-word1 animated jackInTheBox"></div>
			<div class="xmys-word2 animated fadeIn"></div>
			<div class="scqs-jt animated topGuide"></div>
		</div>
		<!--img-box-->
		<div class="img-box">
			<img src="" alt="" v-lazy="xmysimg1">
			<div class="xmys-img2">
				<img src="" alt="" v-lazy="xmysimg2">
				<div class="xmys-img2-swiper">
					<div class="swiper-wrap">
						<swiper :options="swiperOption1" ref="mySwiper" id="swiper1">
							<!--slides-->
							<swiper-slide>
								<img width="100%" src="../assets/images/xmys-slide1.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/xmys-slide2.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/xmys-slide3.jpg" />
							</swiper-slide>
							<!--pagination-->
							<div class="swiper-pagination xmys-swiper-pagination1" slot="pagination"></div>
						</swiper>
					</div>
				</div>
				<div class="xmys-img2-title"></div>
			</div>
			<img src="" alt="" v-lazy="xmysimg3">
			<div class="xmys-img2 xmys-img4">
				<img src="" alt="" v-lazy="xmysimg4">
				<div class="xmys-img4-swiper">
					<div class="swiper-wrap">
						<swiper :options="swiperOption1" ref="mySwiper" id="swiper1">
							<!--slides-->
							<swiper-slide>
								<img width="100%" src="../assets/images/xmys-slide4.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/xmys-slide5.jpg" />
							</swiper-slide>
							<swiper-slide>
								<img width="100%" src="../assets/images/xmys-slide6.jpg" />
							</swiper-slide>
							<!--pagination-->
							<div class="swiper-pagination xmys-swiper-pagination1" slot="pagination"></div>
						</swiper>
					</div>
				</div>
			</div>
			<img src="" alt="" v-lazy="xmysimg5">
			<img src="" alt="" v-lazy="xmysimg6">
			<img src="" alt="" v-lazy="xmysimg7">
			<div class="xmys-img8">
				<img src="" alt="" v-lazy="xmysimg8">
			</div>
			<img src="" alt="" v-lazy="xmysimg9">
			<img src="" alt="" v-lazy="xmysimg10">
			<img src="" alt="" v-lazy="xmysimg11">
			<img src="" alt="" v-lazy="xmysimg12">
			<img src="" alt="" v-lazy="xmysimg13">
			<div class="xmys-img14">
				<div class="xmys-img14-swiper">
					<!-- Swiper -->
					<div class="swiper-container gallery-top">
						<div class="swiper-wrapper">
							<swiper :options="swiperOption3" ref="mySwiper" id="swiper3">
								<!--slides-->
								<swiper-slide>
									<img width="100%" src="../assets/images/xmys-slide7.jpg" />
								</swiper-slide>
								<swiper-slide>
									<img width="100%" src="../assets/images/xmys-slide8.jpg" />
								</swiper-slide>
								<swiper-slide>
									<img width="100%" src="../assets/images/xmys-slide9.jpg" />
								</swiper-slide>
							</swiper>
						</div>
						<!-- Add Arrows -->
						<div class="swiper-button-next swiper-button-white"></div>
						<div class="swiper-button-prev swiper-button-white"></div>
						<!--pagination-->
						<div class="swiper-pagination xmys-swiper-pagination3" slot="pagination"></div>
					</div>
				</div>
			</div>
			<img src="" alt="" v-lazy="xmysimg15">
			<img src="" alt="" v-lazy="xmysimg16">
			<img src="" alt="" v-lazy="xmysimg17">
			<img src="" alt="" v-lazy="xmysimg18">
			<img src="" alt="" v-lazy="xmysimg19">

		</div>
		<!-- footer -->
		<div class="footer">
			<router-link to="/cpys">
				<div class="footer-con">
					<div class="xmys-footer-word animated slowFlash"></div>
					<div class="xmys-footer-circle"></div>
					<div class="xmys-footer-jt animated rightGuide"></div>
				</div>
			</router-link>
		</div>
	</div>
</template>
<script>
	import { swiper, swiperSlide } from 'vue-awesome-swiper';

	export default {
		name: "xmys",
		data() {
			return {

				swiperOption1: {
					autoplay: true,
					loop: true,
					speed: 300,
					slidesPerView: 1,
					spaceBetween: 5,
					pagination: {
						el: '.xmys-swiper-pagination1',
						clickable: true,
					},
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},

					autoplay: {
						disableOnInteraction: false,
					}
				},

				swiperOption3: {
					autoplay: true,
					loop: true,
					speed: 300,
					slidesPerView: 1,
					spaceBetween: 5,
					pagination: {
						el: '.xmys-swiper-pagination3',
						clickable: true,
					},
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},

					autoplay: {
						disableOnInteraction: false,
					}
				},

				"xmysimg1": require('@/assets/images/xmys-img1.jpg'),
				"xmysimg2": require('@/assets/images/xmys-img2.jpg'),
				"xmysimg3": require('@/assets/images/xmys-img3.jpg'),
				"xmysimg4": require('@/assets/images/xmys-img4.jpg'),
				"xmysimg5": require('@/assets/images/xmys-img5.jpg'),
				"xmysimg6": require('@/assets/images/xmys-img6.jpg'),
				"xmysimg7": require('@/assets/images/xmys-img7.jpg'),
				"xmysimg8": require('@/assets/images/xmys-img8.gif'),
				"xmysimg9": require('@/assets/images/xmys-img9.jpg'),
				"xmysimg10": require('@/assets/images/xmys-img10.jpg'),
				"xmysimg11": require('@/assets/images/xmys-img11.jpg'),
				"xmysimg12": require('@/assets/images/xmys-img12.jpg'),
				"xmysimg13": require('@/assets/images/xmys-img13.jpg'),
				"xmysimg15": require('@/assets/images/xmys-img15.jpg'),
				"xmysimg16": require('@/assets/images/xmys-img16.jpg'),
				"xmysimg17": require('@/assets/images/xmys-img17.jpg'),
				"xmysimg18": require('@/assets/images/xmys-img18.jpg'),
				"xmysimg19": require('@/assets/images/xmys-img19.jpg'),
			}
		},
		methods: {

		}
	}
</script>
<style>
	/*banner*/
	
	.xmys-ban {
		width: 18.75rem;
		height: 28.07rem;
		position: relative;
		overflow: hidden;
	}
	
	.xmys-ban-bg {
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background: url(../assets/images/xmys-ban.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.xmys-word1 {
		width: 3.52rem;
		height: 1.77rem;
		position: absolute;
		top: 4.625rem;
		left: 2.05rem;
		background: url(../assets/images/xmys-word1.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 2s;
		-webkit-animation-duration: 2s;
	}
	
	.xmys-word2 {
		width: 10.85rem;
		height: 4.25rem;
		position: absolute;
		top: 18.5rem;
		left: 4.5rem;
		background: url(../assets/images/xmys-word2.png) no-repeat;
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
	/*swiper1*/
	
	.xmys-img2 {
		position: relative;
	}
	
	.xmys-img2-title {
		width: 9.25rem;
		height: 1.05rem;
		background: url(../assets/images/xmys-img2-title.png) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		bottom: 0.75rem;
		left: 0.75rem;
		z-index: 999;
	}
	
	.xmys-img2-swiper {
		width: 9.87rem;
		height: 10.57rem;
		position: absolute;
		top: 0;
		right: 0.75rem;
		overflow: hidden;
	}
	
	#swiper1 .xmys-swiper-pagination1 {
		bottom: 0.5rem;
	}
	
	.swiper-container-horizontal>.xmys-swiper-pagination1 .swiper-pagination-bullet {
		width: 0.37rem;
		height: 0.37rem;
		border: 1px solid #FFFFFF;
		background: transparent;
		margin: 0 0.27rem;
	}
	
	.swiper-container-horizontal>.xmys-swiper-pagination1 .swiper-pagination-bullet-active {
		width: 0.37rem;
		height: 0.37rem;
		background: #FFFFFF;
	}
	/*swiper1*/
	/*swiper2*/
	
	.xmys-img4-swiper {
		width: 9rem;
		height: 8.75rem;
		position: absolute;
		top: 0;
		left: 1.1rem;
		overflow: hidden;
	}
	/*swiper2*/
	
	.xmys-img8 {
		position: relative;
	}
	
	.xmys-img8 img {
		width: 17.25rem;
		height: 13.2rem;
		margin: 0 auto;
	}
	
	.xmys-img14 {
		width: 100%;
		height: 19.17rem;
		position: relative;
	}
	/*swiper3*/
	
	.gallery-top {
		width: 12.82rem;
		height: 19.07rem;
		position: absolute;
		right: 0.75rem;
	}
	
	#swiper3 {
		width: 12.82rem;
		height: 19.07rem;
		overflow: hidden;
	}
	
	.xmys-swiper-pagination3 {
		width: 4.17rem;
		height: 19.12rem;
		top: 0;
		left: -4.47rem;
	}
	
	.gallery-top .swiper-pagination-clickable .swiper-pagination-bullet {
		width: 4.17rem;
		height: 6.22rem;
		border-radius: 0;
		filter: brightness(70%);
	}
	
	.gallery-top .swiper-pagination-clickable .swiper-pagination-bullet:nth-child(1) {
		background: url(../assets/images/xmys-swiper-pagination3-1.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.gallery-top .swiper-pagination-clickable .swiper-pagination-bullet:nth-child(2) {
		background: url(../assets/images/xmys-swiper-pagination3-2.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.gallery-top .swiper-pagination-clickable .swiper-pagination-bullet:nth-child(3) {
		background: url(../assets/images/xmys-swiper-pagination3-3.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.gallery-top .swiper-pagination-clickable .swiper-pagination-bullet-active {
		filter: brightness(100%);
	}
	/*swiper3*/
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
	
	.xmys-footer-word {
		width: 5.5rem;
		height: 0.67rem;
		position: absolute;
		top: 50%;
		left: 2.2rem;
		margin-top: -0.385rem;
		background: url(../assets/images/xmys-bottom-word.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.xmys-footer-circle {
		width: 0.6rem;
		height: 0.6rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3rem;
		right: 3.625rem;
		background: url(../assets/images/ppgs-bottom-circle.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.xmys-footer-jt {
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