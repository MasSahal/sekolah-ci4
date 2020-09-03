<?= $this->extend("templates") ?>

<?= $this->section("title") ?>
<h3 class="h3 mb-5">Categories Page</h3>
<?= $this->endSection() ?>

<?= $this->section("content") ?>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_cat_modal">
    Add Categories
</button>

<!-- Modal -->
<div class="modal fade text-dark" id="add_cat_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url("/insert_category") ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category">Title of Category</label>
                        <input type="text" name="category" id="category" class="form-control" required aria-describedby="helpId">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<table class="table table-stripped table-secondary my-2">
    <thead>
        <tr>
            <th>No</th>
            <th>Title of Categories</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">1</td>
            <td>Education</td>
            <td>
                <input name="" id="" class="btn btn-warning btn-sm" type="button" value="Delete">
                <input name="" id="" class="btn btn-success btn-sm" type="button" value="Edit">
            </td>
        </tr>
        <tr>
            <td scope="row">2</td>
            <td>Social</td>
            <td>
                <input name="" id="" class="btn btn-warning btn-sm" type="button" value="Delete">
                <input name="" id="" class="btn btn-success btn-sm" type="button" value="Edit">
            </td>
        </tr>
        <tr>
            <td scope="row">3</td>
            <td>Entertaiment</td>
            <td>
                <input name="" id="" class="btn btn-warning btn-sm" type="button" value="Delete">
                <input name="" id="" class="btn btn-success btn-sm" type="button" value="Edit">
            </td>
        </tr>
    </tbody>
</table>



<?= $this->endSection() ?>