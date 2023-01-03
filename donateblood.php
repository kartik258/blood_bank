<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <style>
        #container {
            border: 2px solid black;
            width: 35%;
            margin-left: 33%;
            margin-top: 10%;
            background-color: aliceblue;
            z-index: 500;
        }

        .form h2 {
            font: 30px;
            /* background-color: aqua; */
        }
    </style>
</head>

<body>
    <div id="container">
        <div class="form">
            <h2>Blood Donation Form</h2>
            <form action="backend.php">

                <div>
                    <label for="Blood-Bank">Choose Blood Bank:</label>
                    <select name="myBank" id="Blood-Bank">
                        <option value="1">Pune Blood Bank</option>
                        <option value="2">Kem Hospital Blood Bank</option>
                        <option value="3">Jankalyan Blood Bank</option>
                        <option value="4">Poona Serological Institute Blood Bank</option>
                    </select>
                </div>
                <br>
                <div>
                    Date: <input type="date" name="myDate">
                </div>
                <br>
                <div>
                    <label for="Time-Slot">Choose your slot:</label>
                    <select name="mySlot" id="Time-Slot">
                        <option value="1">8 a.m. - 11 a.m.</option>
                        <option value="2">12 p.m. - 3 p.m.</option>
                        <option value="3">4 p.m. - 7 p.m.</option>
                    </select>
                </div>
                <br>
                <div>
                    Have you donated Blood earlier?: <input type="checkbox" name="myEligibility">
                </div>
                <br>
                <div>
                    Blood Group: <input type="radio" name="myGender"> A+ <input type="radio" name="myGender">
                    A- <input type="radio" name="myGender"> B+ <input type="radio" name="myGender"> B- <input
                        type="radio" name="myGender"> AB+ <input type="radio" name="myGender"> AB- <input type="radio"
                        name="myGender"> O+ <input type="radio" name="myGender"> O-
                </div>
                <br>
                <div>
                    <input type="submit" value="Submit Now">
                    <input type="reset" value="Reset Now">
                </div>
            </form>
        </div>

    </div>
</body>

</html>