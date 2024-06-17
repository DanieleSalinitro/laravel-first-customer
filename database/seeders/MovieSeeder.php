<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Interstellar',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
                'description' => 'Un team di esploratori viaggia attraverso un wormhole nello spazio nel tentativo di garantire la sopravvivenza dell’umanità.',
                'language' => 'Inglese',
                'cast' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
                'director' => 'Christopher Nolan',
                'genre' => 'Sci-Fi',
                'duration' => '169',
            ],
            [
                'title' => 'Inception',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg',
                'description' => 'Un ladro che ruba segreti aziendali utilizzando la tecnologia della condivisione dei sogni è incaricato di svolgere il compito inverso: piantare un\'idea nella mente di un CEO.',
                'language' => 'Inglese',
                'cast' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
                'director' => 'Christopher Nolan',
                'genre' => 'Sci-Fi',
                'duration' => '148',
            ],
            [
                'title' => 'Il Padrino',
                'image' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'description' => 'Il patriarca anziano di una dinastia del crimine organizzato trasferisce il controllo del suo impero clandestino al figlio riluttante.',
                'language' => 'Inglese',
                'cast' => 'Marlon Brando, Al Pacino, James Caan',
                'director' => 'Francis Ford Coppola',
                'genre' => 'Crime',
                'duration' => '175',
            ],
            [
                'title' => 'Pulp Fiction',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwNjExMDkyMw@@._V1_.jpg',
                'description' => 'Le vite di due sicari della mafia, un pugile, un gangster e sua moglie, e una coppia di banditi in una tavola calda si intrecciano in quattro racconti di violenza e redenzione.',
                'language' => 'Inglese',
                'cast' => 'John Travolta, Uma Thurman, Samuel L. Jackson',
                'director' => 'Quentin Tarantino',
                'genre' => 'Crime',
                'duration' => '154',
            ],
            [
                'title' => 'Batman - The Dark Knight',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
                'description' => 'Quando la minaccia conosciuta come il Joker emerge dal suo passato misterioso, semina distruzione e caos tra la gente di Gotham.',
                'language' => 'Inglese',
                'cast' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
                'director' => 'Christopher Nolan',
                'genre' => 'Action',
                'duration' => '152',
            ],
            [
                'title' => 'Forrest Gump',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
                'description' => 'Le presidenze di Kennedy e Johnson, gli eventi del Vietnam, il Watergate e altri eventi storici si svolgono dalla prospettiva di un uomo dell\'Alabama.',
                'language' => 'Inglese',
                'cast' => 'Tom Hanks, Robin Wright, Gary Sinise',
                'director' => 'Robert Zemeckis',
                'genre' => 'Drama',
                'duration' => '142',
            ],
            [
                'title' => 'Le Ali della Libertà',
                'image' => 'https://m.media-amazon.com/images/M/MV5BN2EwM2I5OWMtMGQyMi00Zjg1LWJkNTctZTdhYzZiMTYyMzgyXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'description' => 'Due uomini imprigionati instaurano un legame nel corso di molti anni, trovando conforto e alla fine redenzione attraverso atti di comune decenza.',
                'language' => 'Inglese',
                'cast' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
                'director' => 'Frank Darabont',
                'genre' => 'Drama',
                'duration' => '142',
            ],
            [
                'title' => 'Fight Club',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZGY5Y2RjMmItNDg5Yy00NjUwLThjMTEtNDc2OGUzNTQ5YTI1XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'description' => 'Un impiegato d\'ufficio insonne e un fabbricante di sapone senza preoccupazioni formano un fight club clandestino che evolve in qualcosa di molto, molto di più.',
                'language' => 'Inglese',
                'cast' => 'Brad Pitt, Edward Norton, Meat Loaf',
                'director' => 'David Fincher',
                'genre' => 'Drama',
                'duration' => '139',
            ],
            [
                'title' => 'The Matrix',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'description' => 'Quando una bellissima sconosciuta conduce l\'hacker Neo in un oscuro mondo sotterraneo, egli scopre una verità scioccante.',
                'language' => 'Inglese',
                'cast' => 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'genre' => 'Sci-Fi',
                'duration' => '136',
            ],
            [
                'title' => 'Il Signore degli Anelli: La compagnia dell\'anello',
                'image' => 'https://m.media-amazon.com/images/M/MV5BN2EwM2I5OWMtMGQyMi00Zjg1LWJkNTctZTdhYzZiMTYyMzgyXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'description' => 'Un timido Hobbit della Contea e otto compagni partono per un viaggio con l\'obiettivo di distruggere l\'Unico Anello e salvare la Terra di Mezzo dal Signore Oscuro Sauron.',
                'language' => 'Inglese',
                'cast' => 'Elijah Wood, Ian McKellen, Orlando Bloom',
                'director' => 'Peter Jackson',
                'genre' => 'Fantasy',
                'duration' => '178',
            ],
            [
                'title' => 'Il Gladiatore',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
                'description' => 'Un ex generale romano si mette in viaggio per vendicarsi contro l\'imperatore corrotto che ha assassinato la sua famiglia e lo ha ridotto in schiavitù.',
                'language' => 'Inglese',
                'cast' => 'Russell Crowe, Joaquin Phoenix, Connie Nielsen',
                'director' => 'Ridley Scott',
                'genre' => 'Action',
                'duration' => '155',
            ],
            [
                'title' => 'Il Re Leone',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZjU0YWU4ZItzOWQtZDU3Zi00NGY1LWE2ZWQtZWM3MzVlM2UxYmUxXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'description' => 'Il giovane leone Simba e suo padre sono presi di mira dal suo zio invidioso, che desidera salire al trono.',
                'language' => 'Inglese',
                'cast' => 'Matthew Broderick, Jeremy Irons, James Earl Jones',
                'director' => 'Roger Allers, Rob Minkoff',
                'genre' => 'Animation',
                'duration' => '88',
            ],
            [
                'title' => 'Jurassic Park',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMjM2MDgxMDg0Nl5BMl5BanBnXkFtZTgwNTM2OTMwMDE@._V1_.jpg',
                'description' => 'Durante una visita di anteprima, un parco a tema subisce un grave guasto elettrico che permette ai dinosauri clonati di scatenarsi.',
                'language' => 'Inglese',
                'cast' => 'Sam Neill, Laura Dern, Jeff Goldblum',
                'director' => 'Steven Spielberg',
                'genre' => 'Adventure',
                'duration' => '127',
            ],
            [
                'title' => 'Il Silenzio degli Innocenti',
                'image' => 'https://m.media-amazon.com/images/M/MV5BZjU0YWU4ZItzOWQtZDU3Zi00NGY1LWE2ZWQtZWM3MzVlM2UxYmUxXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'description' => 'Una giovane cadetta dell\'FBI deve ottenere l\'aiuto di un cannibale manipolatore incarcerato per catturare un altro serial killer.',
                'language' => 'Inglese',
                'cast' => 'Jodie Foster, Anthony Hopkins, Lawrence A. Bonney',
                'director' => 'Jonathan Demme',
                'genre' => 'Thriller',
                'duration' => '118',
            ],
            [
                'title' => 'Schindler\'s List',
                'image' => 'https://m.media-amazon.com/images/M/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'description' => 'Nella Polonia occupata dai tedeschi durante la Seconda Guerra Mondiale, l\'industriale Oskar Schindler diventa gradualmente preoccupato per la sua forza lavoro ebraica.',
                'language' => 'Inglese',
                'cast' => 'Liam Neeson, Ralph Fiennes, Ben Kingsley',
                'director' => 'Steven Spielberg',
                'genre' => 'Biography',
                'duration' => '195',
            ],
            [
                'title' => 'I Soliti Sospetti',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
                'description' => 'Unico sopravvissuto racconta gli eventi intricati che portano a una terrificante sparatoria su una barca, che iniziano quando cinque criminali si incontrano in una fila di riconoscimento della polizia.',
                'language' => 'Inglese',
                'cast' => 'Kevin Spacey, Gabriel Byrne, Chazz Palminteri',
                'director' => 'Bryan Singer',
                'genre' => 'Crime',
                'duration' => '106',
            ],
            [
                'title' => 'Braveheart',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMzkzMmU0YTYtOWM3My00YzBmLWI0YzctOGYyNTkwOWI5MTQzXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'description' => 'Il guerriero scozzese William Wallace guida i suoi compatrioti in una ribellione per liberare la sua patria dalla tirannia del re Edoardo I d\'Inghilterra.',
                'language' => 'Inglese',
                'cast' => 'Mel Gibson, Sophie Marceau, Patrick McGoohan',
                'director' => 'Mel Gibson',
                'genre' => 'Biography',
                'duration' => '178',
            ],
            [
                'title' => 'Il Pianista',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMDNkYjM0Y2YtZmRjZS00NzlmLTg4ZWItYzVjZDMxNWM4MWExXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'description' => 'Un musicista ebreo polacco lotta per sopravvivere alla distruzione del ghetto di Varsavia durante la Seconda Guerra Mondiale.',
                'language' => 'Inglese',
                'cast' => 'Adrien Brody, Thomas Kretschmann, Frank Finlay',
                'director' => 'Roman Polanski',
                'genre' => 'Biography',
                'duration' => '150',
            ],
            [
                'title' => 'Whiplash',
                'image' => 'https://m.media-amazon.com/images/M/MV5BOTA5NDZlZGUtMjAxOS00YTRkLTkwYmMtYWQ0NWEwZDZiNjEzXkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_.jpg',
                'description' => 'Un promettente giovane batterista si iscrive a un conservatorio musicale spietato dove i suoi sogni di grandezza sono guidati da un istruttore.',
                'language' => 'Inglese',
                'cast' => 'Miles Teller, J.K. Simmons, Paul Reiser',
                'director' => 'Damien Chazelle',
                'genre' => 'Drama',
                'duration' => '107',
            ],
            [
                'title' => 'The Grand Budapest Hotel',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMzM5NjUxOTEyMl5BMl5BanBnXkFtZTgwNjEyMDM0MDE@._V1_.jpg',
                'description' => 'Uno scrittore incontra il proprietario di un hotel di lusso invecchiato, che gli racconta dei suoi primi anni trascorsi come ragazzo della hall negli anni gloriosi dell\'hotel sotto la guida di un concierge eccezionale.',
                'language' => 'Inglese',
                'cast' => 'Ralph Fiennes, F. Murray Abraham, Mathieu Amalric',
                'director' => 'Wes Anderson',
                'genre' => 'Comedy',
                'duration' => '99',
            ],
            [
                'title' => 'Mad Max: Fury Road',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTM4MjI5NDkyN15BMl5BanBnXkFtZTcwNjM0MjEzMw@@._V1_.jpg',
                'description' => 'In un deserto post-apocalittico, Max si allea con una donna misteriosa nel tentativo di sopravvivere.',
                'language' => 'Inglese',
                'cast' => 'Tom Hardy, Charlize Theron, Nicholas Hoult',
                'director' => 'George Miller',
                'genre' => 'Action',
                'duration' => '120',
            ],
            [
                'title' => 'The Wolf of Wall Street',   
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTI3NTQyMzU5M15BMl5BanBnXkFtZTgwMTgzODE4MjE@._V1_.jpg',
                'description' => 'Basato sulla storia vera di Jordan Belfort, dalla sua ascesa a ricco agente di borsa che vive nel lusso alla sua caduta coinvolgendo crimine, corruzione e il governo federale.',
                'language' => 'Inglese',
                'cast' => 'Leonardo DiCaprio, Jonah Hill, Margot Robbie',
                'director' => 'Martin Scorsese',
                'genre' => 'Biography',
                'duration' => '180',
            ],
        ];

        foreach ($movies as $movie) {
            $newMovie = new Movie();
            $newMovie->title = $movie['title'];
            $newMovie->image = $movie['image'];
            $newMovie->description = $movie['description'];
            $newMovie->language = $movie['language'];
            $newMovie->cast = $movie['cast'];
            $newMovie->director = $movie['director'];
            $newMovie->genre = $movie['genre'];
            $newMovie->duration = $movie['duration'];
            $newMovie->save();
        }
    }
}
