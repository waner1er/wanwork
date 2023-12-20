<h1>Modifier
    <?php echo $post['title']; ?>
</h1>

<form action="/posts/update" method="put">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?php echo $post['title'] ?>">
    </div>
    <div>
        <label for="content">Contenu</label>
        <textarea name="content" id="content" cols="30" rows="10"
            placeholder="un contenu"><?php echo htmlspecialchars($post['content']) ?></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>