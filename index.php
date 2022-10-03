<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="form.php "method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Votre demande</h1>

        <p class="row">
            <label for="firstname" class="form-label">Votre prénom :</label>
            <input type="text" name="firstname" id="firstname" class="form-control">
        </p>

        <p class="row">
            <label for="lastname" class="form-label">Votre nom: </label>
            <input type="text" name="lastname" id="lastname" class="form-control">
        </p>

        <p class="row">
            <label for="email" class="form-label">Votre email: </label>
            <input type="email" name="email" id="email" class="form-control">
        </p>

        <p class="row">
            <label for="phoneNumber" class="form-label">Votre numéro de téléphone: </label>
            <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control">
        </p>

        <p class="row">
            <label for="subjects" class="form-label">Au sujet de: </label>
            <select name="subject" id="subject">
            <option value="Sujet 1">Sujet 1</option>
            <option value="Sujet 2">Sujet 2</option>
            <option value="Sujet 3">Sujet 3</option>
            <option value="Sujet 4">Sujet 4</option>
            </select>
        </p>

        <p class="row">
            <label for="message" class="form-label">Votre message: </label>
            <input type="textarea" name="message" id="message" class="form-control">
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

</body>
</html>