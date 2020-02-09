<?php
use yii\helpers\Url;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="javascript:void(0)"><img src="<?= $article->getImage(); ?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title; ?></a></h6>

                            <h1 class="entry-title"><a href="javascript:void(0)"><?= $article->title; ?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content; ?>
                        </div>
                        <div class="decoration">
                            <?php foreach($tags as $tag): ?>
                            <a href="javascript:void(0)" class="btn btn-default"><?= $tag->title; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize"><?= $article->date; ?></span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->