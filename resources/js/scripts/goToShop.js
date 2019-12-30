$(".go-to-shop").click(function(){
            if(window.location.pathname == '/' || window.location.pathname=='/index' || window.location.pathname=='/shop'){
                
                $('html,body').animate({ scrollTop:$('#shop').offset().top -150  }, 'slow');
                
                return false;

            }else{
                var url  = ""+window.location.origin+"/shop";
                                    
                window.location.href = url;                    
     
            }



     });