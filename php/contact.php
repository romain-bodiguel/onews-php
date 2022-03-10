<?php
    include ('inc/header-contact.php');
?>
      <main class="right">
        <h2 class="right__title">Contact</h2>
        <div class="posts">
          <div class="post post--solo">
          <form action="../html/traitement.php" method="post">
            
            <section class="identite"> 
              <div>
                <label for="gender">Je suis :</label>
                <div class="div-gender">
                  <input type="radio" id="gender" name="user_type">
                  <label for="homme">Homme</label>
                  <input type="radio" id="gender" name="user_type">
                  <label for="femme">Femme</label>
                </div>
              </div>

              <div>
                <label for="name">Mon prénom est :</label>
                <input type="text" id="name" name="user_name" placeholder="Prénom">
              </div>

              <div>
                <label for="nickname">Et mon nom :</label>
                <input type="text" id="name" name="user_name" placeholder="Nom">
              </div>

              <div>
              <label for="info-select">J'ai connu ce site grâce à :</label>
              <select name="info" id="info-select">
                  <option value="">--Please choose an option--</option>
                  <option value="facebook">Facebook</option>
                  <option value="twitter">Twitter</option>
                  <option value="google">Google</option>
                  <option value="boucheaoreille">Bouche à oreilles</option>
                  <option value="jeanpierrepernault">JT de 13h de Jean-Pierre Pernault</option>
                  <option value="autre">Autre</option>
              </select>
              </div>
            </section>

            <section class="message">
              <div>
                  <label for="mail">Répondez-moi via :</label>
                  <input type="email" id="mail" name="user_mail" placeholder="E-mail">
              </div>

              <div class="votre-message">
                <label for="msg">Je voulais vous dire que :</label>
                <textarea id="msg" name="user_message"  placeholder="Votre message"></textarea>
              </div>

              <div>
                <label for="file">Et vous montrer ça aussi :</label>
                <input type="file" id="fichier" name="fichier" accept="image/png, image/jpeg">
              </div>
            </section>

            <section class="informations">
              <div class="div-checkbox">
                <label>Je certifie la véracité de ces informations :</label>
                <input type="checkbox" id="scales" name="scales">
              </div>
            </section>

            <section class="envoyer">
              <div>
                <input type="button" id="envoyer" value="Envoyer">
              </div>
            </section>
          </form>
          </div>
          <a href="./index.php" class="post__link">back to home</a>
        </div>
      </main>
    </div>
</body>
</html>
