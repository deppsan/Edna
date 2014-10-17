var exit = false;
$(document).ready(function(){		
	$("body").addClass("page-full-width");
    setFirstValues();
    $("#btnNext").on("click",nextEx);
    $("#contador").on("click",cuentaRegresiva);
    $("#btnEnd").on("click",nextEx);
    $("#btnEnd").on("click",finalReviewEx);
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
                        		.css("opacity", "1");
                    }else if($($contador).text() > 0) {
                        $($contador).text($contador.text() - 1)
                        			.css("zoom", "4")
                        			.css("opacity", "1");
                    }else{
                        $hiddenDiv.css("display","");
                        $(".result").focus();
                        $(".row.hiddenDiv").removeClass("hiddenDiv");
                    }                    
                }
            });
        }
        setTimeout(function(){createTimer("divRegresiva",duration*60,"btnEnd");},2500);;
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
	    r+=             '<input type="text" class="btn btn-default result" style="width: 60px" resultado="'+v.result+'"/>';
	    r+=         '</div>';
	    r+=         '<div class="col-md-2"></div>';
	    r+=     '</div>';
	});
	$("#divExArea").html(r);	
}

function nextEx(){
	
		var $activeEx 	= $(".active.ex");
		var $nextEx		= $activeEx.siblings().eq($activeEx.index());
		var $input		= $activeEx.find("input");
		var asdf = content.length-2;
		var qwer = $activeEx.attr("number");
		
		if(asdf == qwer){
			$("#btnNext").css("display","none");
			$("#btnEnd").css("display","");
		}
		
		if($activeEx .find("input").val() != ""){
			reviewEx($input);
			
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
						$nextEx.addClass("active")
							   .css("display","")
							   .animate(
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
	var index = paramInput.parent().parent().attr("number");
	if(paramInput.val() == paramInput.attr("resultado")){
		content[index].success = true;
	}else{
		content[index].success = false;
		content[index].answer = paramInput.val();
	}
}

function finalReviewEx(){
	if(exit){
		window.location = "/Edna/index.php/student_dashboard_controller/testReturn";
	}else{
		$(".reload").click();
		var p = function(){
				var $divExArea = $("#divExArea");
				var r = "";
				$.each(content,function(k,v){				
					r+= '<div class="row">';			
				    r+=         '<div class="col-md-2"></div>';
				    r+=            '<div class="col-md-8" style="zoom:2;">';
				    r+=             '<label class="btn btn-default value1">'+v.a+'</label>';
					r+=                    '<label class="btn btn-default" i>+</label>';
				    r+=             '<label class="btn btn-default value2">'+v.b+'</label>';
				    r+=             '<label class="btn btn-default" i>=</label>';
				    if(v.success){
				   		 r+=             '<input type="text" class="btn btn-default result" style="width: 60px;background-color: #f0f0f0;border-color: green;" enable="emable" value="'+v.result+'"/>'; 	
				    }else{
				    	 r+=             '<input type="text" class="btn btn-default result" style="width: 60px;background-color: #f0f0f0;border-color: red;" enable="emable" value="'+(v.answer==undefined?"":v.answer)+'"/> '+v.result;
				    }			   
				    r+=         '</div>';
				    r+=         '<div class="col-md-2"></div>';
				    r+= '</div><br>';
				});
				$("#testBody").css("height","")
							  .children()
							  .css("height","");
				$(".hiddenDiv.ex").remove();
				$divExArea.html(r);
		};
		setTimeout(p,800);
		exit = true;
		
		$("#btnEnd").unbind("click",nextEx);
	}
}
