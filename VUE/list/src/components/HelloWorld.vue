<template>
  <div class="hello">
    <div class="list-top-wrap">
      <div class="list-top" v-for="(listT,index) in listTop" :key="index" :class="{'active' : active==index}" @click="changeActive(index)">{{listT}}</div>
    </div>
    <div class="list-content"></div>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      'listTop':['K歌榜','富豪榜','麦霸榜','铁粉榜'],
      'active':''
    }
  },
  methods:{
    changeActive(index){
      this.active = index;
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.list-top-wrap{
  width: 100%;
  height: 60px;
  border-right: 1px solid #f0f;
  overflow: hidden;
}
.list-top{
  width: 24%;
  float: left;
  height: 59px;
  line-height: 59px;
  background: #3b3e40;
  color: #fff;
  border-bottom: 1px solid #f0f;
}
.active{
  background: #000;
  border-left: 1px solid #f0f;
  border-right: 1px solid #f0f;
  border-bottom: none;
}
.list-content{
  width: 100%;
  background: #000;
  height: 500px;
}
</style>
