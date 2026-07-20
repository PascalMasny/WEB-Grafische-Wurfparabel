# Web-Wurfparabelrechner

Die Web-Variante meines [Wurfparabel-Rechners](https://github.com/PascalMasny/Grafische-Wurfparabel): eine Bootstrap-Oberfläche, über die man die Wurfparameter eingibt, im Hintergrund rechnet Python und Gnuplot zeichnet die Flugbahn als Grafik.

## Wie es funktioniert
1. `input.php` liefert das Formular (Bootstrap) für Winkel, Geschwindigkeit, Starthöhe, Zeit und Schrittweite.
2. Die Eingaben landen in kleinen Textdateien (`B.txt`, `V.txt`, `z.txt`, `t2.txt`, `s.txt`).
3. `Wurfphp.py` liest diese Werte, berechnet die Bahn und schreibt `data.dat`.
4. Gnuplot (`wurf.plt`) erzeugt `wurf.png`, das die Seite anzeigt.

## Nutzung
Auf einem Webserver mit PHP + Python 3 + Gnuplot ablegen und `input.php` aufrufen.

## Stack
`PHP` · `Python 3` · `Gnuplot` · `Bootstrap`

<details>
<summary>🇬🇧 English</summary>

The web version of my projectile-motion calculator. A Bootstrap form (`input.php`) captures the launch parameters into small text files, `Wurfphp.py` reads them and computes the trajectory, and Gnuplot renders `wurf.png` shown back on the page. Needs a web server with PHP, Python 3 and Gnuplot.
</details>

> Lernprojekt rund um das Zusammenspiel Web ↔ Backend, 2021.
