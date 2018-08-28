<template>
	<div class="ydx">
		<!-- 目录   -->
		<router-link to="/home">
			<div class="ml-btn animated microFlash loop"></div>
		</router-link>
		<!-- banner -->
		<div class="ydx-ban">
			<div class="ydx-logo animated flipInX"></div>
			<div class="ydx-word1 animated popIn"></div>
			<div class="ydx-word2 animated fadeIn"></div>
		</div>
		<!-- img-box -->
		<div class="img-box">
			<img src="" alt="" v-lazy="ydximg1">
			<img src="" alt="" v-lazy="ydximg2">
			<img src="" alt="" v-lazy="ydximg3">
			<img src="" alt="" v-lazy="ydximg4">
			<div class="ydx-p">
				<img src="" alt="" v-lazy="ydximg5">
				<p><span>{{money.CydMoney[0]}}+<br/>2000元</span>年度运营服务费</p>
			</div>
			<img src="" alt="" v-lazy="ydximg6">
			<div class="ydx-p">
				<img src="" alt="" v-lazy="ydximg7">
				<p class="p-bzd"><span>{{money.CydMoney[1]}}</span>年度运营服务费</p>
			</div>
			<img src="" alt="" v-lazy="ydximg8">
			<div class="ydx-p">
				<img src="" alt="" v-lazy="ydximg9">
				<p class="p-qjd"><span>{{money.CydMoney[2]}}</span>年度运营服务费</p>
			</div>
			<img src="" alt="" v-lazy="ydximg10">
			<div class="ydx-table">
				<table border="1" cellspacing="0" cellpadding="0" align="center">
					<tr>
						<th colspan="4">费用一览表</th>
					</tr>
					<tr>
						<td>{{money.DltzCity[0]}}</td>
						<td>{{money.DltzMoney[0]}}</td>
						<td>{{money.DlyyMoney[0]}}</td>
					</tr>
					<tr>
						<td>{{money.DltzCity[1]}}</td>
						<td>{{money.DltzMoney[1]}}</td>
						<td rowspan="4">{{money.DlyyMoney[1]}}</td>
					</tr>
					<tr>
						<td>{{money.DltzCity[2]}}</td>
						<td>{{money.DltzMoney[2]}}</td>
					</tr>
					<tr>
						<td>{{money.DltzCity[3]}}</td>
						<td>{{money.DltzMoney[3]}}</td>
					</tr>
					<tr>
						<td>{{money.DltzCity[4]}}</td>
						<td>{{money.DltzMoney[4]}}</td>
					</tr>
				</table>
			</div>
			<img src="" alt="" v-lazy="ydximg11">
			<img src="" alt="" v-lazy="ydximg12">
		</div>
		<!-- footer -->
		<div class="ydx-footer">
			<router-link to="/dcp">
				<div class="btn ydx-pre animated slowFlash"></div>
			</router-link>
			<router-link to="/qcb">
				<div class="btn ydx-next animated slowFlash"></div>
			</router-link>
		</div>
	</div>
</template>
<script>
	import axios from 'axios';

	export default {
		name: "ydx",
		data() {
			return {

				money: {
					"CydMoney": [],
					"DltzCity": [],
					"DltzMoney": [],
					"DlyyMoney": []
				},

				ydximg1: require("@/assets/images/ydx-img1.jpg"),
				ydximg2: require("@/assets/images/ydx-img2.jpg"),
				ydximg3: require("@/assets/images/ydx-img3.jpg"),
				ydximg4: require("@/assets/images/ydx-img4.jpg"),
				ydximg5: require("@/assets/images/ydx-img5.jpg"),
				ydximg6: require("@/assets/images/ydx-img6.jpg"),
				ydximg7: require("@/assets/images/ydx-img7.jpg"),
				ydximg8: require("@/assets/images/ydx-img8.jpg"),
				ydximg9: require("@/assets/images/ydx-img9.jpg"),
				ydximg10: require("@/assets/images/ydx-img10.jpg"),
				ydximg11: require("@/assets/images/ydx-img11.jpg"),
				ydximg12: require("@/assets/images/ydx-img12.jpg"),

			}
		},
		methods: {},
		created: function() {
			let self = this;
			let time = (new Date()).valueOf();
			axios.get(`./static/data.js?t=${time}`)
				.then(function(res) {
					self.money = res.data;
				});
		}
	}
