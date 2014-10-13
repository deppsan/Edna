$(document).ready(function(){	
    $("#btnNext").click(nextEx);
    $("#contador").click(cuentaRegresiva);
    setFirstValues();
    $("#btnNext").click(nextEx);
});

function cuentaRegresiva(){
    var $contador 	= $("#contador");
    var $hiddenDiv 	= $(".active");
    
    $($contador).css("margin-left","25%")
    			.css("margin-right","25%");
    $contador.css("zoom","4")
    		 .text("3");

    var p = function(){
        for(var i = 0 ; i <= 3 ; i++){
            $($contador).animate({
                zoom:"0",
                opacity:"0"
            },
            {duration:"slow",
                complete:function() {
                    if ($contador.text()-1 == 0) {
                        $contador.css("margin-left","20%")
                        		.text("Go!")
                        		.css("zoom", "4")
                        		.$contador
                        		.css("opacity", "1");
                    }else if($($contador).text() > 0) {
                        $($contador).text($contador.text() - 1)
                        			.css("zoom", "4")
                        			.css("opacity", "1");
                    }else{
                        $hiddenDiv.css("display","");
                        $(".result").focus();
                    }
                }
            });
        }
    };
    setTimeout(p,600);
}

function setFirstValues(){
	var r = "";
	$.each(content,function(k,v){
		if(k==0){
			 r = '<div class="hiddenDiv active ex" style="display: none;" number="'+k+'">';
		}else{
			 r += '<div class="hiddenDiv ex" style="display: none;" number="'+k+'">';
		}
	    r+=         '<div class="col-md-2"></div>';
	    r+=            '<div class="col-md-8" style="zoom:2;">';
	    r+=             '<label class="btn btn-default value1">'+v.a+'</label>';
		r+=                    '<label class="btn btn-default" i>+</label>';
	    r+=             '<label class="btn btn-default value2">'+v.b+'</label>';
	    r+=             '<label class="btn btn-default" i>=</label>';
	    r+=             '<input type="text" class="btn btn-default result" style="width: 60px" resultado"'+v.result+'"/>';
	    r+=         '</div>';
	    r+=         '<div class="col-md-2"></div>';
	    r+=     '</div>';
	});
	$("#divExArea").html(r);	
}

function nextEx(){
	
		$activeEx 	= $(".active.ex");
		$nextEx		= $activeEx.siblings().eq($activeEx.index());
		$input		= $activeEx.find("input");
		
		if($activeEx .find("input").val() != ""){
			
			$nextEx.css("position","relative")
				   .css("left","355px")
				   .css("opacity","0");
			
			$activeEx.css("position","relative");
			$activeEx.animate(
				{	left:"-167px",
					opacity:"0"
			},{
				complete:function(){
					if($nextEx[0] != null){
						$activeEx.css("display","none");
						
						$(".active").removeClass("active");
						$nextEx.addClass("active").css("display","");
						$nextEx.animate(
							{
								left:"",
								opacity:"1"
							}
						);
						$(".active").find("input").focus();
					}else{
						
					}
				}
			});	
		}else{
			$activeEx.find("input").focus();
		}
}

function reviewEx(paramInput){
	
}

function timeCounter(){
	
}
