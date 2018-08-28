<template>
	<div class="kdfa">
		<!-- ml  -->
		<router-link to="/home">
			<div class="ml-word"></div>
			<div class="ml-btn"></div>
		</router-link>
		<!-- banner  -->
		<div class="kdfa-ban">
			<div class="kdfa-ban-bg"></div>
			<div class="kdfa-word1 animated jackInTheBox"></div>
			<div class="kdfa-word2 animated fadeIn"></div>
			<div class="scqs-jt animated topGuide"></div>
		</div>
		<!--img-box-->
		<div class="img-box">
			<img src="" alt="" v-lazy="kdfaimg1">
			<img src="" alt="" v-lazy="kdfaimg2">
			<img src="" alt="" v-lazy="kdfaimg3">
			<div class="kdfa-img4">
				<img src="" alt="" v-lazy="kdfaimg4">
				<p>1人几㎡，选址灵活成本更低<br />{{money.dianMoney[0]}}<br/>店面管理费 <br/>{{money.guanliMoney[0]}}</p>
			</div>
			<img src="" alt="" v-lazy="kdfaimg5">
			<div class="kdfa-img4 kdfa-img6">
				<img src="" alt="" v-lazy="kdfaimg6">
				<p>组合式装修,成本环保低廉 <br />{{money.dianMoney[1]}}<br /> 店面管理费{{money.guanliMoney[0]}}</p>
			</div>
			<img src="" alt="" v-lazy="kdfaimg7">
			<div class="kdfa-img4 kdfa-img8">
				<img src="" alt="" v-lazy="kdfaimg8">
				<p>总部重点扶持，堂食+外卖+外送<br />{{money.dianMoney[2]}}<br />店面管理费{{money.guanliMoney[0]}}</p>
			</div>
			<img src="" alt="" v-lazy="kdfaimg9">
			<div class="kdfa-img10">
				<img src="" alt="" v-lazy="kdfaimg10">
				<div class="img10-table">
					<div class="img10-title"></div>
					<table>
						<tr>
							<td>区域划分</td>
							<td>投资费用</td>
							<td>年度营运服务费</td>
						</tr>
						<tr>
							<td>三线城市</td>
							<td>{{money.tzfy[0]}}</td>
							<td>{{money.ndyyfwf[0]}}</td>
						</tr>
						<tr>
							<td>二线城市</td>
							<td>{{money.tzfy[1]}}</td>
							<td>{{money.ndyyfwf[0]}}</td>
						</tr>
						<tr>
							<td>一线城市</td>
							<td>{{money.tzfy[2]}}</td>
							<td>{{money.ndyyfwf[0]}}</td>
						</tr>
						<tr>
							<td>核心城市及 核心区域</td>
							<td>{{money.tzfy[3]}}</td>
							<td>{{money.ndyyfwf[0]}}</td>
						</tr>
					</table>

				</div>
			</div>
			<img src="" alt="" v-lazy="kdfaimg11">
			<div class="cpys-img31">
				<a href="./vi/" class="img31-border">
					<div class="kdfa-img31-text"></div>
					<div class="img31-bg">
						<div class="img31-bgin"></div>
					</div>
				</a>
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<router-link to="/fwzn">
				<div class="footer-con">
					<div class="kdfa-footer-word animated slowFlash"></div>
					<div class="kdfa-footer-circle"></div>
					<div class="kdfa-footer-jt animated rightGuide"></div>
				</div>
			</router-link>
		</div>
	</div>
</template>
<script>
	import { swiper, swiperSlide } from 'vue-awesome-swiper';
	import axios from 'axios';

	export default {
		name: "kdfa",
		data() {
			return {

				money: {
					"dianMoney": [],
					"guanliMoney": [],
					"tzfy": [],
					"ndyyfwf": []
				},

				"kdfaimg1": require('@/assets/images/kdfa-img1.jpg'),
				"kdfaimg2": require('@/assets/images/kdfa-img2.gif'),
				"kdfaimg3": require('@/assets/images/kdfa-img3.jpg'),
				"kdfaimg4": require('@/assets/images/kdfa-img4.jpg'),
				"kdfaimg5": require('@/assets/images/kdfa-img5.jpg'),
				"kdfaimg6": require('@/assets/images/kdfa-img6.jpg'),
				"kdfaimg7": require('@/assets/images/kdfa-img7.jpg'),
				"kdfaimg8": require('@/assets/images/kdfa-img8.jpg'),
				"kdfaimg9": require('@/assets/images/kdfa-img9.jpg'),
				"kdfaimg10": require('@/assets/images/kdfa-img10.jpg'),
				"kdfaimg11": require('@/assets/images/kdfa-img11.jpg'),
			}
		},
		methods: {

		},
		created: function() {
			let self = this;
			let time = (new Date()).valueOf();
			axios.get(`./data/data.js?t=${time}`)
				.then(function(res) {
					self.money = res.data;
				});
		}

	}
