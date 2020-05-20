<?php
    include_once 'includes/dbh.inc.php'  ;
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="select user_id from users where user_name='$name' and user_password='$password' ;";
    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if ($resultcheck>0) {
        while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['user_id'];
            echo $id;
        }} ?>

<?php
            $sql="select * from personal where personal_id='$id';";
            $personal_result=mysqli_query($conn,$sql);
            $resultcheck=mysqli_num_rows($personal_result);
            if ($resultcheck>0){
                while ($row=mysqli_fetch_assoc($personal_result)) {
                    $id=$row['personal_id'];
                    echo $id." || " ;
                    $name=$row['name'];
                    echo $name." || " ;
                    $birth=$row['birth'];
                    echo $birth." || " ;
                    $adress=$row['adress'];
                    echo $adress." || " ;
                    $email=$row['email'];
                    echo $email." || " ;
                    $kind=$row['kind'];
                    echo $kind." || \n " ;
                }} 
            $sql="select * from diploma where diploma_id='$id';";
            $diploma_result=mysqli_query($conn,$sql);
            $resultcheck=mysqli_num_rows($diploma_result);
            if ($resultcheck>0) {
                while ($row=mysqli_fetch_assoc($diploma_result)) {
                    $id=$row['diploma_id'];
                    echo "<br>".$id." || " ;
                    $wagt1=$row['wa9t1'];
                    echo $wagt1." || " ;
                    $diploma1=$row['diploma1'];
                    echo $diploma1." || " ;
                    $desc1=$row['decr1'];
                    echo $desc1." || " ;

                    $wagt2=$row['wa9t2'];
                    echo $wagt2." || " ;
                    $diploma2=$row['diploma2'];
                    echo $diploma2." || " ;
                    $desc2=$row['decr2'];
                    echo $desc2." || " ;

                    $wagt3=$row['wa9t3'];
                    echo $wagt3." || " ;
                    $diploma3=$row['diploma3'];
                    echo $diploma3." || " ;
                    $desc3=$row['decr3'];
                    echo $desc3." || " ;}} 
            $sql="select * from final where final_id='$id';";
            $final_result=mysqli_query($conn,$sql);
            $resultcheck=mysqli_num_rows($final_result);
            if ($resultcheck>0) {
                while ($row=mysqli_fetch_assoc($final_result)) {
                    $id=$row['final_id'];
                    echo "<br>".$id." || " ;
                    $lang=$row['lang'];
                    echo $lang." || " ;
                    $proj=$row['proj'];
                    echo $proj." || " ;
                    $club=$row['club'];
                    echo $club." || " ;}}
        ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mon CV personnalisé</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="cv1.css">
    </head>
    <body>
        
        <div class="page">
            <div class="infophoto">
                <div class="info">

                    <p><strong><?=$name?></strong><br/>
                    Né le <?=$birth?></p>
                    <p> <?=$adress?> <br/>
                    +216 52664796 <br/>
                    <?=$email?><br>
                    permis : <?=$kind?></p>
                </div>
                <div class="photo">
                    <img src="mohamed.jpg" alt="Photo mohamed" width="20%"/>
                </div>
            </div>
            <div class="section">
                <h2>Formation</h2>
                <div class="sec-gauche" id="forma-gauche">
                    <p><?=$wagt1?></p>
                    <p><?=$wagt2?></p>
                    <p><?=$wagt3?></p>
                </div>
                <div class="sec-droite">
                	<br>
                    <p><span class="titre"><?=$diploma1." : "?>  <?=$desc1?> </p>
                    <p><span class="titre"><?=$diploma2." : "?>  <?=$desc2?></p>
                    <p><span class="titre"><?=$diploma3." : "?>  <?=$desc3?> </p>
                </div>
            </div>
            <div class="section">
                <h2>Langues parlées et autres compétences</h2>
                <div class="sec-gauche">
                    <?php
                        $array=explode(" ",$lang) ;
                        foreach($array as $i){
                            echo $i."<br>";}
                    ?>
                </div>
                <div class="sec-droite">
                	<br>
                    <p>courant <br> bon
                    <br>
                    Bonne connaissance</p>
                    <p>PyQt5, Python, sql,opencv
                    C++/C, CSS, html</p>
                </div>
            </div>
            <div class="section">
                <h2>Autres expériences et centres d'interet</h2>
                <div class="sec-gauche">
                    <p>projets :</p>
                </div>
                <div class="sec-droite">
                    <p>projects : <?=$proj?></p>
                    <p>clubs : <?=$club?></p>
                </div>
            </div>
        </div>
    </body>
</html>

