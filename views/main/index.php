<header class="masthead parallax" style="background-image: url('/views/images/default.jpg'); filter: grayscale(0.7);">
    <h1 class="text-center" >блог</h1>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                        <a class="text-secondary" href="/post/<?php echo $val['id']; ?>">
                            <h2 class="text-secondary"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5 class="text-secondary"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h5>
                        </a>
                    </div>
                    <hr>
                <?php endforeach;
                    echo $pagination; 
            endif; ?>
        </div>
    </div>
</div>