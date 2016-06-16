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

		// Expand card
		$('.more').on('click', function (e) {
			self.expandCard.apply(this, e)
		})

		$('.less').on('click', function (e) {
			self.foldUpCard.apply(this, e)
		})
	},

	expandCard: function (e) {
		$(this).parents('.card')[0].classList.add('expanded');
	},

	foldUpCard: function (e) {
		$(this).parents('.card')[0].classList.remove('expanded');
	}
}
