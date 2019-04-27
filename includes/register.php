<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/head.html"); ?>
</head>

<body>
    <?php include("../includes/header.html") ?>
    <main>
        <div class="container">
            <br>
            <h3 class="text-center card-header"> Register Patients </h3>
            <div id="register" class="text-center">
            </div>
            <br>
            <form method="post">
                <div class="form-group">
                    <label for="patientId">ID</label>
                    <input type="number" class="form-control" id="patientId" name="patientId" aria-describedby="IDHelp" placeholder="Enter patient's ID">
                    <small id="IDHelp" class="form-text text-muted">The ID must be unique.</small>
                </div>
                <div class="form-group">
                    <label for="patientName">Name</label>
                    <input type="text" class="form-control" id="patientName" name="patientName" placeholder="Enter patient's Name">
                </div>
                <div class="form-group">
                    <label for="patientDateOfEntry">Date Of Entry</label>
                    <input type="date" class="form-control" id="patientDateOfEntry" name="patientDateOfEntry" placeholder="Enter patient's Date Of Entry">
                </div>
                <div class="form-group">
                    <label for="patientMedicalHistory">Medical History</label>
                    <textarea class="form-control" id="patientMedicalHistory" name="patientMedicalHistory" aria-describedby="MedicalHelp" placeholder="Enter patient's MedicalHistory">
                    </textarea>
                    <small id="MedicalHelp" class="form-text text-muted">Medical history has a string with the name of the disease, a number of prescribed medicines, and the date when the disease took place.</small>

                </div>
                <div class="form-group">
                    <label for="patientPhysician">Physician</label>
                    <input type="text" class="form-control" id="patientPhysician" name="patientPhysician" placeholder="Enter patient's Physician">
                </div>

                <div class="form-group">
                    <label for="patientLastVisit">Last Visit</label>
                    <input type="date" class="form-control" id="patientLastVisit" name="patientLastVisit" placeholder="Enter patient Last Visit">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" name="register" value="Register">
                    <br>
                </div>
            </form>
            <br>
        </div>
    </main>
    <?php include("../includes/footer.html"); ?>
    <?php require_once("db.php"); ?>
</body>

</html>