<?php
include('./adminheader.php');
?>
<?php
$conn = new mysqli('localhost', 'root', '', 'lms_db');
?>

<div class="col-sm-9 mt-5">
<!--Table-->
    <p class="bg-dark text-white p-2">List of Students</p>
    <?php
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
    
    ?>
        <table class="table">   
        <thead>
            <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
       <?php while($row = $result->fetch_assoc()){
        echo '<tr>';
           echo '<th scope="row">'.$row['Student_id'].'</th>';
            echo '<td>'.$row['Student_name'].'</td>';
            echo '<td>'.$row['Email'].'</td>';
            echo '<td>';
             echo' <button
                type="submit"
                class="btn btn-info mr-3"
                name="view"
                value="View"
                >
                <i class="fa fa-pen">Edit</i>

            </button>
                <button
                type="submit"
                class="btn btn-secondary"
                name="delete"
                value="Delete"
                >
                <i class="far fa-trash-alt"> Delete</i>
                </button>
            </td>
        </tr>';
         } ?>
    </tbody>
</table>
    <?php } else{
        echo "0 Result";
    }?>
</div>
</div>
    <!-- div Row close from header -->
     <div>
        <a class="btn btn-danger box" style="font-size: 25px;" href="Addcourses.php"
            ><i class="fas fa-plus fa-2x"></i
            >+</a>
        </div> 