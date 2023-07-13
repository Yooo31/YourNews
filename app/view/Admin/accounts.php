<h1>Gestion des comptes</h1>

<table class="tableau-style">
  <thead>
    <tr>
      <th>Utilisateur</th>
      <th>Rôle</th>
      <th>Email</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Date</th>
      <th>Action</th>
      <th>Raison du banissement</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) : ?>
      <tr id="<?php echo $user['id']; ?>">
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['account_type']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['lastname']; ?></td>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo date_format(date_create($user['created_at']), "d F"); ?></td>

        <?php if ($user['is_banned']) : ?>
          <td>
            <form method="POST" action="/admin-accounts-update">
              <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
              <input type="hidden" name="value" value="0">
              <input type="hidden" name="colName" value="is_banned">
              <input type="submit" name="unban" value="Débannir">
            </form>
          </td>
          <td><?php echo $user['reason_for_ban']; ?></td>
        <?php elseif (!$user['is_validated']) : ?>
          <td>
            <form method="POST" action="/admin-accounts-update">
              <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
              <input type="hidden" name="value" value="1">
              <input type="hidden" name="colName" value="is_validated">
              <input type="submit" name="validate" value="Valider">
            </form>
            <form method="POST" action="/admin-accounts-update">
              <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
              <input type="hidden" name="value" value="0">
              <input type="hidden" name="colName" value="is_validated">
              <input type="submit" name="reject" value="Refuser">
            </form>
          </td>
          <td>Rien à signaler</td>
        <?php elseif ($user['account_type'] == "reader") : ?>
          <td>
            <button onclick="openPopUp()">Bannir</button>
            <form method="POST" action="/admin-accounts-update">
              <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
              <input type="hidden" name="value" value="modo">
              <input type="hidden" name="colName" value="account_type">
              <input type="submit" name="modo" value="Promouvoir Modo">
            </form>
          </td>
          <td>Rien à signaler</td>
        <?php else : ?>
          <td>Aucune action possible</td>
          <td>Rien à signaler</td>
        <?php endif ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div id="popup" class="popup">
  <div class="popup-content">
    <form method="POST" action="/admin-accounts-update">
      <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
      <input type="hidden" name="value" value="1">
      <input type="hidden" name="colName" value="is_banned">
      <textarea name="reason_for_ban"></textarea>
      <input type="submit" name="unban" value="Bannir">
    </form>
    <button onclick="closePopUp()">Annuler</button>
  </div>
</div>
