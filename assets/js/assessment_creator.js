/**
 * Created by LTrevino on 10/1/14.
 */
$(document).ready(function(){
    /*$('#form_wizard_1').find('.button-next').hide();*/
    $("#cmbCategory").change(getSubCategories);
    $("#cmbSubCategory").change(getSkills);
    $("#btnReset").click(btnReset);
    $("#cmbSkill").change(cmbSkill);
    $("#btnContinue").click(btnContinue);
    $("#btnBack").click(btnBack);
    $("#tSetLim").hover(tSetLim);
    $("#cmbSpSkill").change(cmbSpSkill);
    $("#btnResetSkill").click(btnResetSkill);
    getCategories();

    /*Esto es correcto????*/

    var $btnContinue        =   $("#btnContinue");
    $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");




});


/* ------------------------------------    TAB 1    ---------------------------------------*/



function getCategories(){

    var $cmbCategory    =   $("#cmbCategory");

        $.ajax({
            type	    : 'POST',
            url		    : urlBase+"index.php/assesment_creator_controller/getCategoryArray",
            dataType    : 'json',
            async       : true,
            success 	: function(data){
                $.each(data,function(k,v){
                    $cmbCategory.append('<option value="'+(k+1)+'">'+v+'</option>');
                });
            }
        });
}


function getSubCategories(){

    var $cmbSubCategory     =   $("#cmbSubCategory");
    var $cmbCategory        =   $("#cmbCategory");
    var $lCategory          =   $("#lCategory");
    var $btnReset           =   $("#btnReset");


    if($cmbCategory.val() != 0){
        $cmbSubCategory.parent("div").parent("div").css("display","");
        $cmbCategory.attr("disabled",true).css("color","#dcdcdc").css("background-color","white");
        $lCategory.css("color","#b0b0b0");
        $btnReset.parent("div").parent("div").css("display","");
        

        $.ajax({
            type	    : 'POST',
            url		    : urlBase+"index.php/assesment_creator_controller/getSubCategoryArray",
            data        : 'category='+$cmbCategory.val(),
            dataType    : 'json',
            async       : false,
            success 	: function(data){
                $.each(data,function(k,v){
                    $cmbSubCategory.append('<option value="'+(k+1)+'">'+v+'</option>');
                });
            }
        });

    }



}


function getSkills(){

    var $cmbSubCategory     =   $("#cmbSubCategory");
    var $lSubCategory       =   $("#lSubCategory");
    var $btnContinue        =   $("#btnContinue");
    var $cmbSkill           =   $("#cmbSkill");

    if($cmbSubCategory.val() != 0) {
        $lSubCategory.css("color","#b0b0b0");
        $btnContinue.parent("div").parent("div").parent("div").css("border-color","#e5e5e5").attr("display","");
        $btnContinue.attr("disabled",false).css("background-color","#d64635").css("color","white");

        $.ajax({
            type	    : 'POST',
            url		    : urlBase+"index.php/assesment_creator_controller/getSkillArray",
            data        : 'subCategory='+$cmbSubCategory.val(),
            dataType    : 'json',
            async       : false,
            success 	: function(data){
                $.each(data,function(k,v){
                    $cmbSkill.append('<option value="'+(k+1)+'">'+v+'</option>');
                });
            }
        });

    }
    else{
        $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
        $lSubCategory.css("color","#d64635");

    }
}


function btnReset(){

    var $cmbCategory        =   $("#cmbCategory");
    var $cmbSubCategory     =   $("#cmbSubCategory");
    var $lCategory          =   $("#lCategory");
    var $lSubCategory       =   $("#lSubCategory");
    var $btnContinue        =   $("#btnContinue");
    var $btnReset           =   $("#btnReset");
    var $cmbSkill           =   $("#cmbSkill");


    $cmbCategory.val(0);
    $cmbSubCategory.html('<option value="0">Select...</option>');
    $cmbSubCategory.parent("div").parent("div").css("display","none");
    $cmbCategory.attr("disabled",false).css("color","black");
    /*$cmbSubCategory.attr("disabled",false).css("color","black");*/
    $lCategory.css("color","#d64635");
    $lSubCategory.css("color","#d64635");
    $btnReset.parent("div").parent("div").css("display","none");
    $btnContinue.parent("div").parent("div").parent("div").css("border-color","white").attr("display","none");
    $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
    $cmbSkill.val(0);

}

