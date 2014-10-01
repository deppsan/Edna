/**
 * @author AlejandroV
 */
var toastrNote = function () {
    return {
        //main function to initiate the module
        init: function (type,title,msg) {
        	toastr.options = {
        			  "closeButton": true,
        			  "positionClass": "toast-top-right",
        			  "showDuration": "1000",
        			  "hideDuration": "500",
        			  "timeOut": "5000",
        			  "extendedTimeOut": "1000",
        			  "showEasing": "swing",
        			  "hideEasing": "linear",
        			  "showMethod": "fadeIn",
        			  "hideMethod": "fadeOut"
        			};
			var $toast = toastr[type](msg, title); // Wire up an event handler to a button in the toast, if it exists
        }
    };
}();