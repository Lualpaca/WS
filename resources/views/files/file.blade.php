<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <title>Laravel File Upload Tutorial Example From Scratch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Laravel Upload File Example</div>
            <img src="/storage/app/avatars/tjQypv1FsqAhwccTY1VZQuZgWl3Dg47Fq4ZPl5RZ.jpeg" width="100" height="100">
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">

                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="save" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="file" id="file" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of
                            image should not be more than 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
</body>
</html>
