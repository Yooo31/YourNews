<h2> Créer un post </h2>

<form method="POST" action="/post-new">
  <label for="title">Titre :</label>
  <input type="text" name="title" id="title">

  <label for="description">Description :</label>
  <input type="text" name="description" id="description">

  <textarea id="postArea" name="postArea"></textarea>

  <div class="cta text-center mt-4 mb-1">
    <button type="submit" name="submit_post" id="postButton" class="button button-medium button-orange">Publier !</button>
  </div>
</form>