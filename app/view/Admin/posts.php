<h1>Gestion des posts</h1>

<table class="tableau-style">
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
              <input type="submit" name="unban" value="Valider">
            </form>
            <button onclick="openPopUp()">Refuser</button>
          <?php endif ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div id="popup" class="popup">
  <div class="popup-content">
    <form method="POST" action="/admin-posts-reject">
      <input type="hidden" name="postId" value="<?php echo $post['id']; ?>">
      <textarea name="reason_for_ban"></textarea>
      <input type="submit" name="unban" value="Refuser">
    </form>
    <button onclick="closePopUp()">Annuler</button>
  </div>
</div>
