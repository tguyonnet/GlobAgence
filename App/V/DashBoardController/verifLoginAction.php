<?php
if ($this->authentification)
{
    header("location:?c=DashBoard&a=liste");
}
else
{
    header("location:?c=DashBoard&a=login");

}