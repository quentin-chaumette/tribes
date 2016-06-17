"use strict";

var control = {

	/**
	 * init : init the controller (get some precious jquery element and add events listener with delegation)
	 */
	init: function () {
		this.$document = $(document);
		this.event_listener_init();
	},

	/**
	 * event_listener_init : init all event listeners
	 */
	event_listener_init: function () {
		var self = this;

		self.$document.on('click', '.add_mail_field', function (e) {
			var mi = document.createElement("input");
			var mo = document.createElement("div");
			mo.setAttribute('class', 'group')
			$(mo).append(mi)
			mi.setAttribute('type', 'text');
			mi.setAttribute('name', 'mail');
			mi.setAttribute('class', 'mail');
			mi.setAttribute('placeholder', 'exemple@gmail.com');
			$(mi).css('width', '80%')
			$('.inputs-mail').append(mo);
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
					$('button[type=submit]').prop('disabled', true);
				}
				else{
					this_input.removeClass("invalid");
					this_input.addClass("valid");
					$('.msg-error-user-exist').html("");
					$('button[type=submit]').prop('disabled', false);
				}
			});
		})

		// Inscription Coprop : check if title coprop already exist
		$('#coprop-title-inscription').on('focusout', function (e) {
			var this_input=$(this);
			var coprop_title=this.value;

			self.check_coprop_exist(coprop_title, function(coprop_exist){
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


		// Dashboard : Update Cards
		$('.req-update-status').on('click', function (e) {
			self.update_card_status($(this).data("req_id"), $(this).data("new_state"),function(){
				model.async('GET', '../views/requests_content_reload.php', '', function(xhr){
					$('section.requests').html(xhr.response);
					control.init();
				});
			});
		})

		$('.req-update-status-resp').on('click', function (e) {
			self.update_card_status_and_responsible($(this).data("req_id"), $(this).data("new_state"), $(this).data("new_resp"),function(){
				model.async('GET', '../views/requests_content_reload.php', '', function(xhr){
					$('section.requests').html(xhr.response);
					control.init();
				});
			});
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
		// Hide modal
		$('.close').on('click', function (e) {
			self.hideModal.apply(this, e)
		})

		// Counter
		$('.input-object').on('keyup', function (e) {
			self.counter.apply(this, e)
		})
		$('.text-content').on('keyup', function (e) {
			self.counter2.apply(this, e)
		})
			function seeAll () {
		$('.card').css('display', 'inline-block')
		$('.nav-sort ul li.all a').addClass('active')
		$('.nav-sort ul li:not(.all) a').removeClass('active')
	}
	function toTake () {
		$('.toTake').css('display', 'inline-block')
		$('.card:not(.toTake)').css('display', 'none')
		$('.nav-sort ul li.toTake a').addClass('active')
		$('.nav-sort ul li:not(.toTake) a').removeClass('active')
	}
	function todo () {
		$('.toDo').css('display', 'inline-block')
		$('.doing').css('display', 'inline-block')
		$('.card:not(.toDo):not(.doing)').css('display', 'none')
		$('.nav-sort ul li.todo a').addClass('active')
		$('.nav-sort ul li:not(.todo) a').removeClass('active')
	}
	function done () {
		$('.done').css('display', 'inline-block')
		$('.card:not(.done)').css('display', 'none')
		$('.nav-sort ul li:not(.done) a').removeClass('active')
		$('.nav-sort ul li.done a').addClass('active')
	}
	function attribute () {
		$('.attribute').css('display', 'inline-block')
		$('.card:not(.attribute)').css('display', 'none')
		$('.nav-sort ul li.attribute a').addClass('active')
		$('.nav-sort ul li:not(.attribute) a').removeClass('active')
	}
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

	update_card_status: function (req_id, new_state, callback) {
		model.async('GET', '../modules/async_update_card_status.php?req_id='+req_id+'&new_state='+new_state, '', function(xhr){
			if (xhr.response=="ok") {
				callback.call(this);
			}
		});
	},

	update_card_status_and_responsible: function (req_id, new_state, new_resp, callback) {
		model.async('GET', '../modules/async_update_card_status_resp.php?req_id='+req_id+'&new_state='+new_state+'&new_resp='+new_resp, '', function(xhr){
			if (xhr.response=="ok") {
				callback.call(this);
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
		$('.overlay').addClass('is-active');
	},
	hideModal: function(e) {
		$('.overlay').removeClass('is-active');
	},

	counter: function(e) {
		$('.counter').html(0 + this.value.length);
	},
	counter2: function(e) {
		$('.counter2').html(0 + this.value.length);
	}
}
