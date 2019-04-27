<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/head.html"); ?>
</head>

<body>
    <?php include("../includes/header.html") ?>
    <main>
        <div class="container" id="table-result">
            <br>
            <h3 class="text-center card-header"> Search Patients </h3>
            <div id="search" class="text-center">
            </div>
            <form method="post">
                <div class="form-group">
                    <label for="patientId">ID</label>
                    <input type="text" class="form-control" id="patientId" name="patientId" aria-describedby="IDHelp" placeholder="Enter patient's ID">
                    <small id="IDHelp" class="form-text text-muted">Returns patient with given ID.</small>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="search">Search</button>
                </div>
            </form>
            <br>
        </div>
    </main>
    <?php include("../includes/footer.html"); ?>
    <?php require_once("db.php"); ?>
</body>

</html>