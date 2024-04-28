<?php

require_once __DIR__ . '/database/db.php';

// Include head
include_once __DIR__ . '/layouts/head.php';
?>


<body>

    <!-- Include header -->
    <?php include_once __DIR__ . '/layouts/header.php'; ?>

    <main class="bg-body-secondary min-vh-100">
        <section>
            <div class="container-medium">
                <div class="row row-cols-1 g-5">

                    <!-- cycle insiede posts -->
                    <?php foreach ($posts as $post) : ?>

                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white bg-primary">

                                    <!-- Post title -->
                                    <h3><?= $post->title ?></h3>

                                    <!-- Post author -->
                                    <div>
                                        <span>pubblicato da </span>
                                        <span><strong><?= $post->author ?></strong></span>
                                    </div>

                                    <!-- Post date -->
                                    <div>
                                        <span>in data</span>
                                        <span><strong><?= $post->date ?></strong></span>
                                    </div>

                                </div>

                                <div class="card-body bg-primary-subtle">
                                    <div class="row">

                                        <!-- Cycle inside medias -->
                                        <?php foreach ($post->medias as $media) : ?>

                                            <div class="col-6">

                                                <!-- Condition that say me if there is a video or photo inside the path -->
                                                <?php if (str_contains($media->path, '.mp4')) : ?>

                                                    <video width="320" height="240" controls>
                                                        <source src="<?= $media->path ?>" type="video/mp4">
                                                    </video>

                                                <?php else : ?>

                                                    <img src="<?= $media->path ?>" alt="">

                                                <?php endif; ?>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>

    </main>

    <!-- include footer -->
    <?php include_once __DIR__ . '/layouts/footer.php'; ?>

</body>

</html>