</script>
<style scoped>
	/*banner*/
	
	.kdfa-ban {
		width: 18.75rem;
		height: 28.07rem;
		position: relative;
		overflow: hidden;
	}
	
	.kdfa-ban-bg {
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0;
		left: 0;
		background: url(../assets/images/kdfa-ban.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.kdfa-word1 {
		width: 3.6rem;
		height: 1.75rem;
		position: absolute;
		top: 4.625rem;
		left: 2.05rem;
		background: url(../assets/images/kdfa-word1.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 2s;
		-webkit-animation-duration: 2s;
	}
	
	.kdfa-word2 {
		width: 12.7rem;
		height: 4.17rem;
		position: absolute;
		top: 18.55rem;
		left: 3.77rem;
		background: url(../assets/images/kdfa-word2.png) no-repeat;
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
	
	.kdfa-img4 {
		position: relative;
	}
	
	.kdfa-img4 p {
		width: 4.95rem;
		height: 4.5rem;
		font-size: 0.62rem;
		color: #4e4e4e;
		line-height: 0.95rem;
		text-align: left;
		font-weight: 600;
		position: absolute;
		top: 3.4rem;
		left: 2.25rem;
	}
	
	.kdfa-img6 p {
		width: 7.5rem;
		height: 2.67rem;
		top: 11.15rem;
		left: 2.67rem;
	}
	
	.kdfa-img8 p {
		width: 8.8rem;
		height: 2.7rem;
		top: 11.25rem;
	}
	
	.kdfa-img10 {
		height: 8.9rem;
		position: relative;
	}
	
	.img10-title {
		width: 11.52rem;
		height: 0.72rem;
		background: url(../assets/images/img10-title.png) no-repeat;
		background-size: 100% 100%;
		position: absolute;
		top: 0.32rem;
		left: 50%;
		margin-left: -5.76rem;
	}
	
	.img10-table {
		width: 14.12rem;
		height: 8.85rem;
		border: 1px solid #a0a0a0;
		position: absolute;
		top: -0.09rem;
		left: 50%;
		margin-left: -6.8rem;
	}
	
	.img10-table table {
		height: 7.37rem;
		border-top: 1px solid #d2d2d2;
		position: absolute;
		bottom: 0;
		left: 0;
		font-size: 0.5rem;
	}
	
	.img10-table table tr {
		border-top: 1px solid #d2d2d2;
		padding: 0.06rem 0;
	}
	
	.img10-table table tr td:nth-child(1) {
		width: 4.4rem;
		background: #dcdcdc;
		color: black;
	}
	
	.img10-table table tr td:nth-child(2) {
		width: 4rem;
		background: #ff6633;
		color: white;
	}
	
	.img10-table table tr td:nth-child(3) {
		width: 5.3rem;
		background: #ff6633;
		color: white;
	}
	
	.img10-table table tr:nth-child(1) td {
		background: #dcdcdc;
		color: black;
	}
	
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
	
	.kdfa-img31-text {
		width: 11.15rem;
		height: 0.87rem;
		position: absolute;
		top: 0.87rem;
		left: 50%;
		margin-left: -5.57rem;
		background: url(../assets/images/kdfa-img31-text.png) no-repeat;
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
	
	.kdfa-footer-word {
		width: 8.02rem;
		height: 0.67rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3375rem;
		left: 1.2rem;
		background: url(../assets/images/kdfa-bottom-word.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.kdfa-footer-circle {
		width: 0.55rem;
		height: 0.55rem;
		position: absolute;
		top: 50%;
		margin-top: -0.3rem;
		right: 2.625rem;
		background: url(../assets/images/ppgs-bottom-circle.png) no-repeat;
		background-size: cover;
	}
	
	.kdfa-footer-jt {
		width: 0.925rem;
		height: 0.275rem;
		position: absolute;
		top: 50%;
		margin-top: -0.16rem;
		right: 2rem;
		background: url(../assets/images/ppgs-bottom-jt.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
	}
</style>