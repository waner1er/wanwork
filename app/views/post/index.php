<h1>Posts</h1>
<p>Welcome to the posts page!</p>

<div>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h2>
                <a href="/posts/<?php echo $post['id']; ?>">
                    <?php echo $post['title']; ?>
                </a>
            </h2>
            <p><?php echo $post['content']; ?></p>
        </article>
    <?php endforeach; ?>
</div>