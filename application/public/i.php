<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Last test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Last Test</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class="navbar-form navbar-right" method="post">
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" placeholder="http://example.com" name="url">
                </div>
                <button type="submit" class="btn btn-default" id="check" >Check</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <?php if($result != []){ ?>
        <table class="table">
            <tr>
                <th>№</th>
                <th>Проверка</th>
                <th>Статус</th>
                <th>Состояние</th>
                <th>Рекомендации</th>
            </tr>
            <?php foreach ($result as $k => $v) { ?>
            <tr>
                <td><?php echo $k; ?></td>
                <td><?php echo $v['test']; ?></td>
                <td><?php echo $v['status']; ?></td>
                <td><?php echo $v['state']; ?></td>
                <td><?php echo $v['recommendation']; } ?></td>
            </tr>
        </table>
    <?php } ?>
</div>
</body>
</html>