var li=document.querySelectorAll("li");
for(var i=0;i<li.length;i++)
li[i].addEventListener("click",function(){
alert("appointment with "+this.textContent);
doctor=this.textContent;

});
//<script src="js.js"></script>
