class Main {
	constructor() {
		this.$areaButtons = [];
		this.$areaCarousel = null;
	}
	initialize(settings) {
		if (settings) this.applySettings(settings);
		this.setActivePage();
		this.setup();
	}
	applySettings(settings) {
		$.extend(this, settings);
	}
	setup() {
		this.setupElementSelectors();
		this.setupButtonsEventHandler();
		this.setupCarouselEventHandler();
	}
	setupElementSelectors() {
		this.$areaButtons = $("button[data-area]");
		this.$areaCarousel = $("#areaCarousel");
	}
	setupButtonsEventHandler() {
		const me = this;
		this.$areaButtons.on("click", me.buttonsEventHandler.bind(me));
	}
	buttonsEventHandler(event) {
		navigator.vibrate([1]);
		const $target = $(event.target);
		const area = $target.attr("data-area");
		const instruction = $target.attr("data-instruction");
		$.ajax({
			url: "fancontrol.php",
			type: "post",
			dataType: 'json',
			data: { area, instruction }
		});
	}
	setupCarouselEventHandler() {
		const me = this;
		this.$areaCarousel.on("slid.bs.carousel", me.carouselEventHandler.bind(me));
	}
	carouselEventHandler() {
		const area = $("div.active[data-area]").attr("data-area");
		this.setCookie("area", area, 90);
	}
	setActivePage() {
		const area = this.getCookie("area");
		if (area) {
			$("div.carousel-item[data-area]").removeClass("active");
			$(`div.carousel-item[data-area="${area}"]`).addClass("active");
		}
	}
	setCookie(key, value, expiry) {
        let expires = new Date();
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
        document.cookie = `${key}=${value};expires=${expires.toUTCString()}`;
    }
    getCookie(key) {
        const keyValue = document.cookie.match(`(^|;) ?${key}=([^;]*)(;|$)`);
        return keyValue ? keyValue[2] : null;
    }
    eraseCookie(key) {
        const keyValue = getCookie(key);
        setCookie(key, keyValue, '-1');
    }
	static CreateInstance(settings) {
		const instance = new Main();
		instance.initialize(settings);
	}
}