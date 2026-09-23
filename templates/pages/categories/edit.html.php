<style>
    .input {
        outline: none;
        border: solid 1px gray;
        width: 100%;
        padding: .5rem 1rem;
        margin-bottom: .5rem;
    }
</style>



<section>
    <h2>Edit category</h2>

    <form action="/categories/update/<?= $category->id ?>" method="post">
        <div>
            <input
                type="text"
                name="title"
                class="input"
                value="<?= isset($_POST['title']) ? $_POST['title'] : $category->title ?>">
            <?php input_error($errors['title'] ?? null) ?>
        </div>

        <div>
            <textarea name="description" id="" class="input"><?= isset($_POST['description']) ? $_POST['description'] : $category->description ?></textarea>
            <?php input_error($errors['description'] ?? null) ?>

        </div>
        <button class="bg-blue-500 py-3 px-6 rounded-lg">
            Ajouter
        </button>
    </form>
</section>