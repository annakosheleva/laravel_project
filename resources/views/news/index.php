<?php foreach($newsList as $news): ?>
    <div>
        <h2><?=$news['title']?></h2>
        <p><?=$news['description']?></p>
    </div><br>
<?php endforeach; ?>