<div class="m-auto" style="width: 90%" >
  
    <!-- ARTICLE -->
    <article>
    <img src="..." alt="" class="img-fluid">
    <div class="post-content">
        <h1>Title</h3>
        <ul class="post-meta list-inline d-flex">
            <li class="text-muted me-4">
                <a href="#">Écrit par : auteur</a>
            </li>
            <li class="text-muted">
               <a href="#">29 June 2017</a>
            </li>
        </ul> 
        
        <!-- SI LE USER EST LA PERSONNE QUI A ECRIT L'ARTICLE OU QUE C'EST UN ADMIN -->
        <div class="mb-3">
          <button class="btn btn-warning">modifier l'article</button>
          <button class="btn btn-danger">supprimer l'article</button>
        </div>
        <!-- -->
        
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in laoreet nulla. Etiam tincidunt nisi sit amet bibendum malesuada. Donec orci elit, interdum sit amet ullamcorper sit amet, blandit non urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum elit magna, laoreet a magna eu, tempus vulputate ante. Cras convallis tortor odio, nec gravida lacus viverra vitae. Nunc pulvinar ipsum ante, eu efficitur turpis dapibus vel. Donec pharetra ex eros, nec tincidunt mi porttitor congue. Sed ipsum purus, tempor nec turpis non, accumsan porta ex. Pellentesque sit amet faucibus purus. Pellentesque ut ultricies felis. Praesent in sem sit amet tellus pulvinar lobortis consequat ut massa. Integer massa sem, interdum vel auctor commodo, auctor ut mauris.
        Curabitur aliquam tincidunt magna, sed ullamcorper eros eleifend in. Aenean vehicula neque est, eget sollicitudin dui vestibulum vitae. Praesent varius faucibus faucibus. Nulla et malesuada dolor. Ut tempus venenatis quam, sit amet auctor leo. Aenean scelerisque sit amet orci vitae porta. Phasellus suscipit imperdiet consequat. Nullam at cursus justo. Sed sed lacus a lectus faucibus convallis vel vel neque. Ut molestie pharetra quam a sagittis.
        Nullam g ravida tincidunt magna eget mollis. Donec sed nisl fermentum felis tempus molestie sed vel elit. Fusce non mollis nibh. Curabitur eu mauris semper, elementum sapien ac, mollis ipsum. In cursus finibus lectus, nec commodo erat sollicitudin sit amet. Quisque id diam sagittis, congue leo vel, facilisis neque. Nullam sit amet vulputate lorem. Nam ut velit vitae enim rutrum aliquam sed vel lacus. Vivamus at facilisis odio. Suspendisse lobortis ut dolor et scelerisque. Ut tristique est lectus, sit amet lacinia enim sagittis id.
        </p>
    </div>
    </article>
    <section>
      <h2>Commentaires</h2>

      <!-- AJOUTER COMMENTAIRE -->
      <div class="card">
        <form class="card-body">
          <label for="comment" class="mb-2">Écrire votre commentaire ici :</label>
          <textarea id="comment" type="text" rows="3" class="form-control mb-2"></textarea>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>

      <!-- COMMENTAIRES A BOUCLER -->
      <div>
        <div class="card my-3">
          <div class="card-body">
            <p>commentaire</p>
            <p class="text-muted">Par : auteur commentaire</p>
            <p class="text-muted">Le : date</p>
            
            <!-- SI LE USER EST LA PERSONNE QUI A ECRIT LE COMMENTAIRE OU QUE C'EST UN ADMIN -->
            <div class="mb-3">
              <button class="btn btn-warning">modifier</button>
              <button class="btn btn-danger">supprimer</button>
            </div>
            <!-- -->

          </div>
        </div>
      </div>
    </section>
</div>