(function($) {

  "use strict";

  $.fn.xform = function(options) {
		var i, field_type, field_name, field_id;
		
		if (typeof options == 'string') {
			var args = Array.prototype.slice.call(arguments, 1),
					form = this[0];
			
			if (options == 'load'){
				for (i = 0; i < form.length; i++)
				{
					field_type = form[i].type.toLowerCase();
					field_name = form[i].name;
					field_id	 = form[i].id;
					$.each(args[0], function(k, v){
						if (field_name == k || field_id == k) { 
							switch (field_type)
							{
							case "text":
							case "email":
							case "number":
							case "password":
							case "textarea":
								form[i].value = v;
								break;
							case "hidden":
								form[i].value = v;
								break;
							case "radio":
							case "checkbox":
								form[i].checked = (v)?true:false; 
								break;
							case "select-one":
							case "select-multi":
								// form[i].selectedIndex = -1;
								break;
							default:
								break;
							}
						}
					});
				}
			}
			
			if (options == 'reset'){
				for (i = 0; i < form.length; i++)
				{
					field_type = form[i].type.toLowerCase();
					field_name = form[i].name;
					field_id 	 = form[i].id;
					switch (field_type)
					{
					case "text":
					case "email":
					case "number":
					case "password":
					case "textarea":
					case "hidden":
						form[i].value = "";
						break;
					case "radio":
					case "checkbox":
						form[i].checked = false; 
						break;
					case "select-one":
					case "select-multi":
						form[i].selectedIndex = -1;
						break;
					default:
						break;
					}
				}
			}
			
			return this;
		}
  };
	
}(jQuery));