function btnBack(){
    var $btnContinue        =   $("#btnContinue");

        $btnContinue.attr("disabled",false).css("background-color","#d64635").css("color","white");
}

function btnContinue(){
    var $btnContinue        =   $("#btnContinue");
    var $cmbSkill           =   $("#cmbSkill");

    if($cmbSkill.val() == 0){
        $btnContinue.attr("disabled",true)
         .css("background-color","white")
         .css("color","#b0b0b0");


    }
}




/* ------------------------------------    TAB 2    ---------------------------------------*/




function cmbSkill(){
    var $cmbSkill           =   $("#cmbSkill");
    var $cmbSpSkill          =   $("#cmbSpSkill");
    var $btnContinue        =   $("#btnContinue");
    var $lSkill            =   $("#lSkill");
    var $btnResetSkill         =   $("#btnResetSkill");
    var $cmbExType          =   $("#cmbExType");


    if( $cmbSkill.val() != 0 ) {

        $lSkill.css("color","#b0b0b0");

        if( ($cmbSkill.val() > 2) && ($cmbSkill.val() < 7) ){
            $cmbSpSkill.parent("div").parent("div").css("display","");
            $cmbSkill.attr("disabled",true).css("color","#dcdcdc").css("background-color","white");
            $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
            $btnResetSkill.parent("div").parent("div").css("display","");

        }
        else{
            $btnContinue.attr("disabled",false).css("background-color","#d64635").css("color","white");
            $cmbExType.parent("div").parent("div").css("display","");

        }
        }

    else {
        $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
        $lSkill.css("color","#d64635");

    }


}

function cmbSpSkill(){
    var $btnContinue      =   $("#btnContinue");
    var $cmbSpSkill        =   $("#cmbSpSkill");
    var $lSpSkill         =   $("#lSpSkill");

    if($cmbSpSkill.val() != 0){
        $btnContinue.attr("disabled",false).css("background-color","#d64635").css("color","white");
        $lSpSkill.css("color","#b0b0b0");
    }
    else{
        $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
        $lSpSkill.css("color","#d64635");

    }
}


function btnResetSkill(){

    var $cmbSkill           =   $("#cmbSkill");
    var $cmbSpSkill          =   $("#cmbSpSkill");
    var $lSkill            =   $("#lSkill");
    var $lSpSkill           =   $("#lSpSkill");
    var $btnContinue        =   $("#btnContinue");
    var $btnResetSkill         =   $("#btnResetSkill");


    $cmbSkill.val(0);
    $cmbSpSkill.val(0);
    $cmbSpSkill.parent("div").parent("div").css("display","none");
    $cmbSkill.attr("disabled",false).css("color","black");
    $lSkill.css("color","#d64635");
    $lSpSkill.css("color","#d64635");
    $btnResetSkill.parent("div").parent("div").css("display","none");
    $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");

}

/* ------------------------------------    TAB 3    ---------------------------------------*/



function tSetLim(){
    var $tSetLim        =   $("#tSetLim");

    $tSetLim.attr('title', 'This is the highest number in any given equation/problem. If the limit is "10" a problem such as "10+1=?" or "8+3=?" would not be included in the assessment.');
}









/* ------------------------------------    Other    ---------------------------------------*/



/*function getSubject(){
    $.ajax({
        type	    : 'POST',
        url		    : urlBase+"index.php/assesment_creator_controller/getSubjectList",
        data	    : '',
        dataType    : 'json',
        async       : false,
        success 	: function(data){
            $.each(data,function(k,v){
                $("#cmbSubject").append('<option value="'+(k+1)+'">'+v+'</option>');
            });
        }
    });
}*/





