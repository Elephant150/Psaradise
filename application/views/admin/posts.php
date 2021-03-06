<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Posts</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <?php if (empty($list)): ?>
                            <p>List posts empty</p>
                        <?php else: ?>
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php foreach ($list as $val): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                            <td><a href="/admin/edit/<?php echo $val['id']; ?>" class="btn btn-primary">Edit</a> </td>
                            <td><a href="/admin/delete/<?php echo $val['id']; ?>" class="btn btn-danger">Delete</a> </td>
                            <td><?php echo $val['id']; ?></td>
                        </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php if (isset($pagination)) {
                            echo $pagination;
                        } ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
