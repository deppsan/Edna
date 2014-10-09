/**
 * Created by LTrevino on 10/1/14.
 */
$(document).ready(function(){
    $("#cmbSubject").change(cmbSubject);
    $("#cmbCategory").change(cmbCategory);
});


function cmbSubject(){

    var $cmbCategory    =   $("#cmbCategory");
    var $cmbSubject     =   $("#cmbSubject");

    if($cmbSubject.val() != 0){
        $cmbCategory.parent("div").parent("div").css("display","");
        //$cmbCategory.attr("disabled","");

    }
}


function cmbCategory(){

    var $cmbSubcategory     =   $("#cmbSubcategory");
    var $cmbCategory    =   $("#cmbCategory");


    if($cmbCategory.val() != 0){
        $cmbSubcategory.parent("div").parent("div").css("display","");
    }

}