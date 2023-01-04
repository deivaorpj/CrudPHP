<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col align-self-center">
                    <div class="container col-6  bg-light p-5">
                        <h1>Adicionar Usuário</h1>

                        <form method="POST" action="adicionar_action.php">
                            <div class=" col-8 mb-3">
                                <label class="form-label">Nome</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="col-8 mb-3">
                                <label>E-mail</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <input value="Adicionar" type="submit" class="btn btn-primary"></input>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/bootstrap.min.js.map" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>