$(document).foundation();


jQuery(document).ready(function ($) {
	// Animation für den Hamburger
	$('.menu-icon').on('click', function () {
		$('.megamenu-group').toggleClass("active");
		// fixiere den Background
		$('html').toggleClass("menu-is-open");
		// aktivere für den Background eine Fläche
		$('.overlay-is-open').toggleClass("menu-is-open");
	});

	// Funktion zum Schließen des geöffneten Megamenü, wenn man nicht auf den Hamburger klickt
	$('.overlay-is-open').on('click', function () {
		$('.megamenu-group').removeClass("active");
		$('.overlay-is-open').removeClass("menu-is-open");
		$('html').removeClass("menu-is-open");
		$("#megamenu").removeClass("is-active");
	});

	$(document).keyup(function (e) {
		if (e.keyCode == 27) { // escape key maps to keycode `27`
			//also check here some another stuff like menu already opend or not
			$('.megamenu-group').removeClass("active");
			$("#megamenu").removeClass("is-active");
		}
	});
	// End Animation für den Hamburger

	// Start minimize Navigation
	var prev = 0;
	var $window = $(window);
	var nav = $('.scrollhide-nav');

	$window.on('scroll', function () {
		var scrollTop = $window.scrollTop();
		nav.toggleClass('hidden', scrollTop > prev);
		prev = scrollTop;
	});
	// End minimize Navigation
});


window.onload = function() {
	////////////////////////////////
	// Höhe Orbit Container ermitteln
	////////////////////////////////
	$clientHeight = "";
	// Now we know that foo is defined, we are good to go.
	let imageContainerHoehe = document.querySelector('.orbit-wrapper .orbit-slide .image img');
	// console.log(imageContainerHoehe.clientHeight);
	if (imageContainerHoehe !== undefined && imageContainerHoehe !== null) {
		// ermittelte Höhe schreiben
		$(".orbit .orbit-wrapper .orbit-controls").css("height", imageContainerHoehe.clientHeight);
	}
	////////////////////////////////
	// Ende ermittelte Höhe
	////////////////////////////////


	////////////////////////////////
	// Höhe Second Container ermitteln
	////////////////////////////////
	/*
	let ContainerHoeheMegaMenu = document.querySelector('nav .megamenu-group .top-bar-left .menu');
	if (ContainerHoeheMegaMenu !== undefined && ContainerHoeheMegaMenu !== null) {
		let newHeight = imageContainerHoehe.clientHeight + 20; // 20px hinzufügen
		console.log(newHeight);
		// ermittelte Höhe auf second-target anwenden
		$("nav .megamenu-group .top-bar-left::before").css("height", newHeight);
		$("nav .megamenu-group .top-bar-left::after").css("height", newHeight);
	}
*/
/*
	let secondContainer = document.querySelector('nav .megamenu-group .top-bar-left .menu');
	// console.log(secondContainer);
	if (secondContainer !== undefined && secondContainer !== null) {
		let secondContainerHeight = secondContainer.clientHeight; // 20px hinzufügen
		console.log(secondContainerHeight);
		// ermittelte Höhe + 20px auf second-container anwenden
		$(secondContainer).css("height", secondContainerHeight);


		// Pseudo-Klasse direkt manipulieren
		let styleSheet = document.createElement("style");
		styleSheet.type = "text/css";
		styleSheet.innerText = `nav .megamenu-group .top-bar-left::before { height: ${secondContainerHeight}px; }`;
		//styleSheet.innerText = `nav .megamenu-group .top-bar-left::after { height: ${secondContainerHeight}px; }`;
		document.head.appendChild(styleSheet);
	}
*/
	////////////////////////////////
	// Ende ermittelte Höhe
	////////////////////////////////
};

// Test!1234§
////////////////////////////////////
// Höhe Youtube Container ermitteln
////////////////////////////////////
/*
document.addEventListener("DOMContentLoaded", function () {
	// Selektiere alle Container mit data-name="youtube" und data-modified-by-klaro="yes"
	document.querySelectorAll('div[data-name="youtube"][data-modified-by-klaro="yes"]').forEach(container => {
		// Finde den iframe im Container
		const iframe = container.querySelector("iframe");

		if (iframe) {
			// Breite und Höhe aus dem iframe lesen
			const width = parseInt(iframe.getAttribute("width"));
			const height = parseInt(iframe.getAttribute("height"));

			console.log(width, height);
			// CSS-Regel für Breite und Höhe erstellen und direkt hinzufügen
			document.head.appendChild(document.createElement('style')).innerHTML = `
                .klaro.cm-as-context-notice {
                    width: 100%; 
                    max-width: ${width}px; 
                    height: ${height}px; 
                }
            `;

			// Finde den Container, in den die Höhe geschrieben werden soll
			const noticeContainer = container.querySelector(".klaro.cm-as-context-notice");
			if (noticeContainer) {
				// Schreibe die Nachricht in den Container
				noticeContainer.innerText = `Die Höhe des YouTube Videos beträgt: ${height}px (Breite: ${width}px)`;
			} else {
				console.log("Notice-Container nicht gefunden.");
			}
		} else {
			console.log("Kein iframe gefunden im youtubeContainer.");
		}
	});
});
*/
////////////////////////////////
// Ende ermittelte Höhe
////////////////////////////////