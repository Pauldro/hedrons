<form action="<?= $config->pages->podcast.'topics/add/'; ?>" method="post">
    <div class="topics">
        <div class="row topic-form-group">
            <div class="form-group col-sm-8">
                <label>Topic</label>
                <input type="text" name="topic[]" class="form-control input-sm">
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="button" onClick="duplicateelement('.topic-form-group', '.topics')"><i class="fa fa-plus" aria-hidden="true"></i> Add Topic</button>
    <br><br>
    <button class="btn btn-success" type="submit">Submit Topics</button>
</form>
