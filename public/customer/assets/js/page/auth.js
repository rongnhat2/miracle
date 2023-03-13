const View = {
	Register: {
		getVal(){
            var resource = "#register-form";
            var fd = new FormData();
            var required_data = [];
            var onPushData = true;
            const regex = /(<([^>]+)>)/ig;
            var data_name       = $(`${resource}`).find('#name').val().replace(regex, "");
            var data_email      = $(`${resource}`).find('#email').val().replace(regex, "");
            var data_password   = $(`${resource}`).find('#pass').val().replace(regex, ""); 

			if (IndexView.validateEmail(data_email) == null) {  required_data.push(data_email == '' ? 'Email is required.' : 'Email Invalid.');  onPushData = false; }
            if (data_password.split("").length < 8) { required_data.push('Password required 8 character'); onPushData = false } 
            if (data_name == "") { required_data.push('Name required'); onPushData = false } 

            if (onPushData) {
                fd.append('data_email', data_email);
                fd.append('data_password', data_password); 
                fd.append('data_name', data_name); 
                return fd;
            }else{
                $(`${resource}`).find('.error-log .js-errors').remove();
                var required_noti = ``;
                for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                $(`${resource}`).find('.error-log').prepend(` <ul class="js-response js-errors">${required_noti}</ul> `)
                return false;
            }
		}
	},
	Login: {
		getVal(){
            var resource = "#login-form";
            var fd = new FormData();
            var required_data = [];
            var onPushData = true;
            const regex = /(<([^>]+)>)/ig; 
            var data_email      = $(`${resource}`).find('#email').val().replace(regex, "");
            var data_password   = $(`${resource}`).find('#pass').val().replace(regex, ""); 

			if (IndexView.validateEmail(data_email) == null) {  required_data.push(data_email == '' ? 'Email is required.' : 'Email Invalid.');  onPushData = false; }
            if (data_password.split("").length < 8) { required_data.push('Password required 8 character'); onPushData = false }  

            if (onPushData) {
                fd.append('data_email', data_email);
                fd.append('data_password', data_password);  
                return fd;
            }else{
                $(`${resource}`).find('.error-log .js-errors').remove();
                var required_noti = ``;
                for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                $(`${resource}`).find('.error-log').prepend(` <ul class="js-response js-errors">${required_noti}</ul> `)
                return false;
            }
		}
	},
	onPushRegister(name, callback){
		$(document).on('click', `.bth-action`, function() {
	        if($(this).attr('atr').trim() == name) {
	        	var data = View.Register.getVal();
	            if (data) callback(data);
	        }
	    });
	},
		onPushLogin(name, callback){
		$(document).on('click', `.bth-action`, function() {
	        if($(this).attr('atr').trim() == name) {
	        	var data = View.Login.getVal();
	            if (data) callback(data);
	        }
	    });
	}
};
(() => {
	View.onPushRegister('Register', (fd) => {
		Api.Auth.onRegister(fd)
            .done(res => {
            	$('.error-log ul').remove();
            	$('.error-log').prepend(` <ul class="js-response ${res.status == 201 ? "js-success" : "js-errors"}">${res.message}</ul> `);
                if (res.status == 201) window.location.replace("/");
            })
            .fail(err => {  })
            .always(() => { });
	})
	View.onPushLogin('Login', (fd) => {
		Api.Auth.onLogin(fd)
            .done(res => {
            	$('.error-log ul').remove();
            	$('.error-log').prepend(` <ul class="js-response ${res.status == 201 ? "js-success" : "js-errors"}">${res.message}</ul> `);
                if (res.status == 201) window.location.replace("/");
            })
            .fail(err => {  })
            .always(() => { });
	})
})();