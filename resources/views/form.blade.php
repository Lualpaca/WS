<form method="post" enctype="multipart/form-data" action="subir">
    @csrf
    <div class="form-group">
        <input type="file" class="form-control-file" name="avatar" id="avatar" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be
            more than 2MB.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
