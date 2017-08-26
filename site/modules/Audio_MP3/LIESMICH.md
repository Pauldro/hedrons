Audio_MP3
=========

Dieses Modul integriert einen konfigurierbaren Flash-MP3-Player in Ihre Seiten.
 
## Dritthersteller-Code
Dieses Modul nutzt zwei Versionen des kostenlosen Flash-MP3-Player

#### Download
- https://github.com/neolao/mp3-player/blob/master/template_maxi/player_mp3_maxi.swf
- https://github.com/neolao/mp3-player/blob/master/template_multi/player_mp3_multi.swf

oder

- http://flash-mp3-player.net/medias/player_mp3_maxi.swf
- http://flash-mp3-player.net/medias/player_mp3_multi.swf

#### Weitere Informationen
http://flash-mp3-player.net/players/

#### Code
https://github.com/neolao/mp3-player

#### Lizenz
http://creativecommons.org/licenses/by-sa/3.0/deed.en

#### Autor
Der Entwickler des Original Code ist neolao (neolao@gmail.com).


## Installation
- Laden Sie das Modul und die beiden SWF-Dateien herunter, entpacken und kopieren Sie alle Dateien in einem Ordner mit dem Namen /Audio_MP3/ und fügen Sie den Ordner Ihrem /site/modules/ Verzeichnis hinzu.
- Klicken Sie *Check für neue Module* in ProcessWire Admin > Module. Klicken Sie auf *Install* für das Modul: "Audio_MP3".
- Sie befinden sich nun in den Modul Einstellungen. Setzen Sie die Konfigurationsoptionen wie Sie möchten.


## Anwendung

- Fügen Sie einem Template das vom Modul erzeugte Feld Audio hinzu. (Setup > Templates).
- Fügen Sie den folgenden Code in die Template-Datei:
- Um die Titelliste auszugeben: $page->player['title'];
- Um den Player auszugeben: $page->player['code'];
- Erstellen Sie eine Seite mit dem Template.
- Ziehen Sie oder mp3 mp3.zip Dateien in das Audio-Feld (Page > Edit)
- Ein alternative Titel können Sie im Feld 'Description' eintragen, welches nach dem Dateiupload erscheint. Standardtitel ist der Dateiname.

## Funktion
Wenn Sie nur eine mp3 Datei gespeichert haben wird der Maxi-Player geladen. Bei 2 oder mehr Dateien schaltet das Modul auf den Multi-Player um. Ein alternativer Titel kann im Description-Feld des Audio Feldes gespeichert werden. (sichtbar nachdem die Datei hochgeladen wurde)


## Modul-Konfiguration
- width: Video-Breite.
- height: Video-Höhe. // Maxi-Spieler (wenn nur eine Datei gespeichert ist)
- volume: Lautstärke beim Start, zwischen 0 und 200. // standard auf 50
- showstop: 1 STOP-Taste anzeigen.
- Showinfo: 1, INFO-Taste anzeigen.
- showvolume: 1 VOLUME-Slider anzeigen.
- Showloading: ('always', 'never', 'autohide') Ladebalken anzeigen // standard 'always'
- buttonwidth: Die Tasten Breite // standardmäßig auf 30.
- Volumewidth: Die Breite der VOLUME-Taste // standard auf 30.
- volumeheight: Die Höhe der Lautstärke-Taste // standar auf 10
- loadingcolor: Die Farbe der Ladebalken
- sliderovercolor: Farbe des Reglers
- buttonovercolor: Farbe von Schaltern

#### hinzugefügt in Version 1.0.2
- buttoncolor: Farbe der Bedienungstasten
- slidercolor1: Farbe des Schiebereglers (Farbverlauf Startfarbe Oben) 
- slidercolor2: Farbe des Schiebereglers (Farbverlauf Endfarbe Unten)
- playlistcolor: Hintergrundfarbe der Titelliste. Nur im Multiplayer sichtbar (2 oder mehr Dateien)
- currentmp3color: Farbe des Titles, der aktuell abgespielt wird. Nur im Multiplayer sichtbar (2 oder mehr Dateien)

#### Informationen zu den Konfigurationsoptionen:
- http://flash-mp3-player.net/players/multi/documentation/
- http://flash-mp3-player.net/players/maxi/documentation/

## Änderungen
* 14.06.13 Error Meldungen zur Installationsroutine hinzugefügt
* 15.06.13 *hook* hinzugefügt *$page*
* 20.06.13 Bestätigungsnachricht für Deinstallationsroutine hinzugefügt
* 25.09.13 Konfigurationsoptionen hinzugefügt (Multiplayer)
* 09.10.13 *Multisite* Unterstützung ergänzt (Pfad zum swf-player/ site-folder)
* 14.10.13 Alle Phrasen sind jetzt übersetzbar
* 14.10.13 Übersetzung nach Deutsch verfügbar
* 21.10.13 Eingabe der Farbwerte vereinfacht. Erlaubt sind Werte mit oder ohne führendem '#', 3- or 6-stellige Hexadezimalangaben, sowie Farbnamen wie *red*, *limegreen* oder *maroon*. Bei fehlerhafter Eingabe erfolgt ein *Fallback* zur Standardkonfiguration.
* 21.10.13 für eine bessere Zugänglichkeit: alternative Verweise zu den mp3-Dateien in den object-tag eingefügt.
* 19.03.16 v120 in PW 3.0.9 getestet, kleiner Fehler behoben, Deinstallationsprozess verbessert

Copyright 2013 by Christoph Thelen
