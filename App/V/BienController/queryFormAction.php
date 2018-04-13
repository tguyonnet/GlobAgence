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

                foreach ($this->biens as bien)
                {
                 echo '<tr><td>';
                 echo bien->getVille();
                 echo '</td></tr>';
                 }
                echo '
                </tbody>
                </table>
                </div>';