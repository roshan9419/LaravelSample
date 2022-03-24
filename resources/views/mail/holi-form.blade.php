<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mailer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-5">Happy Holi! Invite your friends 🎉</h1>
        <form action="/mail/send" method="POST">
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <div class="mb-3">
                <label class="form-label">Email addresses</label>
                <input type="text" class="form-control" name="emails">
                <small class="text-muted">Add emails separated by comma</small>
            </div>
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Message Body</label>
                <textarea class="form-control" placeholder="What message you want to attach..." style="height: 100px" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send e-mail to your friends</button>
        </form>
    </div>
</body>
</html>