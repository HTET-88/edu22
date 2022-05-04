window.onscroll = function(){ myFun() }
//var menu = document.getElementById('menu');
        var topPx = menu.offsetTop;

        function myFun(){
            if(window.pageYOffset >= topPx){
                menu.classList.add('FixMenuBar');
            }else{
                menu.classList.remove('FixMenuBar');
            }
        }