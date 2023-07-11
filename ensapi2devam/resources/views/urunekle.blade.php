<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container mt-5">
<form action="http://127.0.0.1:8000/api/item/add" method="POST">
    <div class="mb-3">
    <input  class="form-control" type="text" name="name" placeholder="Öğe Adı" /> </div>
    <div class="mb-3">
    <input  class="form-control" type="text" name="desc" placeholder="Öğe Açıklaması" /> </div>
    <div class="mb-3">
    <input  class="form-control" type="number" name="miktar" placeholder="Miktarı" /></div>
    <button type="submit" class="btn btn-success">Ekle</button>
    <a href="http://127.0.0.1:8001/getir"><button type="button" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" style="margin-top:-5px;" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg> Listeye dön</button></a>
  </form>
</div>