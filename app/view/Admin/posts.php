<div id="admin">
  <div class="container">
    <div class="row">
      <div class="col">
        <a href="/admin" class="btn">
          <i class="fas fa-angle-double-left"></i>
          Retour en arrière
        </a>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <h1 class="mb-5 text-secondary">Gestion des articles</h1>

        <hr>
      </div>
    </div>
  </div>

  <table id="post" class="tableau-style">
    <thead>
      <tr>
        <th>Auteur</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Contenu</th>
        <th>Date création</th>
        <th>Date modification</th>
        <th>Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($posts as $post) : ?>
        <tr>
          <td><a href="admin-accounts#<?php echo $post['user_id']; ?>"><?php echo $post['creator_username']; ?></td>
          <td><?php echo $post['title']; ?></td>
          <td><?php echo $post['description']; ?></td>
          <td><a href="/admin-post-show?id=<?php echo $post['id']; ?>">Voir</a></td>
          <td><?php echo date_format(date_create($post['created_at']), "d F"); ?></td>
          <td><?php echo date_format(date_create($post['updated_at']), "d F"); ?></td>
          <td><?php echo ($post['is_private'] ? "Privé" : "Public") ?></td>
          <td>
            <?php if ($post['is_approved']): ?>
              Article validé
            <?php else: ?>
              <form method="POST" action="/admin-posts-approve">
                <input type="hidden" name="postId" value="<?php echo $post['id']; ?>">
                <input type="submit" name="unban" class="btn-small btn-confirm mb-2" value="Valider">
              </form>
              <button onclick="openPopUp()" class="btn-small btn-delete">Refuser</button>
            <?php endif ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div id="popup" class="popup">
  <div class="popup-content">
    <div class="container">
      <form method="POST" action="/admin-posts-reject">
        <div class="row">
          <input type="hidden" name="postId" value="<?php echo $post['id']; ?>">
          <textarea placeholder="Entrer la raison" name="reason_for_ban"></textarea>
        </div>
        <div class="row">
          <div class="col">
            <button onclick="closePopUp()" class="btn-small btn-neutral">Annuler</button>
          </div>
          <div class="col text-right">
            <input type="submit" name="unban" class="btn-small btn-delete" value="Refuser" style="margin-top: 10px;">
          </div>
      </form>
    </div>
  </div>
</div>
