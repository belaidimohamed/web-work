<!DOCTYPE html>
<html>
    <head>
        <title>ex5</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styleex5.css"/>
    </head>
    <body>
        <h3>Premiere question</h3>
        <form>
            <select>
                <?php
                for  ($i=1;$i<=4;$i++)
                { ?>
                    <option>
                        <?php
                            $nb = 0;
                            $n = rand(1,500);
                            while($nb < 100 || $nb > 999)
                            {
                                while(rand(1,500) != $n)
                                {
                                    $nb = $nb + 1;
                                }
                            }
                            echo $nb;
                        ?>
                    </option>
               <?php }
                ?>
            </select>
        </form>
        <h3>Deuxieme question</h3>
        <?php
            function tri_tab_assoc($tab,$mode)
            {
                if ($mode == "keys")
                {
                    ksort($tab);
                    return (print_r($tab));
                }
                if ($mode == "values")
                {
                    natcasesort($tab);
                    return (print_r($tab));
                }
            }
            $tab=array("France"=>"Paris","Allmeagne"=>"Berlin","Espagne"=>"Madrid");
            $copietab = $tab;
            echo  "Le contenu du tableau avant le tri : </br>";
            print_r($tab); echo "</br>";
            echo  "Le contenu du tableau apres le tri selon les cles : </br>";
            tri_tab_assoc($tab,"keys"); echo "</br>";
            echo  "Le contenu du tableau apres le tri selon les valeurs : </br>";
            tri_tab_assoc($copietab,"values");
        ?>
        <h3>Troisieme question</h3>
        <?php
        
        ?>
        <form action="ex5_script.php" method="POST" >
            <table class="table">
                <tr class="th">
                    <td colspan="3"><h2>Calculatrice</h2></td>
                </tr>
                <tr>
                    <td><input type="text" name="nb1" value="<?php if(isset($_POST["nb1"]) && !is_nan($_POST["nb1"]))
                        echo $_POST['nb1'];else echo'' ?>"/></td>
                    <td>
                        <select name="op">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*" >*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="nb2" value="<?php if(isset($_POST["nb2"]) && !is_nan($_POST["nb2"]))
                        echo $_POST['nb2'];else echo'' ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="affiche" value="Afficher le resultat" /></td>
                    <td><input type="reset" value="Annuler"/></td>
                </tr>
                <tr>
                    <td colspan="3">Resultat : <?php if(isset($_GET['res']))
								                        echo $_GET['res']; 
						                       ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>