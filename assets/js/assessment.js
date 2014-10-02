$(document).ready(function(){
    $("#contador").click(cuentaRegresiva);
});

function cuentaRegresiva(){
    var $contador = $("#contador");
    var $divAreaTest = $("#divAreaTest");
    
    $($contador).css("margin-left","25%");
    $($contador).css("margin-right","25%");
    $contador.css("zoom","4");
    $contador.text("3");

    var p = function(){
        for(var i = 0 ; i <= 3 ; i++){
            $($contador).animate({
                zoom:"0",
                opacity:"0"
            },{duration:"slow",
                complete:function() {
                    if ($contador.text()-1 == 0) {
                        $contador.css("margin-left","20%");
                        $contador.text("Go!");
                        $contador.css("zoom", "4");
                        $contador.css("opacity", "1");
                    }else if($($contador).text() > 0) {
                        $($contador).text($contador.text() - 1);
                        $($contador).css("zoom", "4");
                        $($contador).css("opacity", "1");
                    }else{
                        $divAreaTest.css("margin-left","10%");
                        $divAreaTest.css("display","");
                    }
                }
            });
        }
    };

    setTimeout(p,600);

}