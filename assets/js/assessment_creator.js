/**
 * Created by LTrevino on 10/1/14.
 */
$(document).ready(function(){
    /*$('#form_wizard_1').find('.button-next').hide();*/
    $("#cmbCategory").change(getSubCategories);
    $("#cmbSubCategory").change(getSkills);
    $("#btnResetCategory").click(btnResetCategory);
    $("#cmbSkill").change(getSpeSkill);
    $("#btnContinue").click(btnContinue);
    $("#btnBack").click(btnBack);
    $("#tSetLim").hover(tSetLim);
    $("#cmbSpeSkill").change(cmbSpeSkill);
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
    var $btnResetCategory   =   $("#btnResetCategory");

    if($cmbCategory.val() != 0) {
        $cmbSubCategory.parent("div").parent("div").css("display","");
        $cmbCategory.attr("disabled",true).css("color","#dcdcdc").css("background-color","white");
        $lCategory.css("color","#b0b0b0");
        $btnResetCategory.parent("div").parent("div").css("display","");
        
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


function btnResetCategory(){

    var $cmbCategory        =   $("#cmbCategory");
    var $cmbSubCategory     =   $("#cmbSubCategory");
    var $lCategory          =   $("#lCategory");
    var $lSubCategory       =   $("#lSubCategory");
    var $btnContinue        =   $("#btnContinue");
    var $btnResetCategory          =   $("#btnResetCategory");


    $cmbCategory.val(0);
    $cmbSubCategory.html('<option value="0">Select...</option>');
    $cmbSubCategory.parent("div").parent("div").css("display","none");
    $cmbCategory.attr("disabled",false).css("color","black");
    $cmbSubCategory.attr("disabled",false).css("color","black");
    $lCategory.css("color","#d64635");
    $lSubCategory.css("color","#d64635");
    $btnReset.parent("div").parent("div").css("display","none");
    $btnContinue.parent("div").parent("div").parent("div").css("border-color","white").attr("display","none");
    $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");

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


function getSkills(){

    var $cmbSubCategory     =   $("#cmbSubCategory");
    var $lSubCategory       =   $("#lSubCategory");
    var $btnContinue        =   $("#btnContinue");
    var $cmbSkill           =   $("#cmbSkill");
    var $cmbSpeSkill        =   $("#cmbSpeSkill");
    var $btnResetSkill      =   $("#btnResetSkill");

    $cmbSkill.html('<option value="0">Select...</option>');
    $cmbSpeSkill.html('<option value="0">Select...</option>');
    $cmbSpeSkill.parent("div").parent("div").css("display","none");
    $cmbSkill.attr("disabled",false).css("color","black");
    $btnResetSkill.parent("div").parent("div").css("display","none");




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
                    $cmbSkill.append('<option value="'+(k+1)+'">'+v[0,"name"]+'</option>');
                });
            }
        });

    }
    else{
        $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
        $lSubCategory.css("color","#d64635");


    }
}


function getSpeSkill(){
    var $cmbSkill           =   $("#cmbSkill");
    var $cmbSpeSkill        =   $("#cmbSpeSkill");
    var $btnContinue        =   $("#btnContinue");
    var $lSkill             =   $("#lSkill");
    var $btnResetSkill      =   $("#btnResetSkill");
    var $cmbSubCategory     =   $("#cmbSubCategory");
    /*var $txtExample       =   $("#txtExample");*/



    if($cmbSkill.val() != 0 ) {

        $lSkill.css("color","#b0b0b0");
        /*$cmbSubCategory.attr("disabled",true).css("color","#dcdcdc").css("background-color","white");*/

        if( ($cmbSkill.val() > 2) && ($cmbSkill.val() < 7) ){
            $cmbSpeSkill.parent("div").parent("div").css("display","");
            $cmbSkill.attr("disabled",true).css("color","#dcdcdc").css("background-color","white");
            $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
            $btnResetSkill.parent("div").parent("div").css("display","");

            $.ajax({
                type	    : 'POST',
                url		    : urlBase+"index.php/assesment_creator_controller/getSpeSkillArray",
                data        : 'skill='+$cmbSkill.val(),
                dataType    : 'json',
                async       : false,
                success 	: function(data){
                    $.each(data,function(k,v){
                        $cmbSpeSkill.append('<option value="'+(k+1)+'">'+v+'</option>');

                    });

                    /*$txtExample.val(v[$cmbSkill.val,"example"]);*/
                }
            });

        }
        else{
            $btnContinue.attr("disabled",false).css("background-color","#d64635").css("color","white");

        }
        }

    else {
        $btnContinue.attr("disabled",true).css("background-color","white").css("color","#b0b0b0");
        $lSkill.css("color","#d64635");


    }


}

function cmbSpeSkill(){
    var $btnContinue      =   $("#btnContinue");
    var $cmbSpeSkill        =   $("#cmbSpeSkill");
    var $lSpSkill         =   $("#lSpSkill");

    if($cmbSpeSkill.val() != 0){
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
    var $cmbSpeSkill          =   $("#cmbSpeSkill");
    var $lSkill            =   $("#lSkill");
    var $lSpSkill           =   $("#lSpSkill");
    var $btnContinue        =   $("#btnContinue");
    var $btnResetSkill         =   $("#btnResetSkill");


    $cmbSkill.val(0);
    $cmbSpeSkill.val(0);
    $cmbSpeSkill.html('<option value="0">Select...</option>');
    $cmbSpeSkill.parent("div").parent("div").css("display","none");
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





