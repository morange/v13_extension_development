// Funktion zum Auslesen des generierten Fehlers aus einer CSS-Klasse
function getAndSetErrorMessage() {
	// Annahme: Die Fehlermeldung wird in einer CSS-Klasse mit dem Namen "error" gesetzt
	var errorElement = document.querySelector('.error');

	if (errorElement) {
		// Generierten Fehler aus der CSS-Klasse auslesen
		var errorMessage = errorElement.innerText;

		// Fehlermeldung der Body-Klasse hinzufügen
		document.body.classList.add('error-message-' + encodeURIComponent(errorMessage));

		// Fehlermeldung der HTML-Klasse hinzufügen
		document.documentElement.classList.add('error-message');

		// Cookie mit der Fehlermeldung und Ablaufzeit setzen, falls nicht bereits gesetzt
		if (!getCookie("error_message")) {
			setErrorMessageCookie(errorMessage);
		}
	}
}

// Funktion zum Setzen des Cookies mit der Fehlermeldung und Ablaufzeit
function setErrorMessageCookie(errorMessage) {
	// Ablaufzeit für den Cookie setzen (2 Stunden)
	var expirationDate = new Date();
	expirationDate.setTime(expirationDate.getTime() + (2 * 60 * 60 * 1000)); // 2 Stunden in Millisekunden
	document.cookie = "error_message=" + encodeURIComponent(errorMessage) + "; expires=" + expirationDate.toUTCString();
}

// Funktion zum Auslesen eines Cookies
function getCookie(name) {
	var cookies = document.cookie.split(';');
	for (var i = 0; i < cookies.length; i++) {
		var cookie = cookies[i].trim();
		if (cookie.indexOf(name + "=") === 0) {
			return decodeURIComponent(cookie.substring(name.length + 1));
		}
	}
	return null;
}

// Funktion zum Löschen des Cookies
function deleteErrorMessageCookie() {
	document.cookie = "error_message=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

// Funktion zum Überprüfen des erfolgreichen Logins und Löschen des Fehler-Cookies
function checkSuccessfulLogin() {
	// Annahme: Überprüfung des Arrays "fe_typo_user" für erfolgreichen Login
	if (document.cookie.indexOf('fe_typo_user') !== -1) {
		// Erfolgreicher Login, daher Fehler-Cookie löschen
		deleteErrorMessageCookie();
	}
}

// Funktion zum Schließen des Modals
function closeModal() {
	// Annahme: Der Button zum Schließen des Modals hat die Klasse "close-button"
	var closeButton = document.querySelector('.close-button');
	if (closeButton) {
		closeButton.addEventListener('click', function() {
			// Schließe das Modal
			// Hier kannst du die entsprechende Logik einfügen, um das Modal zu schließen

			// Entferne die CSS-Klasse 'error-message' vom HTML-Tag
			document.documentElement.classList.remove('error-message');
			document.documentElement.classList.remove('is-reveal-open');
		});
	}
	// Annahme: Der Container zum Schließen des Modals hat die Klasse "reveal-overlay"
	var overlay = document.querySelector('.reveal-overlay');
	if (overlay) {
		overlay.addEventListener('click', function(event) {
			// Überprüfe, ob der Klick außerhalb des Modal-Inhalts erfolgt ist
			if (event.target === overlay) {
				// Schließe das Modal
				// Hier kannst du die entsprechende Logik einfügen, um das Modal zu schließen

				// Entferne die CSS-Klasse 'error-message' vom HTML-Tag
				document.documentElement.classList.remove('error-message');
				document.documentElement.classList.remove('is-reveal-open');
			}
		});
	}
}

// Aufruf der Funktionen beim Laden der Seite
window.addEventListener('load', function() {
	getAndSetErrorMessage();

	// Timer starten, um den Cookie nach 2 Stunden zu löschen
	setTimeout(deleteErrorMessageCookie, 2 * 60 * 60 * 1000); // 2 Stunden in Millisekunden

	// Überprüfen auf erfolgreichen Login und Löschen des Fehler-Cookies
	checkSuccessfulLogin();

	// Modal schließen, wenn der Nutzer auf den Schließen-Button klickt
	closeModal();
});
