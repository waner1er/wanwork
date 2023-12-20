<h1>Rédiger un article</h1>

<form action="/posts/store" method="post">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" placeholder="un titre">
    </div>
    <div>
        <label for="content">Contenu</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="un contenu"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>