<?php
       if (isset($_POST['submit'])) {
        $lname=$_POST["lname"];
        $fname=$_POST["fname"];
        $sexe=$_POST["sexe"];
        $age=$_POST["age"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $desc=$_POST["desc"];
        $formation=$_POST["formation"];
        $exp=$_POST["exp"];
        $linkedinurl=$_POST["linkedinurl"];
        $twitterurl=$_POST["twitterurl"];

        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'png', 'jpeg');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;

                    $fileDestination = 'images/'.$fileNameNew;

                    move_uploaded_file($fileTmpName,$fileDestination);
                } else {
                    echo "error";
                }
            } else {
                echo "error";
            }
        }
        else {
            echo "error";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resumestyle.css">
    <title>CV</title>
</head>
<body>
    <div class="topbar"></div>
    <div class="pic">
        <img src="<?php echo $fileDestination ?>" id="pic">
    </div>
    <div class="name">
        <p>
            <?php
                echo "$fname $lname";
            ?>    
        </p>
    </div>
    <div class="grid-container">
        <div class="item1">
            <?php
                echo "$desc";
            ?> 
        </div>
        <div class="item2"></div>
        <div class="item3">
            <table>
                <tr>
                    <td colspan="2" class="bigtitle">
                        Information personnelle
                    </td>
                </tr>
                <tr>
                    <td class="firstcol">
                        Nom:
                    </td>
                    <td>
                        <?php
                            echo "$lname";
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td class="firstcol">
                        Prenom:
                    </td>
                    <td>
                        <?php
                            echo "$fname";
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td class="firstcol">
                        Age:
                    </td>
                    <td>
                        <?php
                            echo "$age";
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td class="firstcol">
                        Sexe:
                    </td>
                    <td>
                        <?php
                            if (isset($_POST['sexe']))   // if ANY of the options was checked
                                echo $sexe;    // echo the choice
                            else
                                echo "nothing was selected.";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="firstcol">
                        Telephone:
                    </td>
                    <td>
                        <?php
                            echo "$phone";
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td class="firstcol">
                        Email:
                    </td>
                    <td>
                        <?php
                            echo "$email";
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="bigtitle">
                        Formation
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="cvinfos">
                        <?php
                            echo "$formation";
                        ?> 
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="bigtitle">
                        Experiences
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="cvinfos">
                        <?php
                            echo "$exp";
                        ?> 
                    </td>
                </tr>
            </table>
        </div>
        <div class="item4"></div>
        <div class="item5">
            <a href="https://www.linkedin.com/in/mohamed-amine-fakhre-eddine-87971a247/" target="_blank"><div class="linkedinimg"></div></a>
            <a href="https://twitter.com/aLonewolf_____" target="_blank"><div class="twitterimg"></div></a>
        </div>
    </div>
</body>
</html>