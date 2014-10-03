var validacion = false;
var $txtUserName ;
var $txtPassword ;
$(document).ready(function(){	
	$txtUserName = $("#txtUserName");
 	$txtPassword = $("#txtPassword");
	$( "#frmLogin" ).submit(function( event ) {
		if(validacion){			
		}else{
			event.preventDefault();

		}		
	});
	$("#lnkLogin").click(validar);	
});

$(document).keypress(function(tecla){
    if (tecla.which == 13) { 
        validar();
    }
});

function validar(){

	
	if($txtUserName.val() == "" || $txtUserName.val() == undefined || $txtUserName.val() == null){
		if(!$txtUserName.parent().parent().hasClass('has-error')){
			$txtUserName.parent().parent().addClass('has-error');
		}
		toastrNote.init("error","Error","The username field is empty.");
	}else if($txtPassword.val() == "" || $txtPassword.val() == undefined || $txtPassword.val() == null){
		if($txtUserName.parent().parent().hasClass('has-error')){
			$txtUserName.parent().parent().removeClass('has-error');
		}
		if(!$txtUserName.parent().parent().hasClass('has-success')){
			$txtUserName.parent().parent().addClass('has-success');
		}
		if(!$txtPassword.parent().parent().hasClass('has-error')){
			$txtPassword.parent().parent().addClass('has-error');
		}
		toastrNote.init("error","Error","The password field is empty.");
	}else{
		coreValidacion($txtUserName.val(),$txtPassword.val());
	}
}

function coreValidacion(paramUsername, paramPassword){
	$.ajax({
		type	    : 'POST',
        url		    : urlBase+"index.php/logon_controller/coreValidacion",
        data	    : 'username='+paramUsername+"&password="+paramPassword,
		dataType    : 'json',
        async       : false,
            success : function(res){
			validacion = res.validacion;
			if(validacion){
				$("#frmLogin").submit();
			}else{
				$(".alert#error").css("display","");
				if(!$txtUserName.parent().parent().hasClass('has-error')){
					$txtUserName.parent().parent().addClass('has-error');
				}
				if(!$txtPassword.parent().parent().hasClass('has-error')){
					$txtPassword.parent().parent().addClass('has-error');
				}
			}
		}
	});
}
