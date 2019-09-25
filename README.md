# pa
Antud kursus annab ülevaate programmeerimise aluste baasteadmistest PHP keele baasil.
## Ajakava
### 20.09.2019
* Tarkvara installeerimine
    * [PHPStorm](https://www.jetbrains.com/phpstorm/)
    * [git](https://git-scm.com/download)
* Tarkvara seadistamine
    * Valmistasime litsentsi
    * Seadistasime editori, Php põhiseadistused (line numbers, soft wrap, zoom)
    * git.exe asukoht arvutis, ühendus PhPStormiga
    * github repo loomine ja ühendamine PhPStormiga

### 25.09.2019
* git kasutamine käsurealt

Kui repo ei ole initsialiseeritud, siis tuleb see ära teha:
```
git init
```
Nüüd lisa muudetud fail jälgimissüsteemi (git)
```
git add failinimi
```
Koosta kirjeldus antud muudatusele
```
git commit -m "kirjelduse sõne"
```
Lükka lokaalsest repost kirjeldus kaugreposse (nt github.com)

```
git push -uf origin master
```

Siin on ühenduse nimi origin, master on peaharu. 

* git kasutamine phpStormis ja keyboard shortcutid

    * VCS > git > ( to add file (ctr+alt+a)) > commit (commit and push)(commit aknas valida failid, mis pannakse kaasa commitis) >> push (ctr+shift+k)
    * in terminal ``` git log ``` to view current actions; ``` git status ``` to check files' current status.
