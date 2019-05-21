<?php
require_once "functions.php";

getHeader("Archive des séjours", "page-archive");
?>

  <div class="container py-5">

    <h1>CONTACTEZ-NOUS</h1>
    <div class="row flex-md-row-reverse">

      <div class="col-md-6 mb-5 mb-md-0">
        <div class="card">
          <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="inputName">Nom</label>
                    <input type="password" class="form-control" id="inputName" placeholder="Votre nom">
                  </div>
                  <div class="form-group">
                      <label for="champEmail">Email</label>
                      <input type="email" class="form-control" id="champEmail" placeholder="Votre email">
                  </div>
                  <div class="form-group">
                      <label for="champMessage">Message</label>
                      <textarea class="form-control" id="champMessage" rows="3"></textarea>
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="copy">
                    <label class="form-check-label" for="copy">Recevoir une copie</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <img src="./images/desert-10.jpg" alt="" class="card-img-top">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laudantium dolorem iusto quod vero omnis earum ad, amet repellendus, velit ipsa non laborum cupiditate saepe magnam recusandae quam consectetur quas odio est.frkhcjhcijhghjghjjhgfgfgfchgfghc </p>
          </div>
        </div>
      </div>>
    </div>
  </div>


  <footer class="bg-dark text-white py-5">

    <div class="container">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam beatae amet, sit quasi id, pariatur
        praesentium quaerat iste doloremque sint delectus aspernatur exercitationem molestiae in? A soluta doloremque
        minima unde deleniti mollitia, aut fuga optio maxime, hic officia repudiandae, dolor cumque! Eveniet
        voluptatibus dicta, praesentium cum unde eligendi neque nihil.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>

</body>

</html>