class Main {
	constructor() {
		// Configs
		// Variables
		// Selectors
	}
	initialize(settings) {
		if (settings) this.applySettings(settings);
		this.setup();
	}
	applySettings(settings) {
		$.extend(this, settings);
	}
	setup() {
		this.setupButtonEventHandler();
	}
	setupButtonEventHandler() {
		const me = this;
		$("button").on("click", me.buttonEventHandler.bind(me));
	}
	buttonEventHandler(event) {
		const $target = $(event.target);
		const area = $target.attr("data-area");
		const instruction = $target.attr("data-instruction");
		// console.log(`area: ${area}`);
		// console.log(`instruction: ${instruction}`);
		$.ajax({
			url: "fancontrol.php",
			type: "post",
			dataType: 'json',
			data: { area, instruction },
			success: function(result) {
				console.log(result);
			}
		});
	}
	static CreateInstance(settings) {
		const instance = new Main();
		instance.initialize(settings);
	}
}