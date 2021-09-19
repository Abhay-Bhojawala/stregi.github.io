<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"studentdatabase");

$id = $_GET['id'];

$result = mysqli_query($con,"SELECT * FROM abhay WHERE mobile='$id'");
$data = mysqli_fetch_array($result); 

if(isset($_POST['update'])) 
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $date_of_birth=$_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $department=$_POST["department"];
    $college = $_POST["college"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];

    $edit = mysqli_query($con,"UPDATE abhay set fname='$fname', lname='$lname', age=$age, email='$email', date_of_birth='$date_of_birth', gender='$gender', department='$department', college='$college', mobile=$mobile, address='$address' where mobile='$id'");

    if($edit)
    {
        mysqli_close($con);
        header("location:ddisplay.php");
        exit;
    }
    else
    {
        echo mysqli_error($con);
    }       
}
?>

<h3>Update Data</h3>
<script type="text/javascript" src="valid.js"></script>
<form name="register" id="studvalid" onsubmit="return validation()" method="POST">
    <fieldset>
        <br>
        <br>    
        <table cellspacing="15" align="center">
            <tr>
                <td><label>FIRST NAME:</label></td>
                <td><input type="text" name="fname" placeholder="first name" value="<?php echo $data['fname'] ?>"></td>
            </tr>
            <tr>
                <td><label>LAST NAME:</label></td>
                <td><input type="text" name="lname" placeholder="last name"  value="<?php echo $data['lname'] ?>"></td>
            </tr>
            <tr>
                <td><label>YOUR AGE:</label></td>
                <td><input type="integer" name="age"  value="<?php echo $data['age'] ?>"></td>
            </tr>
            <tr>
                <td><label>EMAIL ID:</label></td>
                <td><input type="email" name="email"  value="<?php echo $data['email'] ?>"></td>
            </tr>
            <tr>
                <td><label>DATE OF BIRTH:</label></td>
                <td><input type="date" name="date_of_birth"  value="<?php echo $data['date_of_birth'] ?>"></td>
            </tr>
            <tr>
                <td><label>GENDER:</label></td>
                <td><input type="radio" name="gender" value="male" id="male" checked <?php if($data['gender'] == "male") { echo "checked"; } ?>>male
                    <input type="radio" name="gender" value="female" id="female" <?php if($data['gender'] == "female") { echo "checked"; } ?>>female
                    <input type="radio" name="gender" value="other" id="other" <?php if($data['gender'] == "other") { echo "checked"; } ?>>other
                </td>
            </tr>
            <tr>
                <td><label>CHOOSE YOUR DEPARTMENT:</label></td>
                <td><select name="department" id="depart">
                    <option value="b.tech(ce)" selected <?php if($data['department'] == "b.tech(ce)") { echo "selected"; } ?>>b.tech(ce)</option>
                    <option value="b.tech(it)" <?php if($data['department'] == "b.tech(it)") { echo "selected"; } ?>>b.tech(it)</option>
                    <option value="b.tech(me)" <?php if($data['department'] == "b.tech(me)") { echo "selected"; } ?>>b.tech(me)</option>
                    </select>   
                </td>
            </tr>
            <tr>
                <td><label>COLLEGE NAME:</label></td>
                <td><input type="text" name="college" value="<?php echo $data['college'] ?>"></td>
            </tr>
            <tr>
                <td><label for="mobile">MOBILE NUMBER:</label></td>
                <td><input type="text" name="mobile" placeholder="mobile number" value="<?php echo $data['mobile'] ?>"><br><span id="mobilee"></span></td>
            </tr>
            <tr>
                <td><label>ENTER YOUR ADDRESS:</label></td>
                <td><textarea name="address" rows="4" cols="60" value="<?php echo $data['address']?>"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </fieldset>
    </form>