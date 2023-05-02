<?php

class Menu
{

    // Belge classı (veri çekmek için)
    private $con;
    private $errorArray = array();


    public function __construct($con)
    {
        $this->con = $con;
    }



    public function showAllMenu()
    {

        $query = $this->con->prepare("SELECT * FROM menu");

        $query->execute();

        $html = "";
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $html .= $this->getMenuHtml($row, null);
        }
        return $html;
    }


    private function getMenuHtml($sqlData, $title)
    {
        $id = $sqlData['id'];
        $isim = $sqlData['isim'];
        $soyisim = $sqlData['soyisim'];
        $okul = $sqlData['okul'];
        $no = $sqlData['no'];



        $html = "<tr>

        <td>{$id}</td>
        <td>{$isim}</td>
        <td>{$soyisim}</td>
        <td>{$okul}</td>
        <td>{$no}</td>


    </tr>"
;

        return $html;
    }
    public function menuUpdate(){
      $query = $this->con->prepare("UPDATE menu SET order=? WHERE id=?");
    }
  }
