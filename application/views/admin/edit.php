<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/edit/<?= $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" value="<?= htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Breed</label>
                                <input class="form-control" type="text" value="<?= htmlspecialchars($data['description'], ENT_QUOTES); ?>" name="description">
                            </div>
                            <div class="form-group">
                                <label>Information about</label>
                                <textarea class="form-control" rows="3" name="text"><?= htmlspecialchars($data['text'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>File</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>