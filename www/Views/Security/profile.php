<p>Prénom: <?= htmlspecialchars($authUser->getFirstname(), ENT_QUOTES, 'UTF-8') ?></p>
<p>Nom: <?= htmlspecialchars($authUser->getLastname(), ENT_QUOTES, 'UTF-8') ?></p>
<p>Email: <?= htmlspecialchars($authUser->getEmail(), ENT_QUOTES, 'UTF-8') ?></p>
<p>session id: <?= htmlspecialchars($_SESSION['user_id'], ENT_QUOTES, 'UTF-8') ?></p>

<?= $pageForm ?>
<?= $articleForm ?>
