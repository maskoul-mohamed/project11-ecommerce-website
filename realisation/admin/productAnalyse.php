<?php
    class ProductAnalyse {
        private $idProduct;
        private $nameProduct;
        private $totalInCart;

        function setIdProduct($idProduct){
            $this->idProduct = $idProduct;
        }

        function getIdProduct(){
            return $this->idProduct ;
        }

        function setNameProduct($nameProduct){
            $this->nameProduct = $nameProduct;
        }

        function getNameProduct($nameProduct){
            return $this->nameProduct;
        }

        function setTotalInCart($totalInCart){
            $this->totalInCart;
        }

        function getTotalInCart(){
            return $this->totalInCart;
        }
    }
?>