<section>
    <h2>Categories</h2>
    <a href="/categories/create">New</a>

    <ul>
        <?php
        /**
         * @var array $categories;
         */
        foreach ($categories as $value) { ?>
            <li>
                <div style="background: gray;padding: 1rem;" class="flex justify-between items-center">
                    <div>
                        <h2><?= htmlspecialchars($value->title)  ?></h2>
                        <p>
                            <?= htmlspecialchars($value->description)  ?>
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <form action="/categories/destroy/<?= $value->id ?>" method="post">
                            <button type="submit" class="text-red-700">Delete</button>
                        </form>
                        <a href="/categories/<?= $value->id ?>/edit" class="text-yellow-800">edit </a>
                    </div>
                </div>
            </li>
            <br>
        <?php } ?>

    </ul>
</section>