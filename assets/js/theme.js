(function () {
	const body = document.body;

	const initMobileMenu = () => {
		const menuToggle = document.querySelector(".tcube-menu-toggle");
		const mobileNav = document.querySelector(".tcube-mobile-nav");
		const overlay = document.querySelector(".tcube-menu-overlay");

		if (!body || !menuToggle || !mobileNav || !overlay) {
			return;
		}

		const closeMenu = () => {
			body.classList.remove("tcube-menu-open");
			menuToggle.setAttribute("aria-expanded", "false");
			menuToggle.setAttribute("aria-label", "Open menu");
			overlay.hidden = true;
		};

		const openMenu = () => {
			body.classList.add("tcube-menu-open");
			menuToggle.setAttribute("aria-expanded", "true");
			menuToggle.setAttribute("aria-label", "Close menu");
			overlay.hidden = false;
		};

		menuToggle.addEventListener("click", () => {
			const expanded = menuToggle.getAttribute("aria-expanded") === "true";
			if (expanded) {
				closeMenu();
				return;
			}

			openMenu();
		});

		overlay.addEventListener("click", closeMenu);

		mobileNav.querySelectorAll("a").forEach((link) => {
			link.addEventListener("click", () => {
				if (window.innerWidth <= 1024) {
					closeMenu();
				}
			});
		});

		window.addEventListener("resize", () => {
			if (window.innerWidth > 1024) {
				closeMenu();
			}
		});
	};

	const initScrollReveal = () => {
		const contentRoot = document.querySelector(".site-main");
		if (!contentRoot) {
			return;
		}

		const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
		if (reduceMotion) {
			return;
		}

		const targets = contentRoot.querySelectorAll(
			".tcube-page h1, .tcube-page h2, .tcube-page h3, .tcube-page h4, .tcube-page p, .tcube-page li, .tcube-page img, .tcube-page .tcube-btn"
		);

		if (!targets.length) {
			return;
		}

		const revealItems = Array.from(targets).filter((element) => !element.classList.contains("tcube-reveal"));

		revealItems.forEach((element, index) => {
			const isImage = element.tagName === "IMG";
			const variantIndex = index % 3;
			const variant = isImage
				? "tcube-reveal--zoom"
				: variantIndex === 0
					? "tcube-reveal--up"
					: variantIndex === 1
						? "tcube-reveal--left"
						: "tcube-reveal--right";

			element.classList.add("tcube-reveal", variant);
			element.style.setProperty("--tcube-reveal-delay", `${Math.min((index % 6) * 70, 350)}ms`);
		});

		if (!("IntersectionObserver" in window)) {
			revealItems.forEach((element) => element.classList.add("is-visible"));
			return;
		}

		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (!entry.isIntersecting) {
						return;
					}

					entry.target.classList.add("is-visible");
					observer.unobserve(entry.target);
				});
			},
			{
				threshold: 0.15,
				rootMargin: "0px 0px -10% 0px",
			}
		);

		revealItems.forEach((element) => observer.observe(element));
	};

	const initHomeHeroSlider = () => {
		const slider = document.querySelector("[data-home-hero-slider]");
		if (!slider) {
			return;
		}

		const track = slider.querySelector(".home-hero__track");
		const slides = Array.from(slider.querySelectorAll(".home-hero__slide"));
		const dots = Array.from(slider.querySelectorAll("[data-home-hero-dot]"));
		const prevButton = slider.querySelector("[data-home-hero-prev]");
		const nextButton = slider.querySelector("[data-home-hero-next]");

		if (!track || slides.length <= 1) {
			return;
		}

		const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
		let activeIndex = 0;
		let autoplayTimer = null;

		const setActiveSlide = (nextIndex) => {
			activeIndex = (nextIndex + slides.length) % slides.length;
			track.style.transform = `translateX(-${activeIndex * 100}%)`;

			slides.forEach((slide, index) => {
				const isActive = index === activeIndex;
				slide.classList.toggle("is-active", isActive);
				slide.setAttribute("aria-hidden", isActive ? "false" : "true");
			});

			dots.forEach((dot, index) => {
				const isActive = index === activeIndex;
				dot.classList.toggle("is-active", isActive);
				dot.setAttribute("aria-selected", isActive ? "true" : "false");
			});
		};

		const stopAutoplay = () => {
			if (autoplayTimer) {
				window.clearInterval(autoplayTimer);
				autoplayTimer = null;
			}
		};

		const startAutoplay = () => {
			if (reduceMotion || autoplayTimer) {
				return;
			}

			autoplayTimer = window.setInterval(() => {
				setActiveSlide(activeIndex + 1);
			}, 6000);
		};

		prevButton?.addEventListener("click", () => {
			setActiveSlide(activeIndex - 1);
			stopAutoplay();
			startAutoplay();
		});

		nextButton?.addEventListener("click", () => {
			setActiveSlide(activeIndex + 1);
			stopAutoplay();
			startAutoplay();
		});

		dots.forEach((dot) => {
			dot.addEventListener("click", () => {
				setActiveSlide(Number(dot.dataset.homeHeroDot));
				stopAutoplay();
				startAutoplay();
			});
		});

		slider.addEventListener("mouseenter", stopAutoplay);
		slider.addEventListener("mouseleave", startAutoplay);
		slider.addEventListener("focusin", stopAutoplay);
		slider.addEventListener("focusout", startAutoplay);

		setActiveSlide(0);
		startAutoplay();
	};

	initMobileMenu();
	initScrollReveal();
	initHomeHeroSlider();
})();
