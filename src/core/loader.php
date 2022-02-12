<?php require('src/includes/header.php');?>
    <div class="container" style="margin-top: 75px;">
        <form action="" method="POST">
            <div class="form-group">
                <input type="url" name="site_to_view" class="form-control" placeholder="Enter Site Url" required value=" <?= (isset($query)) ? $query : ''; ?>  ">
            </div>
            <div class="form-group">
                <button name="check_codes" class="btn btn-primary">View Code</button>
            </div>
    </form>
    <?= (isset($status)) ? $status : ''; ?>
    <div class="form-group">
        <textarea id="" cols="30" rows="10" class="form-control"><?= (isset($sourceCode)) ? $sourceCode : ''; ?> </textarea>
    </div>
</div>