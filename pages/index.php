<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">logo</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">series</a></li>
                <li><a href="" class="nav-link">string</a></li>
                <li><a href="" class="nav-link">array</a></li>
            </ul>
        </div>
    </nav>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">my series</div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">starting number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="starting_number"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">ending number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="ending_number"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">odd / even</label>
                                    <div class="col-md-9">
                                        <label> <input type="radio" name="odd_even" value="odd"/>odd</label>
                                        <label> <input type="radio" name="odd_even" value="even"/>even</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"><?php echo isset($result) ? $result: ' ';?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit"  class=" btn btn-outline-success" name="btn" value="submit"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src=" ../assets/js/jquery-3.6.0.js"></script>
<script src=" ../assets/js/bootstrap.js"></script>

</body>
</html>