<?php include("../../includes/menuheader.php"); ?>
<style>
    .configmenu a.active{
        background:rgba(136, 79, 32, 0.215)!important;
    }
</style>
<span class="ui container">
    <h4 class="ui header">
        <a>Configurations</a>
    </h4>
    <span class="ui three item teal menu configmenu">
        <a href="?opt=1" class="item 
        <?php 
            if(isset($_GET['opt'])){
                if($_GET['opt']==1) {echo "active"; $a=1;}
                }else{
                    echo "active";
                } 
        ?>">
            Informations personnelles
        </a>
        <a href="?opt=2" class="item 
        <?php 
            if(isset($_GET['opt'])){
                if($_GET['opt']==2) {echo "active"; $a=2;}
                }
        ?>">
            Application
        </a>
        <a href="?opt=3" class="item 
        <?php 
            if(isset($_GET['opt'])){
                if($_GET['opt']==3) {echo "active"; $a=3;}
            }
        ?>">
            Feedbacks / Bogues
        </a>
    </span>
</span>
    <?php 
    if(!$_GET['opt']){
        $a=1;
    }
        if($a==1){
            echo 1;
        }elseif($a==2){
            echo 2;
        }else{
    ?>
           <center>
            <span class="ui two fields">
                <span class="field">
                    <label>Selection Dropdown</label>
                    <span class="ui selection dropdown" tabindex="0">
                        <span class="default text">Select</span>
                        <i class="dropdown icon"></i>
                        <input type="hidden" name="hidden-field">
                        <span class="menu transition hidden" tabindex="-1" style="">
                        <span data-value="1" class="item">Choice 1</span>
                        <span data-value="2" class="item">Choice 2</span>
                        </span>
                    </span>
                </span>
                <span class="ui field">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="field">
                <span class="two fields">
                <span class="field">
                <label>Selection Dropdown</label>
                <span class="ui selection dropdown" tabindex="0">
                    <span class="default text">Select</span>
                    <i class="dropdown icon"></i>
                    <input type="hidden" name="hidden-field">
                    <span class="menu transition hidden" tabindex="-1" style="">
                    <span data-value="1" class="item">Choice 1</span>
                    <span data-value="2" class="item">Choice 2</span>
                    </span>
                </span>
                </span>
                    <span class="field">
                        <label>HTML Select</label>
                        <select>
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </span>
                </span>
                <div class="field">
                    <textarea class="ui segment"></textarea>
                </div>
            </span>
           </center>
    <?php
        }
    ?>
<?php include("../../includes/footer.php"); ?>