</script>
<style scoped>
	/*banner*/
	
	.ydx-ban {
		width: 18.75rem;
		height: 30.15rem;
		position: relative;
		background: url(../assets/images/ydx-ban.jpg) no-repeat;
		background-size: 100% 100%;
	}
	
	.ydx-logo {
		width: 3.25rem;
		height: 2.075rem;
		position: absolute;
		top: 0;
		left: 50%;
		margin-left: -1.625rem;
		background: url(../assets/images/ydx-logo.png) no-repeat;
		background-size: 100% 100%;
	}
	
	.ydx-word1 {
		width: 14.25rem;
		height: 3.875rem;
		position: absolute;
		top: 3.15rem;
		left: 50%;
		margin-left: -7.225rem;
		background: url(../assets/images/ydx-word1.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
		animation-delay: 0.4s;
		-webkit-animation-delay: 0.4s;
	}
	
	.ydx-word2 {
		width: 13.95rem;
		height: 1.675rem;
		position: absolute;
		top: 7.65rem;
		left: 50%;
		margin-left: -7.225rem;
		background: url(../assets/images/ydx-word2.png) no-repeat;
		background-size: 100% 100%;
		animation-duration: 1.5s;
		-webkit-animation-duration: 1.5s;
		animation-delay: 0.8s;
		-webkit-animation-delay: 0.8s;
	}
	
	.ydx-table {
		width: 18.75rem;
		height: 10.87rem;
		background: #fef8ee;
	}
	
	.ydx-table table {
		width: 17.25rem;
		height: 10.87rem;
		border-color: #ccc;
		font-size: 0.67rem;
		background: #fffdfa;
	}
	
	.ydx-table table th {
		font-size: 0.75rem;
		font-weight: 800;
		color: #7e3400;
	}
	
	.ydx-table table tr:nth-child(2) {
		background: #fcf1e2;
	}
	
	.ydx-table table tr:nth-child(3) td:nth-child(2) {
		color: #972020;
		font-weight: 800;
	}
	
	.ydx-table table tr:nth-child(4) td:nth-child(2) {
		color: #972020;
		font-weight: 800;
	}
	
	.ydx-table table tr:nth-child(5) td:nth-child(2) {
		color: #972020;
		font-weight: 800;
	}
	
	.ydx-table table tr:nth-child(6) td:nth-child(2) {
		color: #972020;
		font-weight: 800;
	}
	
	.ydx-table table tr td {
		font-size: 0.67rem;
		font-weight: 600;
	}
	/*img-box*/
	
	.ydx-p {
		position: relative;
	}
	
	.ydx-p p {
		font-size: 0.65rem;
		font-weight: 800;
		text-align: left;
		position: absolute;
		top: 7.85rem;
		left: 11.02rem;
	}
	
	.ydx-p span {
		color: #9a460b;
	}
	
	.ydx-p .p-bzd {
		position: absolute;
		top: 10.43rem;
		left: 6.32rem;
	}
	
	.ydx-p .p-qjd {
		position: absolute;
		top: 10.56rem;
		left: 6.32rem;
	}
	/*img-box*/
	/*footer*/
	
	.ydx-footer {
		width: 18.75rem;
		height: 6.52rem;
		position: relative;
		background: #ffffff;
	}
	
	.btn {
		width: 3.5rem;
		height: 2.225rem;
		position: absolute;
		bottom: 2.42rem;
	}
	
	.ydx-pre {
		background: url(../assets/images/ydx-pre.png) no-repeat;
		background-size: 100% 100%;
		left: 3.57rem;
	}
	
	.ydx-next {
		background: url(../assets/images/ydx-next.png) no-repeat;
		background-size: 100% 100%;
		right: 3.57rem;
	}
</style>