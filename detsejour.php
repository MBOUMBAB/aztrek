<?php
require_once "functions.php";

getHeader("Accueil", "home");
?>



    <main>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-6">
                    <img src="./imagescss/puebla001.jpg" alt="">
                </div>
                <div class="col-md-6 text-center">
                    <h2>Les Tresors du Yucatan</h2>
                    <ul>
                        <li>durée : 6 jours</li>
                        <li> Prix: 3250€</li>
                        <li>Difficulté : Niveau1/5</li>
                    </ul>
                    <p>
                    Vous apprécierez
                    Des sites mayas incontournables et hors sentiers battus <br>
                    Un délicieux cocktail d'écotourisme et de découverte culturelle
                    Palenque et les sites de la forêt lacandone au Chiapas <br>
                    Un itinéraire ponctué de baignades en mer, en cenote et en lagune
                    </p>

                    <a href="contact.php" class="btn btn-primary">S'INSCRIRE/POSER UNE QUESTION</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pt-2">
                    <p>Le Mexique, et en particulier le Yucatán, est une terre de rêve. Elle y mêle quelques-uns des
                        plus beaux sites mayas, riche patrimoine culturel, et des trésors naturels, comme la mer des
                        Caraïbes ou les cenotes, ces puits souterrains ou à ciel ouvert, trous d’eau qui parsèment le
                        plateau calcaire du Yucatán. L'âme indienne y est bien vivante, celle de la civilisation
                        raffinée des Mayas à leur grande époque bien sûr, mais également celle des Mayas d’aujourd’hui,
                        qui ont gardé leurs us et coutumes.
                    </p>
                     
                </div>
                <div class="col-md-12 pt-2">
                <h3>J1 : Cancún </h3>
                    <p>Accueil à l'aéroport par notre guide et route jusqu’à Coba, agréable site maya dont les ruines sont dispersées dans la forêt. Nous enfourchons nos vélos et partons sur de larges "sacbe", les anciennes routes mayas, pour une découverte dynamique et divertissante de l'ancienne cité (2h de vélo avec pauses). De nombreux arrêts viennent ponctuer la balade, notamment la "Grande Pyramide" au sommet de laquelle on bénéficie d’une vue imprenable sur la forêt environnante et les cinq lacs. Transfert à Valladolid en fin d’après-midi et installation dans un charmant hôtel colonial donnant sur le parc central. Promenade en ville et temps libre avant le dîner.

                    </p>
                       
                </div>
                <div class="col-md-12 pt-2">
                <h3>J2: Valladolid</h3>
                    <p>Visite matinale de Chichen Itza, pour profiter de la fraîcheur et d'une fréquentation moins intense qu'en fin de matinée. Ce site, certainement le plus célèbre et le plus spectaculaire du Yucatán, a été bâti par les Mayas, mais n'a connu son véritable essor que sous l’impulsion des Toltèques. La cité que l’on observe aujourd’hui est le fruit de cette rencontre, et révèle une architecture monumentale dont les bas-reliefs représentent souvent les récits des sacrifices humains.
                    </p>
                       
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <table class="table table-sm table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Du</th>
                                <th scope="col">Au</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Départ</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">22/05/2019</th>
                                <td>22/06/2019</td>
                                <td>2850 €</td>
                                <td>Paris</td>
                                <td>Modifier</td>
                            </tr>
                            <tr>
                                <th scope="row">22/06/2019</th>
                                <td>22/07/2019</td>
                                <td>3250 €</td>
                                <td>Mexique</td>
                                <td>Ajouter</td>
                            </tr>
                            <tr>
                                <th scope="row">22/07/2019</th>
                                <td>22/08/2019</td>
                                <td>2750 €</td>
                                <td>Honduras</td>
                                <td>Supprimer</td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
    </main>
  




<?php getFooter(); ?>