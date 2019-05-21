<?php
require_once "functions.php";
require_once "model/database.php";

$pays = getAllRows("pays");

getHeader("Accueil", "home");
?>

    <main>
            
        <div class="container pb-5">
                <div class="container d-none d-md-block pt-5">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                           
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                            <a href="sejour.php">
                              <img src="./imagescss/mec.jpg" class="d-block w-100" alt="...">
                              </a>
                            </div>
                            <div class="carousel-item">
                              <img src="./imagescss/honduras2-800x450.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="./imagescss/salvador-800x450.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="./imagescss/salvador6-800x450.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="./imagescss/costa-rica-1-800x450.jpg" class="d-block w-100" alt="...">
                            </div>
                            
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                          </a>
                        </div>
                </div>
            <div class="row pt-5">
                <div class="col-sm-6 col-lg-6 text-info">
                    <h3>Bruno MBOUMBA.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quod eos possimus, molestiae
                        praesentium delectus minima voluptatem obcaecati eaque dolores nulla enim illo ipsam aut.
                        Aliquid, tenetur? Possimus iste, cumque tenetur, libero esse eum autem facere et doloremque,
                        dignissimos eos id. Dolore voluptates culpa repellendus, cumque nihil excepturi libero modi?</p>
                    
                </div>
                <div class="col-sm-6 col-lg-6 text-info">
                    <h3>Maiores, ipsum.</h3>
                    <p>Modi accusantium optio doloribus fuga, et error quidem dolor eveniet alias voluptatibus, odio
                        soluta! Accusantium inventore porro recusandae eligendi veniam necessitatibus fuga, earum
                        molestiae. Veniam assumenda reiciendis ipsa. Fugit, nostrum! Non recusandae aliquam accusantium
                        aspernatur rerum. Possimus, eligendi. Ipsam dignissimos praesentium ipsa, ut facere corrupti
                        magnam voluptate accusamus quasi. Distinctio!</p>
                        <a href="" class="btn btn-secondary rounded-pill">Lire la suite</a>
                </div>
                
                
            </div>
            <!-- pour faire 2 colonnes on a fait row et .col-md-6 et 2* pour 2 col puis on a copier coller de BSTP et inserrer les img-->
            <div class="row py-5">
                <div class="col-md-6  mb-3">
                    <!-- ici je mets une marge de 5 pour le mobile et annuler à partir du medium -->
                    <div class="card mb-5 mb-md-0">
                        
                        <div class="card-body">
                            <h5 class="card-title">NOS SEJOURS/PAYS</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus unde, eveniet, temporibus inventore alias ipsam quasi dolorum aliquam optio facere consequatur ipsum consequuntur odio blanditiis iusto non dolor.</p>
                            <ul>
                              <li>ryrioruiuo</li>
                              <li>hfkjfkljl</li>
                              <li>hkfjflkfhjj</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In numquam laboriosam neque, quis expedita ipsam! Beatae dicta earum obcaecati repudiandae sint aspernatur qui quaerat facilis.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="card mb-5 mb-md-0">
                    <a href="sejour.php">
                        <img src="./imagescss/mexique.jpg" class="card-img-top" alt="...">
                      </a>
                        <div class="card-body">
                            <h5 class="card-title">Mexique</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="sejour.php" class="btn btn-primary">Voir cette destination</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="card mb-5 mb-md-0">
                    <a href="#">
                      <img src="./imagescss/salvador6-800x450.jpg" class="card-img-top" alt="...">
                    </a>
                      <div class="card-body">
                          <h5 class="card-title">Guatemala</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk
                              of the card's content.</p>
                          <a href="#" class="btn btn-primary">Voir cette destination</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 mb-5">
                <div class="card mb-5 mb-md-0">
                  <a href="#">
                    <img src="./imagescss/honduras2-800x450.jpg" class="card-img-top" alt="...">
                  </a>
                    <div class="card-body">
                        <h5 class="card-title">Honduras</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-primary">Voir cette destination</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5">
              <div class="card mb-5 mb-md-0">
                <a href="#">
                  <img src="./imagescss/salvador-800x450.jpg" class="card-img-top" alt="...">
                </a>
                  <div class="card-body">
                      <h5 class="card-title">Salvador</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk
                          of the card's content.</p>
                      <a href="#" class="btn btn-primary">Voir cette destination</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6 mb-5">
                    <div class="card mb-5 mb-md-0">
                      <a href="#">
                        <img src="./imagescss/costa-rica-1-800x450.jpg" class="card-img-top" alt="...">
                      </a>
                        <div class="card-body">
                            <h5 class="card-title">Costa Rica</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Voir cette destination</a>
                        </div>
                    </div>
                </div>
             </div>
      </div>
    </main>

    <?php getFooter(); ?>