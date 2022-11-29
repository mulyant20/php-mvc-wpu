<h1>Our techstack</h1>
<ul>
    <?php foreach($data['techstack'] as $props) : ?>
        <li><?= $props['name'] ?></li>
    <?php endforeach; ?>
</ul>