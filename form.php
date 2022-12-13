<div class="container">

    <h3 class="center grey-text">Add more records in one of the fields.</h3>


    <div class="row">
        <div class="col s12"></div>
        <div class="col s6">
            <h5>Insert a new data </h5>
            <div class="progress">
                <div class="determinate" style="width: 100%"></div>
            </div>


            <form method="post" action="insert.php">

                Name: <input type="text" name="name" placeholder="Type your name" />
                Address: <input type="text" name="address" placeholder="Type your address" />
                Phone: <input type="number" name="phone" placeholder="Type your phone number" />

                <input type="submit" name="btn" value="Submit" class="btn btn-success">

            </form>


        </div>

        <div class="col s6">

            <h5>or Upload a data .csv </h5>


            <div class="progress">
                <div class="determinate" style="width: 100%"></div>
            </div>


            <form method="post" action="import.php" enctype="multipart/form-data">
                <div class="file-field input-field grey-text">

                    <div class="btn grey">
                        <span>File</span>
                        <input type="file" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                </div>


                </br>
                <input type="submit" name="btn" value="Import" class="btn btn-success">
            </form>



        </div>
    </div>





</div>