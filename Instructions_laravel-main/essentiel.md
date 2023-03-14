
### Les routes
    - Route:: classe laravel
    - get: méthode laravel
    - '/' : url
    - function(){ return view('welcome')}: callback function
    - syntax: Route::get('/', function(){ return view('welcome')})
    - NB: En laravel, pour les liens, le '/' est remplacé par '.'
    - Mot clé  '@extends' permet de copier coller le code d'un fichier dans un autre
    - Mot clé '@section('content')' -> dans l'enfant
    - Mot clé '@section('content')' -> dans le parent

### Les controller
    -commande a taper: php artisan make: controller NomDuController ou composer dump-autoload si le controller est créé manuellement
    - Pour appeler la classe et une méthode du controller:
        `Route:: get('/', [NomClass::class, 'Nom méthode')`

### Les vues
    -Pour passer une variable dans une vue, on utilise compact('nomVariable')
    - Les directives
        - @foreach
        -...

