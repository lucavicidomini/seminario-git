# Seminario su Git

## Istruzioni

Nella sezione release https://github.com/lucavicidomini/seminario-git/releases sono disponibili i pacchetti precompilati contenenti i file necessari a visualizzare il seminario con un browser web (testato solo con Chrome) senza dover installare Node.js o PHP.

## Compilazione

Nota: PHP è richiesto solo per effettuare in modo automatico l'inclusione delle slide presenti nella directory `slides`.

```bash
git clone https://github.com/lucavicidomini/seminario-git.git
cd seminario-git
npm install
php -S localhost:8000
```

Aprite il browser e visitate le URL http://localhost:8000

## Limitazioni

Testato solo con Chrome.

## License

SEMINARIO SU GIT (c) by LUCA VICIDOMINI

SEMINARIO SU GIT is licensed under a
Creative Commons Attribution-ShareAlike 4.0 International License.

You should have received a copy of the license along with this
work.  If not, see <http://creativecommons.org/licenses/by-sa/4.0/>.
