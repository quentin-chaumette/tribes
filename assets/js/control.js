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
	}

}
