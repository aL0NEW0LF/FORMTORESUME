<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="formstyle.css">
    <title>Document</title>
</head>
<body>
    <form id="cv" action="cv.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td colspan="4">
                    <label for="fname">First name:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="text" id="fname" name="fname" required placeholder="Enter your first name">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="lname">Last name:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="text" id="lname" name="lname" required placeholder="Enter your last name">                
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="sexe">Sexe:</label><br><br>
                    <input type="radio" id="Femme" name="sexe" value="Femme">
                    <label for="Femme">Femme</label><br>
                    <input type="radio" id="Homme" name="sexe" value="Homme">
                    <label for="Homme">Homme</label><br><br>    
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="age">Age:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="number" id="age" name="age" min="18" required placeholder="Enter your age">                
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="phone">Numero de telephone:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="tel" id="phone" name="phone" pattern="[0]{1}[6]{1}[\d \W \S]{8}" placeholder="06********">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="email">Email:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="email" id="email" name="email" required value="exemplemoalmi@gmail.com">                
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="desc">Description:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <textarea rows="4" cols="50" name="desc" form="cv" placeholder="Entrer une petite description sur vous ..." id="desc"></textarea>              
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="formation">Formation:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <textarea rows="4" cols="50" name="formation" form="cv" placeholder="Entrer vos formation ici..." id="formation"></textarea>              
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="experience">Experiences:</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <textarea rows="4" cols="50" name="exp" form="cv" placeholder="Entrer vos experiences ici..." id="exp"></textarea>              
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="file" class="picupload">Votre photo</label>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="file" id="file" name="file" accept="image/png, image/jpeg">
                </td>
            </tr>
            <tr>
                <td style="width: 50px;">
                    <div class="linkedinimg"></div>
                </td>
                <td style="width: auto;">
                    <input id="linkedinurl" name="linkedinurl" type="url" placeholder="Linkedin profile"/>
                </td>
                <td style="width: 50px;">
                    <div class="twitterimg"></div>
                </td>
                <td>
                    <input id="twitterurl" name="twitterurl" type="url" placeholder="twitter profile"/>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="Submit" name="submit">            
                </td>
            </tr>
        </table>
      </form>
</body>
</html>