
// 1.获取元素
var el = document.querySelector(".time");
   // 2. 得到当前的小时数
   var nowTime = new Date();
   var h = nowTime.getHours();
   // 3. 判断小时数,改变文字信息
   if (h <=11.59) {
    
    el.innerHTML = 'Good Morning';
} else if (h>=12 && h <= 17) {
    
    el.innerHTML = 'Good Afternoon';
} else if (h>=17.01 && h<=23.59) {
    
    el.innerHTML = 'Good Evening';

}

// 1. 获取元素
var elw = document.querySelector(".icon");
// 2. 得到当前的小时数
var nowTime = new Date();
var h = nowTime.getHours();
// 3. 判断小时数,改变图标信息
if (h>=6 && h<=18){
    //引入iconfont的代码，需要设置span字体
    elw.innerHTML='&#xe635;'
}
else {
    elw.innerHTML='&#xe6c2;'
}
// 取消一秒空白：
play();
//function play 与后面的setInterval配合使用（重要）
function play(){
var date = new Date();
	var current_time = date.getHours()+":"+date.getMinutes()+":"+ date.getSeconds();
	document.getElementById("p1").innerHTML = current_time;}
    setInterval(play,1000);//每一秒执行一次
    