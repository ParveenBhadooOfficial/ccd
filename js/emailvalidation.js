function checkEmail(){
			var email = document.getElementById('ValidEmail');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})+$/;

			if (!filter.test(email.value)) {
				alert('Please provide a Valid email address.');
				return false;
			}
		}