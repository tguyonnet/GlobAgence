<?php
if ($this->authentification)
{
    header("location:?c=Bien&a=listeClient");
}
else
{
    header("location:?c=DashBoard&a=login");

}