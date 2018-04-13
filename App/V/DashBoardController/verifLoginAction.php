<?php
if ($this->authentification)
{
    header("location:index.php??c=DashBoard&a=liste");
}
else
{
    header("location:index.php??c=DashBoard&a=login");

}