<div id="post-new">
  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <h1 class="mb-5">Ajout d'un nouvel article</h1>

        <hr>
      </div>
    </div>
  </div>

  <form method="POST" action="/post-new">

    <div class="container mt-5 mb-5">
      <div class="row" style="justify-content: space-around;">
        <div class="col-4">
          <input type="text" class="form-control m-3" placeholder="Titre de l'article" name="title" id="title">
        </div>
        <div class="col-6">
          <input type="text" class="form-control m-3" placeholder="Description de l'article" name="description" id="description">
        </div>
      </div>
    </div>

    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col">
          <textarea id="postArea" name="postArea"></textarea>
        </div>
      </div>
    </div>

    <div class="container mt-5" style="margin-bottom: 100px;">
      <div class="row">
        <div class="col">
          <a href="/posts" class="btn btn-delete">
            Annuler
          </a>
        </div>
        <div class="col text-right">
          <button class="btn btn-confirm" type="submit" name="submit_post" id="postButton" >
            <i class="fas fa-check"></i>
            Publier
          </button>
        </div>
      </div>
    </div>

  </form>
</div>
