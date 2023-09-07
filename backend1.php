<?php

$conn = mysqli_connect('localhost', 'root', "", 'ajax_crud');
extract($_POST);//extract function is used to import var from an array into the current symbol table

// if(isset($_POST['readrecord'])){
//     $data = '<table class="table table-bodered table-striped">
//     <tr>
//     <th>NO.</th>
//     <th>First Name</th>
//     <th>Last Name</th>
//     <th>Email Address</th>
//     <th>Mobile Number</th>
//     <th>Edit Action</th>
//     <th>Delete Action</th>
//     </tr>';

//     $displayquery = "SELECT * FROM `insertdata` ";
//     $result = mysqli_query($conn,$displayquery);

//     if (mysqli_num_rows($result) > 0){
//         $number = 1;
//         while ($row = mysqli_fetch_array($result)){

//             $data .= '<tr> 
//             <td>'.$number.'</td>
//             <td>'.$row['firstname'].'</td>
//             <td>'.$row['lastname'].'</td>
//             <td>'.$row['email'].'</td>
//             <td>'.$row['mobile'].'</td>
//             <td> 
//             <button onClick="GetUserDetails('.$row['id'].')" class="btn sbtn-warning">Edit</button>
//             </td>
//             <td> 
//             <button onClick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
//             </td>
//             </tr>';
//             $number++;
//         }
//     }
// }





if (isset($_POST['firstname']) && isset($_POST['lastname']) &&
isset($_POST['email']) && isset($_POST['mobile']) ) //Isset() function is used to check whether a variable is set or not

{

    $query = "INSERT INTO `crud_table` (`Firstname`, `Lastname`, `email`, `mobile`) VALUES ('$firstname', '$lastname', '$email', '$mobile')";
    
    // $query = " INSERT INTO `Crud_table`(`Firstname`, `Lastname`, `email`, `mobile`) VALUES ('$firstname', '$lastname', '$email', '$mobile'  ) ";
    mysqli_query($conn,$query);
}
die();
?>