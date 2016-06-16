"use strict";

var control = {

	/**
	 * init : init the controller (get some precious jquery element and add events listener with delegation)
	 */
	init: function () {
		this.$document = $(document);
		this.event_listener_init();
		console.log("hello");
	},

	/**
	 * event_listener_init : init all event listeners
	 */
	event_listener_init: function () {
		var self = this;

		self.$document.on('click', '.add_mail_field', function (e) {
			var mi = document.createElement("input");
			mi.setAttribute('type', 'text');
			mi.setAttribute('name', 'mail');
			mi.setAttribute('class', 'mail');
			mi.setAttribute('placeholder', 'exemple@gmail.com');
			$('.inputs-mail').append(mi);
		});

		// Inscription User : check if mail already exist
		$('#mail-user-inscription').on('focusout', function (e) {
			var this_input=$(this);
			var user_mail=this.value;
			self.check_user_exist(user_mail, function(user_exist){
				if(user_exist){
					this_input.removeClass("valid");
					this_input.addClass("invalid");
					$('.msg-error-user-exist').html("Cet email existe déjà.");
					$('input[type=submit]').prop('disabled', true);
				}
				else{
					this_input.removeClass("invalid");
					this_input.addClass("valid");
					$('.msg-error-user-exist').html("");
					$('input[type=submit]').prop('disabled', false);
				}
			});
		})

		// Inscription Coprop : check if title coprop already exist
		$('#coprop-title-inscription').on('focusout', function (e) {
			var this_input=$(this);
			var coprop_title=this.value;

			self.check_coprop_exist(coprop_title, function(coprop_exist){
				console.log("coprop_exist = ", coprop_exist);
				if(coprop_exist){

					this_input.removeClass("valid");
					this_input.addClass("invalid");
					$('.msg-error-coprop-exist').html("Cette copropriété existe déjà.");
					$('input[type=submit]').prop('disabled', true);
				}
				else{
					this_input.removeClass("invalid");
					this_input.addClass("valid");
					$('.msg-error-coprop-exist').html("");
					$('input[type=submit]').prop('disabled', false);
				}
			});
		})

		// Inputs : check if confirm_mdp = mdp
		$('#confirm_pass').on('keyup', function (e) {
			var input = $(this);
			setTimeout(function(){
				if($('#pass').val() != input.val()){
					input.removeClass("valid");
					input.addClass("invalid");
					$('.msg-error-match-passw').html("Les mots de passe ne concordent pas.");
					$('input[type=submit]').prop('disabled', true);
				}
				else if($('#pass').val() == input.val()){
					input.removeClass("invalid");
					input.addClass("valid");
					$('.msg-error-match-passw').html("");
					$('input[type=submit]').prop('disabled', false);
				}
			},500);
		})



		// Expand card
		$('.more').on('click', function (e) {
			self.expandCard.apply(this, e)
		})

		$('.less').on('click', function (e) {
			self.foldUpCard.apply(this, e)
		})

		// Show modal
		$('.add-card').on('click', function (e) {
			self.showModal.apply(this, e)
		})
	},

	check_user_exist: function (user_mail, callback) {
		var user_exist = false;
		model.async('GET', '../modules/async_check_user_exist.php?user_mail='+user_mail, '', function(xhr){
			if(xhr.response == "exist"){
				user_exist = true;
				callback.call(this, user_exist);
			}
			else if(xhr.response == "noexist"){
				user_exist=false;
				callback.call(this, user_exist);
			}
		});
	},

	check_coprop_exist: function (coprop_title, callback) {
		var coprop_exist = false;
		model.async('GET', '../modules/async_check_coprop_exist.php?coprop_title='+coprop_title, '', function(xhr){
			if(xhr.response == "exist"){
				coprop_exist = true;
				callback.call(this, coprop_exist);
			}
			else if(xhr.response == "noexist"){
				coprop_exist=false;
				callback.call(this, coprop_exist);
			}
		});
	},

	expandCard: function (e) {
		$(this).parents('.card')[0].classList.add('expanded');
	},

	foldUpCard: function (e) {
		$(this).parents('.card')[0].classList.remove('expanded');
	},

	showModal: function(e) {
		$('#dashboard').toggleClass('overlay');
	}
}
