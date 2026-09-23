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
    <h2>New category</h2>

    <form action="/categories/create" method="post">
        <div>
            <input type="text" name="title" class="input">
            <?php input_error($errors['title'] ?? null) ?>
        </div>

        <div>
            <textarea name="description" id="" class="input"></textarea>
            <?php input_error($errors['description'] ?? null) ?>

        </div>
        <button class="bg-blue-500 py-3 px-6 rounded-lg">
            Ajouter
        </button>
    </form>
</section>