Date: 2012-02-27
-----
Title: Spaß mit Verläufen
-----
Author: Timo
-----
Text: Ein kurzer Ausflug in die CSS3 Welt.

Fällt der Begriff "Verlauf" kommt vielen folgendes Bild in den Sinn:

![Bild 1](/gradient-1.jpg)

Also so oder so ähnlich.
Bewerkstelligen kann man dieses einfache Beispiel mit folgender Zeile CSS:

	div#tester {
		background: linear-gradient(left, #0000FF, #CCCCCC);
		}
Dies ist so die üblichste Verwendungsweise. Ob von links nach rechts oder von oben nach unten. 
Was mir noch nicht so oft untergekommen ist folgende Verwendung.

![Bild 1](/gradient-2.jpg)

Und mit folgendem CSS-Schnipsel bekommen wir dies hin:

	div.test {
		background: linear-gradient(left, #0000FF 0%, #0000FF 
		50%, #CCCCCC 50%, #CCCCCC 100%);
		color: #FF3344;
		}
		
Aber warum sollte man mit der Verlauf-Eigenschaft Blöcke/Streifen erstellen wollen?

Ich für meinen Teil habe damit die Leiste oben auf meiner Seite realisiert. Also mit `linear-gradient` 10 Farbblöcke definiert, jeweils in 10% Schritten.

Aber warum manuell dieses ganze CSS schreiben und nicht einfach eine Grafik festlegen, die sich wiederholt um auch auf allen Breiten zu funktionieren.

Nachteil ist hier aber, dass die Grafik statisch ist und je nach breite kann der letzte Block abgeshnitten sein, ist also kleiner als die restlichen Blöcke zuvor. Dies wird wohl in den meisten Fällen zutreffen.

Mich persönlich stört so etwas, deswegen lieber CSS. Hier vebreitert oder verschmälert sich jeder Farbblock gleichmäßig je nach Fenstergröße.

**Nachteil:** Auf iOS Geräten werden leider noch kleine Verläufe zwischen den Blöcken angezeigt, es sind also keinen scharfen Knaten vorhanden. Ich habe aber Hoffnung, dass sich dies noch ändern wird.