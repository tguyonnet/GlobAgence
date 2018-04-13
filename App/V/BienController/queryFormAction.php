<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 06/04/18
 * Time: 17:12
 */
echo "<h1>".$this->ville."</h1>";
echo '<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>';

                foreach ($this->biens as $bien)
                {
                 echo '<tr><td>';
                 echo $bien->setVille();
                 echo '</td></tr>';

                 }
                echo '
                </tbody>
                </table>
                </div>';

echo "<h1>".$this->codePostal."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setCodePostal();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->rue."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setRue();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->numeroAppartement."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setNumeroAppartement();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->lieuDit."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setlieuDit();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->superficieBien."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setSuperficieBien();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->superficieTerrain."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setSuperficieTerrain();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->prixHFAI."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setprixHFAI();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->numerobatiment."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setNumeroBatiment();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->typeBienId."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setTypeBienId();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->nombrePieces."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setNombrePieces();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';

echo "<h1>".$this->nombreChambres."</h1>";
echo 'div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>';

                foreach ($this-> biens as $bien){
                    echo '<tr><td>';
                    echo $bien->setNombreChambres();
                    echo'</td></tr>';

                 }
                 echo '
                 </tbody>
                 </table>
                 </div>';
    
$ville = $_POST['ville'];
$codePostal = $_POST['codePostal'];
$rue = $_POST['rue'];

echo '<t>ville : '.$ville.' </t>'.'<br />'.'<t>code postal : '.$codePostal.' </t>'.'<br />'.'<t>rue : '.$rue.' </t>';