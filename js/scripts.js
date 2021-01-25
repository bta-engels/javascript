function rechner(a, b, operator) {
	// wandle string zu integer um
	a = parseInt(a)
	b = parseInt(b)
	// switch für berechnung        
	var ergebnis = "noch nix"
	switch(operator) {
		case "+":
			ergebnis = a + b
			break;
		case "-":
			ergebnis = a - b
			break;
		case "*":
			ergebnis = a * b
			break;
		case "/":
			ergebnis = a / b
			break;
		default:
			ergebnis = "falscher Operator"
			break;
	}
	return ergebnis
}

function speakText(txt, locale = "de-DE") {
	var utterance = new SpeechSynthesisUtterance(),
		voices = speechSynthesis.getVoices()
		;

	utterance.lang = locale;
	for(var i = 0; i < voices.length; i++) {
		if(voices[i].lang === locale) {
			utterance.voice = voices[i];
			break;
		}
	}

	utterance.text = txt;
	utterance.volume = 1; // 0 to 1
	utterance.rate = 1; // 0.1 to 10
	utterance.pitch = 1; //0 to 2
	speechSynthesis.speak(utterance);

    return speechSynthesis;
}
