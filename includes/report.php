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
            <h3 class="text-center card-header"> Report </h3>
            <div id="report" class="text-center">
            </div>
            <form method="post">
                <div class="form-group">
                    <label for="patientLastVisit">Last Visit</label>
                    <input type="date" class="form-control" id="patientLastVisit" name="patientLastVisit" placeholder="Enter patient Last Visit">
                    <small id="VistHelp" class="form-text text-muted">Generates report on patients last vist at that date.</small>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="report">Report</button>
                </div>
            </form>
            <br>
        </div>
    </main>
    <?php include("../includes/footer.html"); ?>
    <?php require_once("db.php"); ?>
</body>

</html>