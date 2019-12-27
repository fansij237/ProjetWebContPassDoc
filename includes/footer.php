
<span class="ui three item black menu configmenu bottom fixed menu piled segment inverted">
    <span class="item">
        <span class="date" style="margin-left:2px;">
            <?php 
                $jour=array(1=>"Lundi, ",2=>"Mardi, ",3=>"Mercredi, ",4=>"Jeudi, ",5=>"Vendredi, ",6=>"Samedi, ",7=>"Dimanche, ");
                $moi=array(1=>"janvier ",2=>"fevrier ",3=>"mars ",4=>"avril ",5=>"mai ",6=>"juin ",7=>"juillet ",8=>"aout ",9=>"septembre ",10=>"octobre ",11=>"novembre ",12=>"decembre ");
                $i=Date("w");
                echo $jour[$i];
                echo date('j')." ";
                $i=Date("m");
                echo $moi[$i];
                echo "20".date('y')." ";
            ?>
        </span>
    </span>
        <a class="item"> &copy; Le groupe du WEB ISMAT &compfn; IGL-2 2019</a>
    <span class="item">
        <span class="lnr lnr-question-circle"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="help.php">Besoin d'aide?</a>
    </span>
</span>

<style>
    span.i{
        color:transparent;
    }
</style>